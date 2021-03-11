<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model UserModel
 *
 * @property int $id
 * @property string $phone
 * @property string $username
 * @property string $headimg
 * @property int $status
 * @property string $refresh_token
 * @property int $created_at
 * @property int $updated_at
 * @property string $realname
 * @property string $openid
 * @property string $company_name
 * @property int $pid
 * @property string $gmjky_openid
 * @property int $is_activity
 * @property int $is_index
 * @property int $last_login_time
 *
 * @method static \Lyue\Database\DB | \App\Models\UserModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\UserModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\UserModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\UserModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\UserModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\UserModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\UserModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\UserModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\UserModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\UserModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class UserModel extends AbstractModel
{
    protected $table = 'user';


}
