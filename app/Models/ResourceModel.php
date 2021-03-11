<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model ResourceModel
 *
 * @property int $id
 * @property string $title
 * @property string $cover
 * @property int $category_id
 * @property string $url
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\ResourceModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\ResourceModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\ResourceModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\ResourceModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\ResourceModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\ResourceModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\ResourceModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\ResourceModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\ResourceModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\ResourceModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class ResourceModel extends AbstractModel
{
    protected $table = 'resource';


}
