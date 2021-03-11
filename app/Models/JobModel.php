<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model JobModel
 *
 * @property int $id
 * @property int $type
 * @property string $title
 * @property int $start_time
 * @property int $end_time
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\JobModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\JobModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\JobModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\JobModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\JobModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\JobModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\JobModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\JobModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\JobModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\JobModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class JobModel extends AbstractModel
{
    protected $table = 'job';


}
