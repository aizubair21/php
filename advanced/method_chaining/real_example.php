<?php
class DBHandler
{
    public $columns = array();
    public $table;
    public $where;
    public $limit;
    public $build_query = [' SELECT ', ' FROM ', ' WHERE ', ' LIMIT '];
    public function select($columns)
    {
        $this->columns = $columns;
        return $this;
    }
    public function from($table)
    {
        $this->table = $table;
        return $this;
    }
    public function where($where)
    {
        $this->where = $where;
        return $this;
    }
    public function limit($limit)
    {
        $this->limit = $limit;
        return $this;
    }
    public function result($selectedColumns = "*")
    {
        $query = $this->build_query[0];
        // if the columns array is empty, select all columns else given columns
        if (count($this->columns) >= 1 && !empty($this->columns[0])) {
            $query .= implode(', ', $this->columns);
        } else {
            $query .= $selectedColumns;
        }
        $query .= $this->build_query[1];
        $query .= $this->table;

        //if cahaing where method
        if (!empty($this->where)) {
            $query .= $this->build_query[2];
            $query .= $this->where;
        }

        //if chaining limit method
        if (!empty($this->limit)) {
            $query .= $this->build_query[3];
            $query .= $this->limit;
        }
        return $query;
    }
}


//create instance object
$database = new DBHandler;
$database->select([''])->from('auth')->where('email = email@example.xyz');
echo $database->result(); //SELECT * FROM auth WHERE email = email@example.xyz :)
