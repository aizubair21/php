<?php

namespace interfaceClass;

// use info as GlobalInfo;

// class name
// {
//     public $name = 'zubair';
// }

// class info extends name //can extends one class to another, just one
// {
//     public function getName()
//     {
//         echo $this->name;
//     }
// }

// $person = new GlobalInfo;
// // echo $person->getName(); //zubair
// // echo '\n';

//------------------- interface ---------------------//
interface math
{
    // public $pi = 3.1416; //can't be a property
    public function div($num1, $num2);
    public function mul($num1, $num2);
    public function add($num1, $num2); //method must be public. and method must be uncomplete. by default method are abstruct, but keyword not necessary
}

interface check
{
    public function isInt($arg);
    public function isStr($arg);
}
//$obj = new math; //error 


//most importat thing is, ALL of interface classes must be called into their implement class;

// class doMath implements math //call one method it give an error, 
// {
//     use check; //interface can't use by trait

//     public function div($num1, $num2)
//     {
//         return $num1 + $num2;
//     }

// }

// $iDoMath = new doMath;
// echo $iDoMath->div(2, 5); //give an error. error is - doMath contains 2 abstruct method


// class doMath implements math
// {
//     //use check; //fetal error.
//     public function div($num1, $num2)
//     {
//         # code...
//         return $num1 / $num2;
//     }
//     public function add($num1, $num2)
//     {
//         return $num1 + $num2;
//     }

//     public function mul($num1, $num2)
//     {
//         # code...
//         return $num1 * $num2;
//     }
// }

// $iDoMath = new doMath;
// echo $iDoMath->add(50, 450); //500
