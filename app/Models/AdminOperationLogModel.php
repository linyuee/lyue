<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model AdminOperationLogModel
 *
 * @property int $id
 * @property int $user_id
 * @property string $path
 * @property string $method
 * @property string $ip
 * @property string $input
 * @property string $created_at
 * @property string $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\AdminOperationLogModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\AdminOperationLogModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\AdminOperationLogModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminOperationLogModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminOperationLogModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminOperationLogModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\AdminOperationLogModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminOperationLogModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminOperationLogModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\AdminOperationLogModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class AdminOperationLogModel extends AbstractModel
{
    protected $table = 'admin_operation_log';


}
