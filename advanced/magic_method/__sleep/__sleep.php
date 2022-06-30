<?php

/**
 * __sleep magic method call automaticly when call serialize();
 * by the calling serialize() can convert array into string.
 * 
 * Iy you need to convert object into a valid json_string you can use serialize.
 */


class Doctor
{
    public $name = 'tanvir', $age = 35, $category = 'MBBS', $title = 'Medicine', $experience = 'all over';


    public function __sleep() //must return an array with valid property
    {
        return array('name', 'age'); //now serialize method convert only 'name' and 'age' into string.

        // return array('name','age','abc'); //for unvalid property give an error;
    }
}

//if we try to echo this, give an error
$tanvir = new Doctor;
// echo $tanvir; //have an error, object can not converted to string.
// echo serialize($tanvir); //

//serialize method make all property into string. but what if you need a specific property into string ?
// you can make this by calling __sleep method. 
echo serialize($tanvir); //now it converted into string. (hardly to read )