<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model UserCollectModel
 *
 * @property int $id
 * @property int $type
 * @property int $collect_id
 * @property int $user_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\UserCollectModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\UserCollectModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\UserCollectModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\UserCollectModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\UserCollectModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\UserCollectModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\UserCollectModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\UserCollectModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\UserCollectModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\UserCollectModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class UserCollectModel extends AbstractModel
{
    protected $table = 'user_collect';


}
