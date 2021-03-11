<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model RedpackModel
 *
 * @property int $id
 * @property int $user_id
 * @property float $amount
 * @property string $openid
 * @property int $created_at
 * @property int $updated_at
 * @property string $source
 * @property int $status
 * @property int $draw_time
 *
 * @method static \Lyue\Database\DB | \App\Models\RedpackModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\RedpackModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\RedpackModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\RedpackModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\RedpackModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\RedpackModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\RedpackModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\RedpackModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\RedpackModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\RedpackModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class RedpackModel extends AbstractModel
{
    protected $table = 'redpack';


}
