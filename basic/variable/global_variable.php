<?php
//---------------- Global Variable --------------------//

//Global variable are available globally. anywhere in the current file.
$x = 5; //$x is global

function testing()
{
    echo "x can access inside function  $x\n"; //error, locally it undefine
}
// testing();

//we can user global variable inside function using $GLOBAL[] array;
function tester()
{
    echo "{$GLOBALS['x']} can access inside function"; //insted of concatenate can use {php code}; 
}
tester(); // echo 5;
echo '\n';
// print_r($GLOBALS);
echo '\n';

//can use global as the condition
for ($i = 0; $i < $x; $i++) {
    for ($a = 0; $a < $i; $a++) {
        echo $i; //left trainlge
    }
    echo "\n";
}
