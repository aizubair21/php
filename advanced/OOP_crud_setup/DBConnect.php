<?php

namespace connection;

use DBHandler;
use mysqli;

class DBConnection
{
    private $host = 'localhost', $user = 'root', $password = '', $db = 'coderbees';
    protected $connect;

    public function __construct()
    {
        $connection = new mysqli($this->host, $this->user, $this->password, $this->db);
        $this->connect = $connection;
    }



    public function __destruct()
    {
        $this->connect->close();
    }
}

// $result = $conn->connect->query("SELECT * FROM POSTS");
// print_r($result->fetch_assoc());
