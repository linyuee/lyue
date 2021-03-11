<?php
namespace App\Models;

use Lyue\Database\AbstractModel;

/**
 * Model BannerModel
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $url
 * @property int $link_type
 * @property int $created_at
 * @property int $updated_at
 * @property int $weight
 *
 * @method static \Lyue\Database\DB | \App\Models\BannerModel where($column, $operator = null, $value = null, $boolean = 'and')
 * @method static \Lyue\Database\DB | \App\Models\BannerModel whereIn($column, $values, $boolean = 'and', $not = false)
 * @method static \Lyue\Database\DB | \App\Models\BannerModel leftJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\BannerModel rightJoin($table, $first, $operator = null, $second = null)
 * @method static \Lyue\Database\DB | \App\Models\BannerModel get($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\BannerModel paginate($perPage = 15, $columns = ['*'], $pageName = 'page', $page = null)
 * @method static \Lyue\Database\DB | \App\Models\BannerModel find($id, $columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\BannerModel first($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\BannerModel select($columns = ['*'])
 * @method static \Lyue\Database\DB | \App\Models\BannerModel orderBy($column, $direction = 'asc')

 * @package App\Model
 */
class BannerModel extends AbstractModel
{
    protected $table = 'banner';


}
