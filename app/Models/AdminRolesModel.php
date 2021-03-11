<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model AdminRolesModel
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $created_at
 * @property string $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\AdminRolesModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\AdminRolesModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\AdminRolesModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminRolesModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminRolesModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminRolesModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminRolesModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminRolesModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminRolesModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminRolesModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class AdminRolesModel extends AbstractModel
{
    protected $table = 'admin_roles';


}
