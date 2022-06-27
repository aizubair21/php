<?php

/**
 * magi method call on event. 
 * when specefic event call, magiz method is called automaticly.
 * Most of magic method used for error handeling.
 */

/**
 * magic method start with __(double underscore).
 * list of most common php oop magic method -
 * __construct,
 * __destruct,
 * __get,
 * __call,
 * __set,
 * __isset,
 * __unset,
 * __calStatic,
 * __toString,
 * __sleep, [work with serialize]
 * __clone,
 * __invoke,
 * __wakeup,
 * __unserialize,
 * 
 */

namespace math; //this the mandatory

use math\doMath as MathDoMath;

/**
 * NAMESPACE in php
 * 
 * is comes to mantian two diffenent provlem in phpl
 * first, Using namespace organize the code by groping the class into a single namespace
 * second, Namspace allow to use a single name for more thean one class.
 * 
 */

/**
 * You must declare namespace at the top of php page, not php script
 */


// echo "hellow namespace";
//namespace math; //this would be a wrong.
class Table
{
    //property & method now private. can access only this class.
    private $title;
    private $numRows = 0;

    protected $collumns = 10;
    private function message()
    {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }

    /**
     * Here $title and $numRows property is private.
     * if we call outsie, will get a fetal error.
     * to handle this type of error our have a magic method __get.
     */

    public function __get($Property) //take a peremitter, a private or protected poperty which you call
    {
        return $Property . " is private. You can't see this"; //if you call a private/protected property this error is shown

    }
}

$table = new Table();
// echo $table->title; // call __get method.
// $table->numRows = 5;


class mathmetics
{
    //all method are private now. this can access only from this class.
    private function divide($numenator, $denominator)
    {
        $result = $numenator / $denominator;
        return $result;
    }

    private function add($add, $deadd)
    {
        $result = ($add + $deadd);
        return $result;
    }

    //protected method can access from this drive or clikd class.
    protected function substra($numenator, $denominator)
    {
        $result = $numenator - $denominator;
        return $result;
    }

    //public access modifier can access from outlide. we can call this method into index.php page.
    public function mul($numenator, $denominator)
    {
        $result = $numenator * $denominator;
        return $result;
    }
}

//can extends mathematic class into this. can access protected property.
class doMath extends mathmetics
{
    public function sub($num1, $num2)
    {

        echo $this->substra($num1, $num2); // echo $num1 - $num2
    }
}



// $namespaceObj = new doMath; //obj of doMath class.
// echo $namespaceObj->isNamespace(); //Math

/** 
 * make an object for doMath class, and get protected method into this.
 */
$PerotectedObj = new doMath();
// $obj->sub(50, 45); // 5
