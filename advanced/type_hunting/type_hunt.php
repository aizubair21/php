<?php
class courseInfo
{


    //public property, can access anywhere
    public $courseName, $courseNo, $courseTeacher;

    //setter method
    public function courseName(string $name) // "string" this is a type hunting. this method receive only string value;
    {
        $this->courseName = $name;
    }

    public function courseNo(int $courseNo) //receive only integer value
    {
        $this->courseNo = $courseNo;
    }
}

//make instance/obj
$course = new courseInfo;
$course->courseName("Echonomics"); //no error
$course->courseNo('abc'); //error, only string received.
