<?php

include "DBConnect.php";

use connection\DBConnection;
use DBHandler as GlobalDBHandler;


//select DB
class DBSelect extends DBConnection
{
    public $columns = array();
    public $table;
    public $where;
    public $limit;
    public $leftJoin;
    public $query_elements = [' SELECT ', ' FROM ', ' LEFT JOIN  ', ' WHERE ', ' LIMIT '];

    //setter method. set query data
    public function select(string $columns)
    {
        $this->columns = $columns;
        return $this;
    }
    public function from(string $table)
    {
        $this->table = $table;
        return $this;
    }
    public function where(string $where)
    {
        $this->where = $where;
        return $this;
    }
    public function leftJoin(string $leftJoin)
    {
        $this->leftJoin = $leftJoin;
        return $this;
    }
    public function limit(int $limit)
    {
        $this->limit = $limit;
        return $this;
    }

    //get from server
    public function query_builder($selectedColumns = "*")
    {
        $query = $this->query_elements[0];
        // if the columns array is empty, select all columns else given columns
        if (count($this->columns) >= 1 && !empty($this->columns[0])) {
            $query .= implode(', ', $this->columns);
        } else {
            $query .= $selectedColumns;
        }
        $query .= $this->query_elements[1];
        $query .= $this->table;

        if (!empty($this->leftJoin)) {
            $query .= $this->query_elements[2];
            $query .= $this->leftJoin;
        }

        if (!empty($this->where)) {
            $query .= $this->query_elements[3];
            $query .= $this->where;
        }

        if (!empty($this->limit)) {
            $query .= $this->query_elements[4];
            $query .= $this->limit;
        }
        return $query;
    }

    public function result()
    {
        $qry = $this->query_builder();
        $result = $this->connect->query($qry);
        return $result;
    }
}

//insert into DB
class DBInsert extends DBConnection
{
    public function insert(string $table, array $fild, array $value)
    {
        //get string from $field array
        $fields = implode(", ", $fild);
        $values = implode("', '", $value);

        // insert into database
        $insert_qry = "INSERT INTO $table ($fields) VALUES ('$values')";
        if ($this->connect->query($insert_qry)) {
            return "Inserted ";
        } else {
            return "Error : " . mysqli_error($this->connect);
        }
    }
}


//update DB
class DBUpdate extends DBConnection
{
    private $update, $table, $where, $set;
    private $query_string = ['UPDATE ', 'TABLE ', 'SET ', 'WHERE '];


    //set value into query_string 
    public function update(string $table)
    {
        $this->table = $table;
        return $this;
    }

    public function set(array $keyPerValue)
    {
        $this->set = $keyPerValue;
    }

    public function where(string $where)
    {
        $this->where = $where;
    }



    //get updated query string

}


// $data = new DBSelect;
// $data->select(['postId'])->from('posts');

// print_r(mysqli_fetch_assoc($data->result()));

// $query = new DBInsert;
// $result = $query->insert('users', ['userName', 'userEmail', 'userPhone', 'userPassword'], ['test user', 'test@example.xyz', '2015485520', 'password']);
// echo $result;
