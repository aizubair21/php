<?php

/**
 * Inheritence - when a class derives from another class.
 */

// use resultFunction\markSheet as ResultFunctionMarkSheet;

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

//grade class as a trait. php not support multiple inheritence. for this, you can use trait
trait grade
{
    public function checkGrade($mark)
    {
        //check is this a integet
        if ((!empty($mark) && !is_null($mark)) && is_numeric($mark)) {
            //if mark under 33
            if ($mark < 33) {
                echo "Fail";
                return $this;
            } else {
                if ($mark > 79 && $mark <= 100) :
                    echo "A+";
                    return $this;

                elseif ($mark > 69 && $mark <= 79) :
                    echo "A";
                    return $this;

                elseif ($mark > 59 && $mark <= 69) :
                    echo "A-";
                    return $this;

                elseif ($mark > 50 && $mark <= 69) :
                    echo "B";
                    return $this;

                elseif ($mark > 40 && $mark <= 50) :
                    echo "C";
                    return $this;

                elseif ($mark >= 33 && $mark < 40) :
                    echo "D";
                    return $this;

                else :
                    echo "Please give a correct mark between 1 to 100";
                    return $this;
                endif;
            }
        } else {
            //if paremeter isn't a integer
            echo "A integer value must be taken!";
            return $this;
        }
    }
}

//make another class and extends math
class GradeSheet extends math
{
    use grade; //trait

    //protected property
    protected $bangla;
    protected $english;
    protected $math;

    public function averageNumber($array)
    {
        echo $this->avg($array);
        return $this;
    }

    public function totalNumber($array)
    {
        echo $this->addition($array);
        return $this;
    }

    public function maximumNumber($array)
    {
        echo $this->max($array);
        return $this;
    }

    public function minimunNumber($array)
    {
        echo $this->min($array);
        return $this;
    }
}

$result = new GradeSheet;
$result->checkGrade(85)->totalNumber([20, 50]); //else statement run
