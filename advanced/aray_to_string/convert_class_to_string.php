<?php
class fruit
{
    public $name = 'chapa', $quantity = '10', $price = '5';

    //seter method
    public function name(string $name) //argument must string
    {
        $this->name = $name;
        return $this;
    }

    public function quantity(int $quantity) //argument must integer
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function price(int $price)
    {
        $this->price = $price;
        return $this;
    }


    //getter method
    public function fruits()
    {
        return $this->name . $this->quantity . $this->price;
    }
}


//instant

$banana = new fruit;
// $banana->name('Chapa')->quantity(20);
// echo $banana->fruits();

echo serialize($banana); //now class property is string. but it hard to understood
