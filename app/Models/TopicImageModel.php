<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model TopicImageModel
 *
 * @property int $id
 * @property string $url
 * @property int $topic_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\TopicImageModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\TopicImageModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\TopicImageModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\TopicImageModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\TopicImageModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TopicImageModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\TopicImageModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TopicImageModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TopicImageModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\TopicImageModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class TopicImageModel extends AbstractModel
{
    protected $table = 'topic_image';


}
