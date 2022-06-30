<?php
require "interface.php";

use interfaceClass as ifc; //make alias 'ifc' for 'interfaceCalss' namespace


//------- A class that implements an interface must implement all of the interface's methods--------//
class doMath implements ifc\math, ifc\check //implement check, must use two method inside check interface class

{
    //use check; //fetal error.
    public function div($num1, $num2)
    {
        # code...
        return $num1 / $num2;
    }
    public function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function mul($num1, $num2)
    {
        # code...
        return $num1 * $num2;
    }

    public function isInt($arg) //check method 
    {
        # code...
        if (is_integer($arg)) {
            # code...
            return "Is an integer\n";
        } else {
            return "Isn't integer\n";
        }
    }

    public function isStr($arg) //check method
    {
        # code...
        if (is_string($arg)) {
            # code...
            return "Is an String \n";
        } else {
            return "Isn't a string\n";
        }
    }
}

$iDoMath = new doMath;
// echo $iDoMath->add(50, 450); //500
// echo '\n';
echo $iDoMath->isInt(125);
