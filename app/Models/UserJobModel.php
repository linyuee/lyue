<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model UserJobModel
 *
 * @property int $id
 * @property int $job_id
 * @property int $user_id
 * @property int $status
 * @property int $finish_time
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\UserJobModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\UserJobModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\UserJobModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\UserJobModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\UserJobModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\UserJobModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\UserJobModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\UserJobModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\UserJobModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\UserJobModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class UserJobModel extends AbstractModel
{
    protected $table = 'user_job';


}
