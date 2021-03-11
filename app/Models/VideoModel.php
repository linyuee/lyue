<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model VideoModel
 *
 * @property int $id
 * @property string $title
 * @property string $cover
 * @property string $url
 * @property int $category_id
 * @property int $tag_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\VideoModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\VideoModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\VideoModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\VideoModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\VideoModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\VideoModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\VideoModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\VideoModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\VideoModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\VideoModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class VideoModel extends AbstractModel
{
    protected $table = 'video';


}
