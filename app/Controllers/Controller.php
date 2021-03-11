<?php
/**
 * Created by PhpStorm.
 * User: yuelin
 * Date: 2018/9/11
 * Time: 下午3:01
 */
namespace App\Controllers;



abstract class Controller
{
    public function response($data){
        return json_encode(['code'=>0,'data'=>$data,'msg'=>'ok']);
    }

    protected function validtor($rule, $method = 'GET')
    {

        if ($method == 'GET') {
            $params = $_GET;
        } elseif ($method == 'POST') {
            if (strstr(request()->header('content-type'), 'form-data')) {
                $params = $_POST;
            } else {
                $params = json_decode(file_get_contents('php://input'), true);
                $params = empty($params) ? [] : $params;
            }

        } else {
            return [];
        }
        $result = [];
        foreach ($rule as $key => $item) {
            $requires = explode('||', $item);
            if (!array_key_exists($key, $params) && !in_array('*', $requires)) {
                throw new \Lyue\Exception\ValidatorException('缺少参数' . $key);
            }
            if (!array_key_exists($key, $params)) {
                continue;
            }
            foreach ($requires as $require) {
                //在这里扩展规则
                if (explode(':', $require)[0] == 'in') {
                    if (!in_array($params[$key], explode(',', explode(':', $require)[1]))) {
                        throw new \Lyue\Exception\ValidatorException($key . '参数类型错误');
                    }
                }
                //正则
                if (explode(':', $require)[0] == 'pattern') {
                    if (!preg_match(explode(':', $require)[1], $params[$key])) {
                        throw new \Lyue\Exception\ValidatorException($key . '参数规则错误');
                    }
                }
                //类型
                if (explode(':', $require)[0] == 'type') {
                    $type = explode(':', $require)[1];
                    if (($type == 'int' && !is_numeric($params[$key])) || ($type == 'array' && !is_array($params[$key]))) {
                        throw new \Lyue\Exception\ValidatorException($key . '参数类型错误');
                    }
                }
                //长度
                if (explode(':', $require)[0] == 'length') {
                    if (strlen($params[$key]) != explode(':', $require)[1]) {
                        throw new \Lyue\Exception\ValidatorException($key . '参数长度错误');
                    }
                }

            }

            $result[$key] = $params[$key];
        }
        return $result;
    }
}
