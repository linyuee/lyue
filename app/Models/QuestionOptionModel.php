<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model QuestionOptionModel
 *
 * @property int $id
 * @property int $question_id
 * @property string $content
 * @property int $is_right
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\QuestionOptionModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\QuestionOptionModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\QuestionOptionModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\QuestionOptionModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\QuestionOptionModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\QuestionOptionModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\QuestionOptionModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\QuestionOptionModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\QuestionOptionModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\QuestionOptionModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class QuestionOptionModel extends AbstractModel
{
    protected $table = 'question_option';


}
