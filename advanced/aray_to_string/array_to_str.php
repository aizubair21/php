<?php

$studentInfo = [
    'name' => 'zubair',
    'roll' => 220,
    'class' => 'ICT',
    'uId' => 'STD100250',
    'address' => [
        'country' => 'us',
        'state' => 'sanfrancisco',
        'zip_code' => 2201,

    ],
    'phone' => '+201548752l',
    'email' => 'zubair@example.xyz',

];

//array must print_r, can't echo
// print_r($studentInfo); //array print

//we can use VAR_DUMP to shoe value with type, and length
// var_dump($studentInfo); //more info about print_r

/**
 * to echo an array, it must be a string.
 * to string an array, can be three different way
 * -> use json_encode()
 * -> use implode()
 * -> use serialize()
 */

/**--------------------- json_encode() --------------------- */
//json is a vuild in function to make array to string, it's json formate.

echo (json_encode($studentInfo)); //array now as string
echo "<br>";

/**---------------------- implode()------------------------------- */
// $stringInfo = implode(', ', $studentInfo); 
// echo $stringInfo; //won' work. as we have multidimentiona array.


/**--------------------- serialize() ------------------------*/
//serialize function makes array to string.
$stringInfo = serialize($studentInfo);
echo $stringInfo;
