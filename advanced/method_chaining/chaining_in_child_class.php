<?php
class DBProperty
{
    public $hostName, $userName, $password, $db_name;

    //setter method 
    public function hostname($host)
    {
        $this->hostName = $host;
        return $this;
    }

    //getter method
    public function connect()
    {
        return "host: {$this->hostName}, user: {$this->userName}, password: {$this->password}, database: {$this->db_name}";
    }
}

class connection extends DBProperty
{

    //setter method
    public function user($user)
    {
        $this->user = $user;
        return $this;
    }

    public function password($password)
    {
        $this->password = $password;
        return $this;
    }

    public function db_name($db_name)
    {
        $this->db_name = $db_name;
        return $this;
    }
}


//make instance
$conn = new connection;
$conn->hostname('localhost')->user('root')->password('NULL')->db_name('auth');
echo $conn->connect(); //host: localhost, user: , password: NULL, database: auth
