<?php
//----------------------- static ------------------------//
/**
 * static variable use to data for short time. 
 * Normally php remove all variable declared in a functio after the function is completely execute. 
 * But, if the variable is static it can be accessed variable after executiong the function.
 */
//to declare the static with in the function have local scope/local variable;.

function testing()
{
    // $x = 10; //it normal local;

    static $x = 10;

    echo $x;
    $x++; //use post increment; it can access after function execution.
}
// testing(); // 10

//if we call three times at a time. static method can reserved his old value, On secound time echo it incress value :)
// testing(); // 10
// testing(); // 11
// testing(); // 12


testing(); //now 10