<?php
/**
 * Created by PhpStorm.
 * User: hw201902
 * Date: 2020/7/29
 * Time: 11:43
 */

namespace App\Exceptions;


use Lyue\Exception\SystemException;
use Lyue\Exception\ValidatorException;

class Handler
{
    //错误异常捕获回调
    public  function render($exception){
        if ($exception instanceof ValidatorException){
            echo json_encode(['code'=>400,'msg'=>$exception->getMessage()]);
        }elseif ($exception instanceof SystemException){

        }else{
            echo json_encode(['code'=>-1,'msg'=>$exception->getMessage()]);
        }
    }
}
