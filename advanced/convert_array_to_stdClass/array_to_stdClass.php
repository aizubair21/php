<?php
$studentInfo = array (
	'name'=>'zubair',
    'email'=>'myemail@example.xyz',
    'address'=> [
    	'district'=>'bhola',
        'village'=>'lord hardinge',
    ],
);
echo '<pre>';
var_dump($studentInfo); //now it is an array
echo '</pre>';

//we can convert array to stdClass, stand for (standard class)
//this is typecasting.
$student = (object) $studentInfo;

// now student an object
//we can use (->) 'object resolution' sing to get object value;
echo $student->name; //'zubair' :)
