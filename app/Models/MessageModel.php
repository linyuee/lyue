<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model MessageModel
 *
 * @property int $id
 * @property int $type
 * @property int $user_id
 * @property int $relate_user_id
 * @property int $topic_id
 * @property string $content
 * @property int $created_at
 * @property int $updated_at
 * @property int $comment_id
 * @property int $is_read
 *
 * @method static \Lyue\Database\DB | \App\Models\MessageModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\MessageModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\MessageModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\MessageModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\MessageModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\MessageModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\MessageModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\MessageModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\MessageModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\MessageModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class MessageModel extends AbstractModel
{
    protected $table = 'message';


}
