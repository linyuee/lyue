<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model CompanyModel
 *
 * @property int $id
 * @property string $name
 * @property int $admin_id
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\CompanyModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\CompanyModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\CompanyModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\CompanyModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\CompanyModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\CompanyModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\CompanyModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\CompanyModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\CompanyModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\CompanyModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class CompanyModel extends AbstractModel
{
    protected $table = 'company';


}
