<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model TagModel
 *
 * @property int $id
 * @property string $name
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\TagModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\TagModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\TagModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\TagModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\TagModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TagModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\TagModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TagModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TagModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TagModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class TagModel extends AbstractModel
{
    protected $table = 'tag';


}
