<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model SigninModel
 *
 * @property int $id
 * @property int $user_id
 * @property string $date
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\SigninModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\SigninModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\SigninModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\SigninModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\SigninModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\SigninModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\SigninModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\SigninModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\SigninModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\SigninModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class SigninModel extends AbstractModel
{
    protected $table = 'signin';


}
