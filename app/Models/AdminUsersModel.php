<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model AdminUsersModel
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $name
 * @property string $avatar
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property int $pid
 *
 * @method static \Lyue\Database\DB | \App\Models\AdminUsersModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\AdminUsersModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\AdminUsersModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminUsersModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminUsersModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminUsersModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminUsersModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminUsersModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminUsersModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminUsersModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class AdminUsersModel extends AbstractModel
{
    protected $table = 'admin_users';


}
