<?php

include "DBConnect.php";

use connection\DBConnection as DB;
use DBHandler as GlobalDBHandler;


//select DB
class DBSelect extends DB
{
    public $columns = array();
    public $table;
    public $where;
    public $limit;
    public $leftJoin;
    public $query_elements = [' SELECT ', ' FROM ', ' LEFT JOIN  ', ' WHERE ', ' LIMIT '];

    //setter method. set query data
    public function select(array $columns)
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
    public function select_query_builder($selectedColumns = "*")
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
        $qry = $this->select_query_builder();
        $result = $this->connect->query($qry);
        return $result;
    }
}

//insert into DB
class DBInsert extends DB
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
class DBUpdate extends DB
{
    private $update, $table, $set, $value, $where;
    private $query_string = ['', '', ' SET ', 'WHERE '];


    //set value into query_string 
    // public function __construct() 
    // {
    //     $this->update = 'UPDATE ';
    // }

    public function on(string $table)
    {
        $this->table = $table;
        $this->update = " UPDATE ";
        return $this; //for method chaining
    }

    public function set(array $key)
    {
        $this->set = $key;
        return $this;
    }

    public function value(array $value)
    {
        $this->value = $value;
        return $this;
    }

    public function where($where)
    {
        $this->where = $where;
        return $this;
    }



    //get updated query string
    public function update_query_builder()
    {

        if (!empty($this->update)) {
            $query = $this->query_string[0];
            $query .= $this->update;
        }

        if (!empty($this->table)) {
            $query .= $this->query_string[1];
            $query .= $this->table;
        }

        if (!empty($this->set) && !empty($this->value)) {
            $query .= $this->query_string[2];
            $query .= $this->joinTwoArray($this->set, $this->value);
        }

        if (!empty($this->where)) {
            $query .= $this->query_string[3];
            $query .= $this->where;
        }

        return $query;
    }

    public function joinTwoArray($arr1, $arr2)
    {
        $arrr = "";
        for ($i = 0; $i <= count($arr1) - 1; $i++) {
            if ($i == count($arr1) - 1) {
                $arrr .= "$arr1[$i] = '{$arr2[$i]}' ";
            } else {
                $arrr .= "$arr1[$i] = '{$arr2[$i]}', ";
            }
        }
        return $arrr;
    }

    //destruct 
    public function result()
    {
        if (!empty($this->update) && !empty($this->table) && !empty($this->set) && !empty($this->value) && !empty($this->where)) {
            // // return $this->query_builder();
            // echo "success";
            $update_query = $this->update_query_builder();
            // echo $update_query;

            $this->connect->query($update_query);
            return "success";
        } else {
            return $this->connect->connect_error;
        }
    }
}


// $data = new DBSelect;
// $data->select(['postId'])->from('posts');

// print_r(mysqli_fetch_assoc($data->result()));

// $query = new DBInsert;
// $query->insert('tests', ['name', 'email'], ['janina', 'ajanina']);
// $result = $query->insert('tests', ['userName', 'userEmail', 'userPhone', 'userPassword'], ['test user', 'test@example.xyz', '2015485520', 'password']);
// echo $result;
// $key = ['name', 'email'];
// $val = ['zubair', 'janina'];

// function joinTwoArray($arr1, $arr2)
// {
//     $arrr = '';
//     for ($i = 0; $i <= count($arr1) - 1; $i++) {

//         if ($i == count($arr1) - 1) {
//             $arrr .= "$arr1[$i] = '{$arr2[$i]}'";
//         } else {
//             $arrr .= "$arr1[$i] = '{$arr2[$i]}', ";
//         }
//     }
//     return $arrr;
// }
// echo joinTwoArray($key, $val);

$update = new DBUpdate;

$update->on('tests')->set(['name', 'email'])->value(['zubair', 'janina'])->where('id = 6');
$result = $update->result();
print_r($result);
