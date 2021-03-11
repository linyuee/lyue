<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model QuestionModel
 *
 * @property int $id
 * @property string $content
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\QuestionModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\QuestionModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\QuestionModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\QuestionModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\QuestionModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\QuestionModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\QuestionModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\QuestionModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\QuestionModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\QuestionModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class QuestionModel extends AbstractModel
{
    protected $table = 'question';


}
