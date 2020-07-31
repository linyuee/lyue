<?php
/**
 * Created by PhpStorm.
 * User: yuelin
 * Date: 2018/9/7
 * Time: 下午5:48
 */
namespace App\Controllers\Api;
use App\Controllers\Controller;

class TestController extends Controller
{
    public function test(){
        $params = $this->validtor([
            'type'=>''
        ]);
        return json_encode(['code'=>0,'msg'=>'ok']);
    }

    public function twoSum($nums, $target) {
        for($i = 0;$i<count($nums);$i++){
            for($j=$i+1;$j<count($nums);$j++){
                var_dump($i . '+' . $j);
                if($nums[$i]+$nums[$j] == $target){
                    return [$i,$j];
                }
            }
        }
    }
}
