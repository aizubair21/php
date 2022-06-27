<?php

class studentInfo {
		
	public $name = "lorem";
	public $class = "BA";
	public $subject = "ICT";
	
	public function aboutYou () {
		echo "you are {$this->name}. Your read in {$this->class}. your subject is {$this->subject}.";
	}
}

//make an obj.
$student = new studentInfo();
$student->aboutYou(); //fine. this is traditiona way.
echo '<br>';
//static method give a way to access method and property, without an instance of class. 
//let's 

class student {
		
	public static $name = "lorem"; //static property
	public $class = "BA";
	public $subject = "ICT";
	
	//static method
	public static function aboutYou () { 
		echo "you are {$this->name}. Your read in {$this->class}. your subject is {$this->subject}.";
	}
	
	//handle to call unstatic property 
	public static function __callStatic($method, $args) {
		echo "You call a unstatic method";
	}
}
//we can access static property and method without create an instance. 
//use :: [stat resolution]. className::property/methodName

echo student::class();


