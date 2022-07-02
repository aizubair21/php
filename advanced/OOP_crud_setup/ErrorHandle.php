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
        } else {

            echo "<div><strong class='text text-success'> Good </strong></div>";
        }
    }

    //unique method
    public function unique($uniqueProperty, string $table, string $where, string $errorProperty)
    {

        $conn = mysqli_connect("localhost", "root", "", "oop_crud");
        $qry = " SELECT * FROM $table WHERE $where = '$uniqueProperty'";
        $result = mysqli_num_rows(mysqli_query($conn, $qry));

        // echo $result;
        if ($result) {
            $this->{$errorProperty} = "Already exist";
            return $this;
        } else {
            $this->{$uniqueProperty} = $uniqueProperty;
            return $this;
        }
    }




    //





}
// $conn = mysqli_connect("localhost", "root", "", "coderbees");
// $qry = " SELECT * FROM publisher WHERE publisherEmail = 'user21@example.xyz'";
// $result = mysqli_query($conn, $qry);
// echo mysqli_num_rows($result);


//

// function unique($uniqueProperty, string $table, string $where, string $errorProperty)
// {

//     $conn = mysqli_connect("localhost", "root", "", "coderbees");
//     $qry = " SELECT * FROM $table WHERE $where = '$uniqueProperty'";
//     $result = mysqli_num_rows(mysqli_query($conn, $qry));

//     echo $result;
//     // if (in_array("$uniqueProperty", $result, false)) {
//     //     $this->{$errorProperty} = "Already exist";
//     //     return $this;
//     // } else {
//     //     $this->{$uniqueProperty} = $uniqueProperty;
//     //     return $this;
//     // }
// }

// unique('user21@example.xy', "publisher", "publisherEmail", "emailErr");
