##### lyue，一个轻量级的php restful api开发框架

#### 1、安装 
```
git clone git@github.com:linyuee/lyue.git
```
到项目根目录执行依赖安装
```
composer install
```

#### 2、目录结构
```
lyue
    -app                --逻辑代码
        -Console        --命令行代码
        -Controller     --控制器
        -Exception      --异常捕获处理
        -Model          --模型层
    -config             --配置
    -public             --框架入口
    -route              --路由
    -storage            --文件存储
    -vender             --扩展包
```
框架的核心内容打包成composer包lyue/framework,框架依赖于该包

#### 3、核心

###### 1、服务容器
框架一开始会初始化一个Application类，这个类便是框架核心类，继承与容服务器类Container类。
服务容器是一个用于管理类依赖和执行依赖注入的强大工具，我们在框架启动的时候将框架所需的类型绑定到容器中去，然后解析出来使用。
使用singleton方法将类绑定到容器中，类型是单例。这样我们管理服务模块、实现依赖注入这些问题全都交给容器来做就好了。我们想要
什么样的服务，就向容器中添加，在需要使用的时候，就利用容器解析使用就可以了。

###### 2、门面
Facades 为应用的 IoC 服务容器 的类提供了一个静态的接口。实现内部仅仅定义了一个 getFacadeAccessor 方法，该方法返回了一个注册
组件的，当调用该门面类不存在的静态方法时，会触发门面的__callStatic方法
```$xslt
 public static function __callstatic($method, $arg)
    {
        $instance = static::getInstance(static::getFacadeAccessor(), $arg);
        return call_user_func_array(array($instance, $method), $arg);
    }
```
然后便会调用门面的静态方法getInstance，该方法会尝试冲服务容器中获取实例，如果获取不到则会创建该实例
```$xslt
public static function getInstance($classname, $args)
    {
        $obj = Application::getInstance()->make($classname);
        if (!empty($obj)) {
            return $obj;
        }
        return new $classname($args);
    }
```
于是，你便可以在框架全局里面轻松愉快地使用门面类了
```$xslt
\Lyue\Facades\Log::info('123');
```

#### 3、路由
路由文件再route文件夹下面的api.php文件
```$xslt
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
```

#### 4、ORM
首先在配置文件config/database.php填写数据库信息
然后命令行执行
```$xslt
php rookie create:models
```
便会在app/Models文件夹下面生成改数据库的表对应的model类了
在控制器中根据model类来操作对应的数据库
```$xslt
 $res = DB::table('user')->select(['id','phone','status'])->get();
        $res->each(function($item){
            $item->status = $item->status == 1?'正常':'异常';
        });
 return $this->response($res);
```

#### 5命令行
命令行基于symfony/console包扩展而来
###### 基本命令
创建command文件，位于app/Console/Command
```$xslt
php rookies make:command Test
```
创建Controller
```$xslt
php rookie create:controller TestController
```


