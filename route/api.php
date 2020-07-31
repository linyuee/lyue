<?php
/**
 * Created by PhpStorm.
 * User: hw201902
 * Date: 2020/7/24
 * Time: 18:35
 */
Lyue\Route\Router::where('name', '[a-z]+')
    ->where('id', '\d{1,2}')
    // ->prefix("admin")
    ->namespace("Api")
    ->group(function (Lyue\Route\Router $router) {
        Lyue\Route\Router::get('dashboard', 'DashboardController@index');
        Lyue\Route\Router::prefix("api")
            ->group(function () {
                Lyue\Route\Router::post('test', 'TestController@test');
            });
    });