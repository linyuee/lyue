<?php

use Lyue\Route\Router;

/**
 * Created by PhpStorm.
 * User: hw201902
 * Date: 2020/7/24
 * Time: 18:35
 */


Router::where('name', '[a-z]+')
    ->namespace("Api")
    ->group(function () {
        Router::prefix("api")
            ->group(function () {
                Router::post('test', 'TestController@test');
            });
    });
