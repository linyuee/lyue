<?php
/**
 * Created by PhpStorm.
 * User: hw201902
 * Date: 2020/7/10
 * Time: 11:35
 */

namespace Core\Provider;


use App\Librarys\Test;
use function Couchbase\defaultDecoder;

class AppProvider
{
    private $container;
    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function init(array $instances){
        foreach ($instances as $key => $item) {
            $this->container->bind($key,function () use($item){
                return new $item();
            });
        }
    }

    public function getInstance($instance){
        $ee = $this->container->make($instance);
        return $ee;
    }
}