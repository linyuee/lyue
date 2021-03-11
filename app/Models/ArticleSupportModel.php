<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model ArticleSupportModel
 *
 * @property int $id
 * @property int $user_id
 * @property int $article_id
 * @property int $created_at
 * @property int $updated_at
 * @property int $status
 *
 * @method static \Lyue\Database\DB | \App\Models\ArticleSupportModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\ArticleSupportModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\ArticleSupportModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\ArticleSupportModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\ArticleSupportModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\ArticleSupportModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\ArticleSupportModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\ArticleSupportModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\ArticleSupportModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\ArticleSupportModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class ArticleSupportModel extends AbstractModel
{
    protected $table = 'article_support';


}
