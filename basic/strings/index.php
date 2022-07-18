<?php

/**
 * This is php string usefull function guideline.
 * every programming language have huge number of data types. PHP also have. one of them are string.
 * a string data is basically some alphabetical.
 * 
 * 
 * string is a primitive data types in PHP. as a result, you don't need install any library for that.
 * In this structure, W'll learn some of PHP string function. whick a PHP Developer need daily routine.
 */

//to check what type of data is, use var_dump() output function.
$string = "This is test string"; //an string data
// var_dump($string); // string(4) "name"



//* ------------------- string length --------------------------- */
//to count a string length. PHP have buid in function. The Strlen() function return the length of a string. 
// echo strlen($string); // output 19;

//Strlen() function considered with count whitespace as one character. So, if you have space between the character they will be counted.


/**-------------------  str word count --------------------------*/
//str_word_count() function returns the number of words in a string. 
//keep it mind that, unlike Strlen(), str_word_count() function does not count space in a sentence. So, if you don't give a space between word, it's length will be one.
// echo str_word_count($string); //output 4;
// echo str_word_count("This-is-test-tring"); //output 1;


/* ------------------ trim string ------------------------------ */
//PHP trim() function remove whitespace and other predefied character from both side of a string.
$string = "  this is string    ";
// echo trim($string); //"This is string";


/*------------------- reverse string --------------------------- */
//strrev() php fuction reverse a string.
// echo strrev($string); //gnirts si siht 


/**-------------------- get position of a word ------------------- */
//strpos() php function return the position of the string specefied in the paramters.
// echo strpos($string, "is"); //output is 4;

//strpos() php function does not count the whitespace. it automaticly trimed the string.
//strpos() function start count index from 0;
//if the word not found in string it returns false.

/**------------------ replace on to another ----------------------*/
//str_replace() function replace the characters by the specified characters.
// echo (str_replace("string", "str_replace", $string)); //this is str_replace


//the first parameter "string" to be replaced.
//second parameter "str_replace" to be replace with.
//third parameter is the string to be search.

/**--------------------- Concatinate string ----------------------*/
//to join two or more strings in PHP, use the (.) dot operator.
$concate = " this is concate";
// echo $string . $concate;// output : this is string     this is concate


/**-------------------- Change case in php ---------------------- */
//
//strtolower() function retrun the string in lower case.
//strotoupper() function return the string in upper case.

$string = 'this';
// echo strtolower($string); //output this;
// echo strtoupper($string); //output THIS;

/**
 * if the word is already in uppercase, in strtoupper() function it'll return a uppercase.
 * also if the string already in lower, strtolower() return lowercase string.
 * 
 * 
 * More usecase and usefull function are
 * lcfirst() -> converts the first character of a string to lowercase.
 * ucfirst() -> converts the first character of a string to uppercase.
 * ucword()  -> converts the first character of each word in a string to uppercase. it's similler to "capitalize".
 */
