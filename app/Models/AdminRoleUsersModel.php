<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model AdminRoleUsersModel
 *
 * @property int $role_id
 * @property int $user_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleUsersModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleUsersModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleUsersModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleUsersModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleUsersModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleUsersModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleUsersModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleUsersModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleUsersModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleUsersModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class AdminRoleUsersModel extends AbstractModel
{
    protected $table = 'admin_role_users';


}
