<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model AdminPermissionsModel
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $http_method
 * @property string $http_path
 * @property string $created_at
 * @property string $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\AdminPermissionsModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\AdminPermissionsModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\AdminPermissionsModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminPermissionsModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminPermissionsModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminPermissionsModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminPermissionsModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminPermissionsModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminPermissionsModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminPermissionsModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class AdminPermissionsModel extends AbstractModel
{
    protected $table = 'admin_permissions';


}
