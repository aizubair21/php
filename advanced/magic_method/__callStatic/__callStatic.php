<?php

/**
 * __callStatic magic method is automaticly called when we call a undefined static method. it's similler to __call.
 * But, the __call method called when we call a undefined or private or protected metod from outsite.
 */

class setting
{
    public static $name, $email, $phone, $password;
}

class user extends setting
{
    private static function changePassword($password, $newPassword)
    {
        echo parent::$password = $newPassword;
    }


    //__callstatic method, handle error to call private static method;
    public static function __callStatic($name, $arg)
    {
        echo "This is private";

        // if (method_exist($this, $name)) { //method_exist won't work into static metod

        // }
    }

    //__call method to handle call private mthod
    public function __call($method, $arg)
    {
        echo $method . " only for admin";
    }
}


//object
// user::changePassword(124, 254); // have an error, as method is private as well as static.

user::changePassword(120, 254); //after define __calStatiic method output is : this is private

//what if i make a object
$user = new user;
// $user->changePassword(120, 554); //error method is private,

$user->changePassword(12, 254); //after define __call method output is : changePassword only for admin, fine
