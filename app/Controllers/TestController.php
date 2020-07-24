<?php
namespace App\Controllers;

use App\Librarys\Test;
use App\Models\UserModel;
use Pingqu\OpenApiSdk\Transcode\Client;

class TestController extends Controller
{
    public function test(){
        $res = \App\Models\UserModel::select(['id','phone'])->get();
        $res->each(function($item){
            $item->test = 1;
        });
        return json_encode(['code'=>1,'data'=>$res]);
    }

    function test1(){
        echo 111;
    }
}