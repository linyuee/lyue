<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model FileModel
 *
 * @property int $id
 * @property int $user_id
 * @property string $md5
 * @property string $type
 * @property string $path
 * @property string $url
 * @property int $created_at
 * @property int $updated_at
 *
 * @method static \Lyue\Database\DB | \App\Models\FileModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\FileModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\FileModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\FileModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\FileModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\FileModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\FileModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\FileModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\FileModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\FileModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class FileModel extends AbstractModel
{
    protected $table = 'file';


}
