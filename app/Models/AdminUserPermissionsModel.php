<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model AdminUserPermissionsModel
 *
 * @property int $user_id
 * @property int $permission_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\AdminUserPermissionsModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\AdminUserPermissionsModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\AdminUserPermissionsModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminUserPermissionsModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminUserPermissionsModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminUserPermissionsModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminUserPermissionsModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminUserPermissionsModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminUserPermissionsModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminUserPermissionsModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class AdminUserPermissionsModel extends AbstractModel
{
    protected $table = 'admin_user_permissions';


}
