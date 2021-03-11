<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model ArticleReleaseModel
 *
 * @property int $id
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\ArticleReleaseModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\ArticleReleaseModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\ArticleReleaseModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\ArticleReleaseModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\ArticleReleaseModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\ArticleReleaseModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\ArticleReleaseModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\ArticleReleaseModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\ArticleReleaseModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\ArticleReleaseModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class ArticleReleaseModel extends AbstractModel
{
    protected $table = 'article_release';


}
