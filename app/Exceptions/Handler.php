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
            return  json_encode(['code'=>400,'msg'=>$exception->getMessage()]);
        }elseif ($exception instanceof SystemException){
            return  json_encode(['code'=>-1,'msg'=>$exception->getMessage(),'data'=>['msg'=>$exception->getMessage(),'line'=>$exception->getLine(),'file'=>$exception->getFile(),'trace'=>$exception->getTrace()]]);
        }else{
            return  json_encode(['code'=>-1,'msg'=>$exception->getMessage(),'data'=>['msg'=>$exception->getMessage(),'line'=>$exception->getLine(),'file'=>$exception->getFile(),'trace'=>$exception->getTrace()]]);
        }
    }
}
