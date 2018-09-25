<?php
namespace App\Controllers;

use Pingqu\OpenApiSdk\Transcode\Client;

class TestController extends Controller
{
    public function test(){

//        $client = new Client('tDKh3VB5Fd2UXH2YW','setDKhVm5FdUXH2Y1W');
//        $res = $client->VideoJob()->add('changshijiaoyu/audio/Liekkas.mp3','changshijiaoyu/audio/Liekkas1.mp3',22,13);
//        var_dump($res);
        //throw new \Exception(222);
        $a = 1/0;
        return json_encode(['test1'=>111]);
    }

    function test1(){
        echo 111;
    }
}