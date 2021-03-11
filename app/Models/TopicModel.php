<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model TopicModel
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property int $user_id
 * @property int $support_count
 * @property int $share_count
 * @property int $status
 * @property string $video_url
 * @property int $created_at
 * @property int $updated_at
 * @property string $refuse_reason
 * @property int $is_top
 * @property int $weight
 *
 * @method static \Lyue\Database\DB | \App\Models\TopicModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\TopicModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\TopicModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\TopicModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\TopicModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TopicModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\TopicModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TopicModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TopicModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TopicModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class TopicModel extends AbstractModel
{
    protected $table = 'topic';


}
