<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model CategoryModel
 *
 * @property int $id
 * @property string $name
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\CategoryModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\CategoryModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\CategoryModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\CategoryModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\CategoryModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\CategoryModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\CategoryModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\CategoryModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\CategoryModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\CategoryModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class CategoryModel extends AbstractModel
{
    protected $table = 'category';


}
