<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model CommentSupportModel
 *
 * @property int $id
 * @property int $user_id
 * @property int $comment_id
 * @property int $created_at
 * @property int $updated_at
 * @property int $status
 *
 * @method static \Lyue\Database\DB | \App\Models\CommentSupportModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\CommentSupportModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\CommentSupportModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\CommentSupportModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\CommentSupportModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\CommentSupportModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\CommentSupportModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\CommentSupportModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\CommentSupportModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\CommentSupportModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class CommentSupportModel extends AbstractModel
{
    protected $table = 'comment_support';


}
