#!/usr/bin/env php
<?php
define('BASE_PATH',__DIR__);
require_once __DIR__.'/vendor/autoload.php';
$app = new \Symfony\Component\Console\Application('lyue');
$application = new \Lyue\Console\Application($app);
$application->init();
$app->run();

exit();
