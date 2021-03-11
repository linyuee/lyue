<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model TopicSupportModel
 *
 * @property int $id
 * @property int $topic_id
 * @property int $user_id
 * @property int $created_at
 * @property int $updated_at
 * @property int $status
 *
 * @method static \Lyue\Database\DB | \App\Models\TopicSupportModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\TopicSupportModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\TopicSupportModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\TopicSupportModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\TopicSupportModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TopicSupportModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\TopicSupportModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TopicSupportModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TopicSupportModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TopicSupportModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class TopicSupportModel extends AbstractModel
{
    protected $table = 'topic_support';


}
