<?php

namespace math; //this the mandatory
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
    public $title = "";
    public $numRows = 0;
    public function message()
    {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}
// $table = new Table();
// $table->title = "My table";
// $table->numRows = 5;


class mathmetics
{
    public function divide($numenator, $denominator)
    {
        $result = $numenator / $denominator;
        return $result;
    }

    public function add($add, $deadd)
    {
        $result = ($add + $deadd);
        return $result;
    }

    public function substra($numenator, $denominator)
    {
        $result = $numenator - $denominator;
        return $result;
    }

    public function mul($numenator, $denominator)
    {
        $result = $numenator / $denominator;
        return $result;
    }
}

class doMath extends mathmetics
{
    public function isNamespace()
    {
        echo __NAMESPACE__; //is a magic method, we can see out namespace by this.
    }
}

// $namespaceObj = new doMath; //obj of doMath class.
// echo $namespaceObj->isNamespace(); //Math