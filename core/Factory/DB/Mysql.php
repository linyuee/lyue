<?php
/**
 * Created by PhpStorm.
 * User: hw201902
 * Date: 2020/7/21
 * Time: 17:16
 */

namespace Core\Factory\DB;


class Mysql extends DbAbstract
{
    static private $_instance = NULL;

    /**
     *  私有化构造函数，防止外界实例化对象
     */
    private $db;

    public function __construct()
    {
    }

    /**
     *  私有化克隆函数，防止外界克隆对象
     */
    private function __clone()
    {
    }

    /**
     *  静态方法, 单例统一访问入口，如果存在实例返回该实例，否则创建新实例
     * @return  object  返回对象的唯一实例
     */
    static public function getInstance()
    {
        if (is_null(self::$_instance) || !isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function connection()
    {
        parent::connection(); // TODO: Change the autogenerated stub
        $this->db = \mysqli_connect("localhost", "homestead", "secret", 'blog', 33060);
        $this->db->set_charset('utf8');
        if (!$this->db) {
            die('Could not connect: ' . mysql_error());
        }
    }

    public function query($sql)
    {
        $query = $this->db->query($sql);
        if (!$query) {
            return false;
        }
        $result = [];
        while ($obj = $query->fetch_object()) {
            $result[] = $obj;
        }
        return $result;
    }


}