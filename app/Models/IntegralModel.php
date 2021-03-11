<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model IntegralModel
 *
 * @property int $id
 * @property int $user_id
 * @property int $change_num
 * @property int $current_num
 * @property string $desc
 * @property int $type
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\IntegralModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\IntegralModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\IntegralModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\IntegralModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\IntegralModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\IntegralModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\IntegralModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\IntegralModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\IntegralModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\IntegralModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class IntegralModel extends AbstractModel
{
    protected $table = 'integral';


}
