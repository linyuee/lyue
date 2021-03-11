<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model AdminMenuModel
 *
 * @property int $id
 * @property int $parent_id
 * @property int $order
 * @property string $title
 * @property string $icon
 * @property string $uri
 * @property string $permission
 * @property string $created_at
 * @property string $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\AdminMenuModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\AdminMenuModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\AdminMenuModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminMenuModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminMenuModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminMenuModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminMenuModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminMenuModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminMenuModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminMenuModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class AdminMenuModel extends AbstractModel
{
    protected $table = 'admin_menu';


}
