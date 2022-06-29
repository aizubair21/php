<?php

/**
 * there are totally eight data type avaiable in php.
 * it's the most inportant thing in php, unlike other language you don't need to define what kinds of data is this. you don't need to define data type in variable.
 * so, it's the benifit of php.
 */

//---------------------------- Integer ---------------------------//
/*
//  number value without a decimal value. canbe positive (+) or negative (-)
//  to see a data type use var_dump() insted of echo() or print_r()
//  */

// $x = 5;
// var_dump($x); //int(5)

// echo "Tthis is $x\n"; // to concate a variable with single string use ("") double quote or {} curly braches;
// echo "The variable are {$x}\n"; // 5
// echo 'Tthe variable are {$x}\n'; // : {xs}, won't work

//---------------------------- String ---------------------------//
/*
any character A-Z, enclose with single or double quote, is string.
max string size are : 2147483647 byte (2GB);
*/

// $name = 'This is string';
// echo $name . '. And this is concate.';

//-------------------------- Float number ------------------------//
//any numeric number with decimal point is a float number.
// $price = 50.25;
// var_dump($price); //float


//----------------------- Boolean -------------------------------//
//can be true of false.
//boolean false = 0 or true = 1;
// echo (true); //1
// echo (false); //false is also false, 0;
// var_dump(-20);

//------------------------- array -------------------------------//
//store multiple value in single variable.
//array can be indexed, associative or multidimentional.
// $info =  ['lorem','12548733','UK']; //indexed array,can use $info[], to access array


//--------------------- NULL ------------------------------//
//NULL is a data type that only contant value of NULL, 
//the following two example are NULL, but different each other
$x = ''; //not null but empty
$y = NULL; //is null;
if (is_null($y)) {
    echo "yes\n"; //yes
}

if (is_null($x)) {
    echo 'yes';
} else {
    echo "No"; //no
}


//------------------------ Object -------------------------//
//object is instance of class. and contain class property
class info
{
    public $nam = 'zubair';
}
$obj = new info;
var_dump($obj); //object
echo '\n';
