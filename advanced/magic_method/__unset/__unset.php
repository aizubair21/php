<?php

/**
 * __unset magic method unset all 
 */
//---------------------- __unset ----------------------//

//destructor is another magic method run after all method is exectue.
//in real wore example it's basically close our all database connection.

class car
{
    public $name, $color, $model, $engine_capacity, $total_seat, $driver_position, $sl_no;
}

class bolvo extends car
{
    public function name($name)
    {
        $this->name = $name;
    }

    public function __destruct() //destruct alwas call end of the script.
    {
        echo "Well Done, Car name is {$this->name}";
    }

    public function __unset($property)
    {
        echo 'It is called when unset() method is called';
    }
}

$bmw = new bolvo;

//here first call the echo function then run __destruct method. even you call destruct method at first.
$bmw->name('bmw'); //well done, car name is bmw.
echo $bmw->name; //bmw, 

//unset the object :)
unset($bmw); //reset all property value with class
echo $bmw->name; //undefined error.
