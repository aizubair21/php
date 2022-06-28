<?php

class studentDetails
{

    //public property
    public $name;
    public $email;
    public $address;


    //setter method
    public function email($email)
    {
        $this->email = $email;
        return $this; //for method chaining
    }

    public function name($name)
    {
        $this->name = $name;
        return $this;
    }

    public function address($address)
    {
        $this->address = $address;
        return $this;
    }

    //getther method
    public function getStudentInfo()
    {
        return "Student {$this->name} live in {$this->address}";
    }
}


//make an instance
$student = new studentDetails;
$student->name("zubair")->email("email@example.xyz")->address("lorem ipsum"); //this is the method chaining
echo $student->getStudentInfo(); //get info
