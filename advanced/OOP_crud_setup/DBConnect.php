<?php

namespace connection;

use DBHandler;
use mysqli;

class DBConnection
{
    private $host = 'localhost', $user = 'root', $password = '', $db = 'coderbees';
    public $connect;
    public function __construct()
    {
        $connect = new mysqli($this->host, $this->user, $this->password, $this->db);
        $this->connect = $connect;
    }
}
