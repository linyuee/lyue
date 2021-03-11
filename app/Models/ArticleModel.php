<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model ArticleModel
 *
 * @property int $id
 * @property string $title
 * @property string $url
 * @property string $content
 * @property int $category_id
 * @property int $tag_id
 * @property int $user_id
 * @property int $status
 * @property int $weight
 * @property int $watch_count
 * @property string $author
 * @property string $cover
 * @property int $created_at
 * @property int $updated_at
 * @property int $release_time
 * @property int $release_id
 * @property string $remark
 *
 * @method static \Lyue\Database\DB | \App\Models\ArticleModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\ArticleModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\ArticleModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\ArticleModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\ArticleModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\ArticleModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\ArticleModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\ArticleModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\ArticleModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\ArticleModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class ArticleModel extends AbstractModel
{
    protected $table = 'article';


}
