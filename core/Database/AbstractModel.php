<?php
/**
 * Created by PhpStorm.
 * User: hw201902
 * Date: 2020/7/21
 * Time: 15:38
 */

namespace Core\Database;

use Core\Factory\DB\DbFactory;
use JsonSerializable;


abstract class AbstractModel implements \Iterator, JsonSerializable
{
    protected $where = [];
    protected $select;
    protected $result;
    protected $table;
    protected $connection;
    private $db;

    public function __construct()
    {
        $this->connection();
    }

    public function each(callable $fun)
    {
        foreach ($this->result as $item) {
            $fun($item);
        }
        return $this;
    }

    public function connection()
    {
        $this->db = DbFactory::getDbInstance($this->connection);//获取DB对象单例
        $this->db->connection();
    }

    protected function table($table)
    {

        $this->table = $table;
        return $this;
    }

    public function where(...$arg)
    {
        $arg = func_get_args();
        if (count($arg) == 2) {
            $this->where[] = $arg[0] . '=' . $arg[1];
        } elseif (count($arg) == 3) {
            $this->where = $arg[0] . $arg[1] . $arg[2];
        }
        return $this;
    }

    protected function select(array $select)
    {
        $this->select = implode(',', $select);
        return $this;
    }

    private function execute()
    {
        $where = '';
        if (count($this->where) != 0) {
            $where = 'where ';
            foreach ($this->where as $item) {
                $where .= ($item . ' and');
            }
            $where = rtrim($where, 'and');
        }
        $this->select = $this->select ?? '*';
        $sql = "select $this->select from $this->table $where ";
        return $sql;
    }

    public function get()
    {
        $sql = $this->execute();
        $res = $this->db->query($sql);
        $this->result = $res;
        return $this;
    }

    public function first()
    {
        $sql = $this->execute() . 'limit 1';
        $res = \DB::select($sql);
        $this->result = count($res) > 0 ? $res[0] : null;
        return $this;
    }

    public function jsonSerialize()
    {
        return $this->result;
    }

    // Rewind the Iterator to the first element
    public function rewind()
    {
        reset($this->result);
    }

    // Return the current element
    public function current()
    {
        return current($this->result);
    }

    // Return the key of the current element
    public function key()
    {
        return key($this->result);
    }

    // Move forward to next element
    public function next()
    {
        return next($this->result);
    }

    // Checks if current position is valid
    public function valid()
    {
        return ($this->current() !== false);
    }


    public static function __callStatic($method, $parameters)
    {
        return (new static)->$method(...$parameters);
    }

}