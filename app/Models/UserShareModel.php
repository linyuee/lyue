<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model UserShareModel
 *
 * @property int $id
 * @property int $article_id
 * @property int $user_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\UserShareModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\UserShareModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\UserShareModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\UserShareModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\UserShareModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\UserShareModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\UserShareModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\UserShareModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\UserShareModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\UserShareModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class UserShareModel extends AbstractModel
{
    protected $table = 'user_share';


}
