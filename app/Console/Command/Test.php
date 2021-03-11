<?php
namespace App\Console\Command;

use Lyue\Console\Command;


/**
 * Model Test
 *

 * @package App\Console\Command
 */
class Test extends Command
{
    protected $signature = 'test {name}';
    protected $desc = 'desc';


    public function handle(){
        $this->info(111);
        var_dump($this->getArgument('name'));
        $host = '127.0.0.1';
        $port = '7081';

        $conn = fsockopen($host, $port, $errno, $errstr, 3);
        if (!$conn) {
            dd('链接失败');
        }

        $method = 'Goods.GetName';
        $params = "我是字符串参数";
        $err = fwrite($conn, json_encode(array(
                'method' => $method,
                'params' => [$params],
                'id' => 0,
            ))."\n");
        if ($err === false){
            dd('写入数据失败');
        }

        stream_set_timeout($conn, 0, 30000);//超时配置
        $line = fgets($conn);
        if ($line === false) {
            dd('获取响应数据失败');
        }
        dd(json_decode($line,true));

    }
}
