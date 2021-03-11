<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model SmsLogModel
 *
 * @property int $id
 * @property int $user_id
 * @property string $phone
 * @property string $code
 * @property int $is_use
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\SmsLogModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\SmsLogModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\SmsLogModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\SmsLogModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\SmsLogModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\SmsLogModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\SmsLogModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\SmsLogModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\SmsLogModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\SmsLogModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class SmsLogModel extends AbstractModel
{
    protected $table = 'sms_log';


}
