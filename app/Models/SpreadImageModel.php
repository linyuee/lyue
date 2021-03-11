<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model SpreadImageModel
 *
 * @property int $id
 * @property int $spread_id
 * @property string $url
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\SpreadImageModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\SpreadImageModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\SpreadImageModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\SpreadImageModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\SpreadImageModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\SpreadImageModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\SpreadImageModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\SpreadImageModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\SpreadImageModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\SpreadImageModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class SpreadImageModel extends AbstractModel
{
    protected $table = 'spread_image';


}
