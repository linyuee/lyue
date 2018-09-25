<?php
namespace Core;

use App\Controllers\TestController;

class Router
{

    protected $routes = [];

    public static function init($rule){
        $route = ltrim($_SERVER['REDIRECT_URL'],'/');
        if (!isset($rule[$route])){
            throw new \Exception('404');
        }
        $callback = explode('@',$rule[$route]);
        //$res = call_user_func_array(array('App\Controllers\\'.$controller[0],$controller[1]),[]);
        $class = 'App\Controllers\\'.$callback[0];
        $res = call_user_func_array(array(new $class(),$callback[1]),[]);
        echo $res;

    }
    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new \Exception('No route defined for this URI.');

    }
}

