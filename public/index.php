<?php
define('LYUE_START', microtime(true));
define('BASE_PATH', realpath(__DIR__) . DIRECTORY_SEPARATOR);
define('ROOT_DIR', realpath(__DIR__ . '/../') . DIRECTORY_SEPARATOR);

require __DIR__ . '/../vendor/autoload.php';
$router_rule = array(
    'api/test' => 'TestController@test'
);

//自动加载
require __DIR__ . '/../vendor/lyue/framework/src/Psr4AutoloaderClass.php';

$psr4autoload = new Psr4AutoloaderClass();
$psr4autoload->addNamespace('App', '../app');
$psr4autoload->register();

$app = require_once __DIR__ . '/../vendor/lyue/framework/src/bootstrap.php';

//$provider = new Lyue\Provider\AppProvider($app);
//$provider->init(['Log' => \Lyue\Log\Log::class]);

$exceptionHandler = $app->make('exception');
$exceptionHandler->handle();

$pipes = array(
    \App\Middleware\BaseMiddleware::class
);
$middleware = $app->make('pipeline');



$request = $app->make(\Lyue\Http\Request::class);
$res = $middleware->send($request)->through($pipes)->then(function(){
});

$response = \Lyue\Http\HttpKernel::init($request);
$response->render();

