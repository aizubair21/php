<?php

class mobile
{
    public static $name, $brand, $weight, $size;

    //setter method
    public static function name($name)
    {
        static::$name = $name;
        return new static; //in static method use 'new static' insted of $this;
    }
    public static function brand($brand)
    {
        static::$brand = $brand;
        return new static;
    }
    public static function weight($weight)
    {
        static::$weight = $weight;
        return new static;
    }
    public static function size($size)
    {
        static::$size = $size;
        return new static;
    }

    //getter method
    public static function mobileInfo()
    {
        return "This is " . static::$name . " mobile. build by " . static::$brand . " . size is " . static::$size;
    }
}

//make instance
mobile::name("j-5")->brand('samsun')->weight('540gm')->size('6.5inc');
echo mobile::mobileInfo(); //This is j-5 mobile. build by samsun . size is 6.5inc
