<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model SpreadModel
 *
 * @property int $id
 * @property string $title
 * @property int $category_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\SpreadModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\SpreadModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\SpreadModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\SpreadModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\SpreadModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\SpreadModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\SpreadModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\SpreadModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\SpreadModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\SpreadModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class SpreadModel extends AbstractModel
{
    protected $table = 'spread';


}
