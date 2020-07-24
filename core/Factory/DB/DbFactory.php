<?php
/**
 * Created by PhpStorm.
 * User: hw201902
 * Date: 2020/7/21
 * Time: 16:55
 */

namespace Core\Factory\DB;


class DbFactory
{
    public static function getDbInstance($type){
        switch ($type){
            case 'mysql':
                $connection = Mysql::getInstance();
                break;
            default:
                $connection = Mysql::getInstance();
                break;
        }
        return $connection;
    }
}