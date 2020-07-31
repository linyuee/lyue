<?php
define('LYUE_START', microtime(true));
define('BASE_PATH',__DIR__);
//var_dump($_SERVER);
require __DIR__ . '/../vendor/autoload.php';


$router_rule = array(
    'api/test' => 'TestController@test'
);

//自动加载
require __DIR__ . '/../vendor/lyue/framework/src/Psr4AutoloaderClass.php';

$psr4autoload = new Psr4AutoloaderClass();
$psr4autoload->addNamespace('App', '../app');
$psr4autoload->register();

$exceptionHandler = new \Lyue\Exception\Handler();
$exceptionHandler->handle();


$container = new \Lyue\Provider\Container();
$provider = new Lyue\Provider\AppProvider($container);
$provider->init(['Test' => \App\Librarys\Test::class]);

require __DIR__ . '/../route/api.php';

$request = new \Lyue\Http\Request();
$response = \Lyue\Http\HttpKernel::init($request);
$response->render();


