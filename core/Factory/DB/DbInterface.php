<?php
/**
 * Created by PhpStorm.
 * User: hw201902
 * Date: 2020/7/21
 * Time: 17:03
 */

namespace Core\Factory\DB;


interface DbInterface
{
    public function connection();

    public function query($sql);

}