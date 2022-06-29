<?php

/**
 * php variable declared with $ sign followed by the name of variable. if you try without the $ sign it gives you an syntex eror.
 */

// $name = 'lorem';
// $age = 20;
// $sold = 20.5;
// $current = true;


/**
 * one thing in php variable it's vety nice. That you don't need declear the data type of variables. php automaticly adopt the data type.
 */
$name = 'lorem '; //now it is string
$age = 20; //now it is integer
$current = true; //now it is bool
$sold = 20.55; //now it is flooat

//------------------- we can change variable one data to another -------------------------//
//to string any variabel use (str) before the variable.
var_dump((string) $age); // now age are string : string "20:

//to integer any variable use (int) begore the variable
var_dump((int) $sold); //now $sold is int : int 20



//--------------------- Rules to define php variable -------------------------------- //
/**
 * a php variabel must start with $ sign.
 * php are case-sensitive $var and $VAR are different in php.
 * php variable name must start with Alphabet or Underscore.
 * $intToStr; // correct
 * $_toMute; //correct 
 * 
 * variable name can't start with number
 * $5int //error
 * 
 */


//---------------------- How many kinds of variable in php -------------------------//
/**
 * local, global, static, superglobal, suprsuperglobal 
 * ocla, global, static are the scope variable. That define access the variable with in the code 
 * 
 * but the superglobal variable can access any php pages.
 */
