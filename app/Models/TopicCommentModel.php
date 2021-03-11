<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model TopicCommentModel
 *
 * @property int $id
 * @property int $topic_id
 * @property int $user_id
 * @property string $content
 * @property int $pid
 * @property int $level
 * @property int $created_at
 * @property int $updated_at
 * @property int $pre_id
 * @property int $status
 *
 * @method static \Lyue\Database\DB | \App\Models\TopicCommentModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\TopicCommentModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\TopicCommentModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\TopicCommentModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\TopicCommentModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TopicCommentModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\TopicCommentModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TopicCommentModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TopicCommentModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TopicCommentModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class TopicCommentModel extends AbstractModel
{
    protected $table = 'topic_comment';


}
