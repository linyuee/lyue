<?php
/**
 * Created by PhpStorm.
 * User: hw201902
 * Date: 2020/7/21
 * Time: 17:26
 */

namespace Core\Factory\DB;


abstract class DbAbstract implements DbInterface
{
    public function connection()
    {
        // TODO: Implement connection() method.
    }

    public function query($sql){

    }
}