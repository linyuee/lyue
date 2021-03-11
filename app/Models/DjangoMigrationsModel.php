<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model DjangoMigrationsModel
 *
 * @property int $id
 * @property string $app
 * @property string $name
 * @property string $applied
 *
 * @method static \Lyue\Database\DB | \App\Models\DjangoMigrationsModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\DjangoMigrationsModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\DjangoMigrationsModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\DjangoMigrationsModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\DjangoMigrationsModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\DjangoMigrationsModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\DjangoMigrationsModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\DjangoMigrationsModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\DjangoMigrationsModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\DjangoMigrationsModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class DjangoMigrationsModel extends AbstractModel
{
    protected $table = 'django_migrations';


}
