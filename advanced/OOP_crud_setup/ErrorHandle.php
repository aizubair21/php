<?php
// include "DBConnect.php";


trait ErrorHandle
{


    // input not empty
    public function required($property, string $errorProperty)
    {
        if (!empty($property)) {
            $this->{$property} = $property;
        } else {
            $this->{$errorProperty} = "Field is required*";
        }
    }


    // //valid email 
    public function isValidEmail($property, string $errorProperty)
    {
        if (!empty($property)) {
            if (filter_var($property, FILTER_VALIDATE_EMAIL)) {
                $this->{$property} = $property;
            } else {
                $this->{$errorProperty} = "Giva a valid email";
            }
        } else {
            $this->{$errorProperty} = "Field is required.";
        }
    }

    //errorShow into sebsite;
    public function isError($errorValue)
    {
        if (isset($errorValue)) {

            echo "<div><strong class='text text-danger'> $errorValue </strong></div>";
        }
    }

    //unique method
    public function unique($uniqueProperty, string $table, string $errorProperty)
    {

        $conn = mysqli_connect("localhost", "root", "", "coderbees");
        $qry = " SELECT * FROM $table";
        $result = mysqli_fetch_assoc(mysqli_query($conn, $qry));

        if (in_array("$uniqueProperty", $result, false)) {
            $this->{$errorProperty} = "Already exist";
            return $this;
        } else {
            $this->{$uniqueProperty} = $uniqueProperty;
            return $this;
        }
    }


    //





}
