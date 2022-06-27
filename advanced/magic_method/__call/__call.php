<?php

class stockExceng
{
    public $name = 'company name';
    public $email = 'company email';

    private $MD = 'Asif ullah';
    private $SR = 'Morshed kahn';

    private function totalSell()
    {
        echo "369,250$"; //this so :)
    }

    /**
     * we can't call a public method from outside the class.
     * if we call private/protected method outside, it's throw error.
     * to handle this have __call method.
     */
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            echo $this->$property;
        } else {
            echo $property . " Not exists !";
        }
    }

    public function __call($name, $arguments)
    {
        echo $name . " is private";
    }
}

$stock = new stockExceng;
$stock->totalSell(); //private method. so, __call is trigared.
