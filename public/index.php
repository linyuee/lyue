<?php
define('LYUE_START', microtime(true));
//var_dump($_SERVER);
require __DIR__ . '/../vendor/autoload.php';


$router_rule = array(
    'api/test' => 'TestController@test'
);

//自动加载
require __DIR__ . '/../core/Psr4AutoloaderClass.php';
$psr4autoload = new Psr4AutoloaderClass();
$psr4autoload->addNamespace('Core', '../core');
$psr4autoload->addNamespace('App', '../app');
$psr4autoload->register();

$exceptionHandler = new \Core\Exception\Handler();
$exceptionHandler->handle();


$container = new \Core\Provider\Container();
//$container->bind('Test',function (){
//   return new \App\Librarys\Test();
//});
//$test = $container->make('Test');
//var_dump($test);die();
$provider = new Core\Provider\AppProvider($container);
$provider->init(['Test' => \App\Librarys\Test::class]);
$test = $provider->getInstance('Test');
$response = \Core\Router::init($router_rule);