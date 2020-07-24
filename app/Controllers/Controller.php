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
    public function response(){
        return json_encode();
    }
}