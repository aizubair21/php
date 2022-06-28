<?php

/**
 * Inheritence - when a class derives from another class.
 */

namespace resultFunction;

class math
{


    //public always accessable from anywhere.
    public function addition($array)
    {
        return array_sum($array);
    }

    // public function division($divider, $devide)
    // {
    //     return $divider / $devide;
    // }

    //can access own class and drive class
    protected function avg($array)
    {
        if (is_array($array)) {
            $len = count($array);
            $total = array_sum($array);
            return $total / $len;
        }
    }

    //handle error if call a private method 
    public function __call($methodName, $arguments)
    {

        //check if the method exist and private
        if (method_exists($this, $methodName)) {
            return $this->$methodName($arguments);
        } else {
            //if class not exist;
            echo "Mehod " . $methodName . " not exist !";
        }
    }

    protected function min($array) //static can access without a instance
    {
        return min($array);
    }

    protected function max($array)
    {
        return max($array);
    }
}

//make another class and extends math
class markSheet extends math
{
    //protected property
    protected $bangla;
    protected $english;
    protected $math;

    public function averageNumber($array)
    {
        return $this->avg($array);
    }

    public function totalNumber($array)
    {
        return $this->addition($array);
    }

    public function maximumNumber($array)
    {
        return $this->max($array);
    }

    public function minimunNumber($array)
    {
        return $this->min($array);
    }
}

//make instance 
$result = new marksheet;
// $result->addTwoNumber(20, 50);
// echo "<br>";
// echo math::max([1, 5, 4, 7, 8, 6, 5, 2, 4, 7, 8, 9, 10, 25,]);
// echo "<br>";
// echo math::avg([20, 40, 80, 50, 60, 30]); //error

// $mth = new math;
// echo $mth->avg([20, 50, 80, 60, 55, 40]); //__call method run

// echo "<br>";
// $mth->asdf(); //Method not exist
