<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model EmployeeModel
 *
 * @property int $id
 * @property string $name
 * @property string $company
 * @property string $position
 * @property string $phone
 * @property int $company_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\EmployeeModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\EmployeeModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\EmployeeModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\EmployeeModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\EmployeeModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\EmployeeModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\EmployeeModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\EmployeeModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\EmployeeModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\EmployeeModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class EmployeeModel extends AbstractModel
{
    protected $table = 'employee';


}
