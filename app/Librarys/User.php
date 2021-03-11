<?php
/**
 * Created by PhpStorm.
 * User: hw201902
 * Date: 2020/6/15
 * Time: 9:27
 */

namespace App\Librarys;


class User
{
    private $username;
    public $id;


    public function __construct()
    {
        $this->id = 1;
    }

    public function getUsername(){
        return $this->username;
    }


    public function getAttribute(){
        $vars = get_object_vars($this);
        foreach ($vars as $k => $v) {
            echo $k, ' => ', $v, PHP_EOL;
        }
    }
}
