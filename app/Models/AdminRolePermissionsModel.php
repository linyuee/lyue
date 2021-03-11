<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model AdminRolePermissionsModel
 *
 * @property int $role_id
 * @property int $permission_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\AdminRolePermissionsModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\AdminRolePermissionsModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\AdminRolePermissionsModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminRolePermissionsModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminRolePermissionsModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminRolePermissionsModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminRolePermissionsModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminRolePermissionsModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminRolePermissionsModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminRolePermissionsModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class AdminRolePermissionsModel extends AbstractModel
{
    protected $table = 'admin_role_permissions';


}
