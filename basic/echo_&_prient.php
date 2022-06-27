<?php

/**
 * first thing in all programming language is show anything into console or page.
 * php print al thing into webpage.
 * 
 * php have many function to show your result into webpage. as,
 * echo()
 * print_r()
 * var_dump()
 * printr()
 * print()
 * die()
 * etc
 * 
 * they are so called language constructors.
 * now we see echo and prient
 */

/**
 * different between echo and prient
 * 
 * first thing, echo can only prient single value is string, or int. only value.
 * 
 */

echo 'In php you can use either echo statement, <br>';
print 'or the prient statement, To show output text';

//You can combine multiple string by using a '.'(dot)

$str1 = 'You can combine';
$str2 = $str1 . ' multiple string together';

echo '<br></br>';
echo $str2;

// you can user '' single or "" double quote in echo. but here a simple different.
// double quote tage a variable, but single quote does not take. 
// single quote make a variable into plain string.

echo "<br></br>";
echo 'You can use single quote <br>';
echo "or double quote <br></br>";

$name = 'lorem';
echo $name . ' is a variable <br>';
echo 'but, single quote not take a $name <br>'; //heare $name a string.

echo "but, double quote take a $name"; //here $name a variable.



/**
 * echo always print a single value. can't print an array, or <object data="" type="" class=""></object>
 */

$fruits = ['apple', 'banana', 'orange', 'water mellon', 'mango'];
echo $fruits . '<br>'; // give you an error

/**
 * but echo can print s item from array
 */

echo $fruits[2] . '<br>'; //echo 'orange';

//have a function to show array named 'prient_r' it take one agrument as array.
print_r($fruits); //iterate all of item throught fruits array. and prient all of them.
