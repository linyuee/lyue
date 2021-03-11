<?php
/**
 * Created by PhpStorm.
 * User: yuelin
 * Date: 2018/9/7
 * Time: 下午5:48
 */

namespace App\Controllers\Api;

use App\Controllers\Controller;
use App\Librarys\User;
use App\Models\UserModel;
use Lyue\Application;
use Lyue\Facades\App;
use Lyue\Facades\DB;
use Lyue\Facades\Log;
use Lyue\Facades\Router;
use Lyue\Http\Request;
use Lyue\Middleware;


class TestController extends Controller
{
    public function test()
    {

       dd(1);
        $user = UserModel::where('status',1)->get();
        dd($user);
//       $res = Route::prefix('api')->group(function (Route $router) {
//           Route::get('dashboard', 'DashboardController@index');
//          Route::prefix("user")
//               ->group(function () {
//                  Route::post('test', 'TestController@test');
//               });
//       });
        $request = new Request();
        $middle1 = function (){
            var_dump(1);
        };
        $middle2 = function (){
            var_dump(2);
        };
        var_dump(3);
        $middleware = new Middleware();
        $middleware->bind($middle1);
        $middleware->bind($middle2);
        $middleware->run($request);

    }

    public function twoSum($nums, $target)
    {
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                var_dump($i . '+' . $j);
                if ($nums[$i] + $nums[$j] == $target) {
                    return [$i, $j];
                }
            }
        }
    }
}
