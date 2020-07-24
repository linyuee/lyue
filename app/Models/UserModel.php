<?php
/**
 * Created by PhpStorm.
 * User: hw201902
 * Date: 2020/7/23
 * Time: 11:16
 */

namespace App\Models;


use Core\Database\AbstractModel;

class UserModel extends AbstractModel
{
    protected $table = 'user';
    protected $connection = 'mysql';
}