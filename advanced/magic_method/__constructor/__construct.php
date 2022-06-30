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
class student
{
    //property & method now private. can access only this class.
    private $title = 'This is title';
    private $numRows = 0;

    protected $collumns = 10;

    private $studentInfo = [
        "name" => "zubair",
        "email" => "zubair@example.xyz",
        "userName" => "zubair21",
        "address" => [
            "district" => "Bhola",
            "sub_distrint" => "lalmohan",
            "village" => "lordhardinge",
        ]
    ];



    private function message()
    {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }

    /**
     * Here $title and $numRows property is private.
     * if we call outsie, will get a fetal error.
     * to handle this type of error our have a magic method __get.
     */


    /**
     * __constructor magic method run at first.
     * when you have a database. to show something into website you first connect and query data from database.
     * __construct method run this type of jobs. 
     * you define all of your database related code into this. before run this class __constructor method run and make a connection with your database.
     * 
     */
    public function __construct($title)

    {
        //in real word, all of my database connection are placed in here;


        if (!$this->title) { //if title not set
            $this->title = $title;
            echo $this->title;
        } else { //if title already set
            echo "Title already seted";
        }
    }

    public function __get($Property) //take a peremitter, a private or protected poperty which you call
    {
        // return $Property . " is private. You can't see this"; //if you call a private/protected property this error is shown


        // or, it's be done user can access this specific property.
        // think, you have an array. user request for single value, but value is private.
        // user can see thos specific value, not wohle information.
        // just echo here the specific property value.

        return $this->studentInfo["$Property"];
    }
}

// $students = new student();
// echo $table->title; // call __get method.
//print_r($students->studentInfo); //this throw an error.

// echo $students->userName; //zubair21

// $table->numRows = 5;
