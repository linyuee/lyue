<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model DjangoContentTypeModel
 *
 * @property int $id
 * @property string $name
 * @property string $app_label
 * @property string $model
 *
 * @method static \Lyue\Database\DB | \App\Models\DjangoContentTypeModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\DjangoContentTypeModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\DjangoContentTypeModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\DjangoContentTypeModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\DjangoContentTypeModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\DjangoContentTypeModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\DjangoContentTypeModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\DjangoContentTypeModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\DjangoContentTypeModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\DjangoContentTypeModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class DjangoContentTypeModel extends AbstractModel
{
    protected $table = 'django_content_type';


}
