<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model AdminRoleMenuModel
 *
 * @property int $role_id
 * @property int $menu_id
 * @property string $created_at
 * @property string $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleMenuModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleMenuModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleMenuModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleMenuModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleMenuModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleMenuModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleMenuModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleMenuModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleMenuModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminRoleMenuModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class AdminRoleMenuModel extends AbstractModel
{
    protected $table = 'admin_role_menu';


}
