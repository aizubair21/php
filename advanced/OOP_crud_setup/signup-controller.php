<?php

use function PHPSTORM_META\type;

class congiguration
{
    private $name, $userName, $email, $phone, $password;
    public $nameErr, $userNameErr, $emailErr, $phoneErr, $passwordErr;

    public function __construct()
    {
    }



    public function name($name)
    {
        if (!empty($name)) {
            if (strlen($name) >= 5) {
                $this->name = $name;
                return true;
            } else {
                $this->nameErr = "Name must be 5 character.";
            }
        } else {
            $this->nameErr = __FUNCTION__ . " field is required.";
        }
    }

    public function username($username)
    {
        if (!empty($username)) {
            if (strlen($username) >= 5) {
                $this->userName = $username;
                return true;
            } else {
                $this->userNameErr = "UserName must be 5 character.";
            }
        } else {
            $this->userNameErr = __FUNCTION__ . " field is required.";
        }
    }
    public function phone($phone)
    {
        if (!empty($phone)) {
            if (strlen($phone) == 11 && intval($phone)) {
                $this->phone = $phone;
                return true;
            } else {
                $this->phoneErr = "phone must be 11 character.";
            }
        } else {
            $this->phoneErr = __FUNCTION__ . " field is required.";
        }
    }
    public function email($email)
    {
        if (!empty($email)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->email = $email;
                return true;
            } else {
                $this->emailErr = "Give a valid email.";
            }
        } else {
            $this->emailErr = __FUNCTION__ . " field is required.";
        }
    }
    public function password($password)
    {
        if (!empty($password)) {
            if (strlen($password) >= 8) {
                $this->password = $password;
                return true;
            } else {
                $this->passwordErr = "Password maximum 8 digit.";
            }
        } else {
            $this->passwordErr = __FUNCTION__ . " field is required.";
        }
    }

    //insert method
    public function getName()
    {
        if ((!empty($this->name) && !empty($this->phone)) && !empty($this->email) && !empty($this->userName) && !empty($this->password)) {
        } else {
            return "Please fill all field.";
        }
    }

    //select method


    //edit/upate method

    //delete method

    //errorShow into sebsite;
    public function isError($errorValue)
    {
        if (isset($errorValue)) {

            echo "<div><strong class='text text-danger'> $errorValue </strong></div>";
        }
    }
}
