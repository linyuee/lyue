<?php


namespace App\Middleware;


use Lyue\Http\Request;

class BaseMiddleware
{
    public static function handle(Request $request, \Closure $next)
    {
        $response = $next($request);

        // 执行动作
        var_dump(111);
        return $response;
    }
}
