<?php

include "DBHandeler.php";
include "ErrorHandle.php";

use connection\handle\DBInsert;
// use connection\handle\DBDelete;
// use connection\handle\DBUpdate;
// use connection\handle\DBSelect;

class userConfig
{
    use ErrorHandle;

    private $name, $email, $phone;
    public $nameErr, $emailErr, $phoneErr;

    public function name($name)
    {
        $this->name = $name;
        if (!empty($name)) {
            if (strlen($name) >= 5) {
                $this->name = $name;
                return $this;
            } else {
                $this->nameErr = "Name must be 5 character.";
            }
        } else {
            $this->nameErr = __FUNCTION__ . " field is required.";
        }

        // $this->required($name, 'nameErr');
        return $this;
    }

    public function username($username)
    {
        $this->userName = $username;
        if (!empty($username)) {
            if (strlen($username) >= 5) {
                return $this;
            } else {
                $this->userNameErr = "userName must be 5 character.";
            }
        } else {
            $this->userNameErr = __FUNCTION__ . " field is required.";
        }
        return $this;
    }
    public function phone($phone)
    {
        $this->phone = $phone;
        if (!empty($phone)) {
            if (strlen($phone) == 11 && intval($phone)) {
            } else {
                $this->phoneErr = "phone must be 11 character.";
            }
        } else {
            $this->phoneErr = __FUNCTION__ .  " field is required.";
        }
        // $this->required($phone, "poneErr");
        return $this;
    }
    public function email($email)
    {
        $this->email = $email;
        // $this->required($email, "emailErr");
        if (!empty($email)) {
            $this->unique($email, "user", "userEmail", "emailErr");
        } else {
            $this->emailErr = __FUNCTION__ . " field is required";
        }
        // $select = new DBSelect;
        // $select->select(['publisherId'])->from('publisher')->where("publisherEmail = '$email'");

        // $result = $select->result();
        // if ($result->num_rows > 0) {
        //     $this->emailErr = "Email Already exist.";
        // } else {
        //     $this->email = $email;
        //     return $this;
        // }
        return $this;
    }
    public function password($password)
    {
        $this->password = $password;
        if (!empty($password)) {
            if (strlen($password) >= 8) {
                return $this;
            } else {
                $this->passwordErr = "Password maximum 8 digit.";
            }
        } else {
            $this->passwordErr = __FUNCTION__ . " field is required.";
        }
        return $this;
    }

    //insert method
    public function signup()
    {
        if ((empty($this->nameErr) && empty($this->phoneErr)) && empty($this->emailErr)) {

            $insert = new DBInsert;
            $result = $insert->insert('user', ['userName', 'userEmail', 'userPhone',], [$this->name, $this->email, $this->phone]);
            return $result;
        } else {
            return false;
        }
    }
}
