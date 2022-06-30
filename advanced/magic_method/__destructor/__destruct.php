<?php
//---------------------- Destruct ----------------------//

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

    public function __destruct()
    {
        echo "Well Done, Car name is {$this->name}";
    }
}

$bmw = new bolvo;

//here first call the echo then run __destruct method.
$bmw->name('bmw'); //well done, car name is bmw.
echo $bmw->name; //bmw,
