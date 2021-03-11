<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model MigrationsModel
 *
 * @property int $id
 * @property string $migration
 * @property int $batch
 *
 * @method static \Lyue\Database\DB | \App\Models\MigrationsModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\MigrationsModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\MigrationsModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\MigrationsModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\MigrationsModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\MigrationsModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\MigrationsModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\MigrationsModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\MigrationsModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\MigrationsModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class MigrationsModel extends AbstractModel
{
    protected $table = 'migrations';


}
