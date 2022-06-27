<?php

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
    private $title = "";
    private $numRows = 0;

    protected $collumns = 10;
    private function message()
    {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}
// $table = new Table();
// $table->title = "My table";
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
