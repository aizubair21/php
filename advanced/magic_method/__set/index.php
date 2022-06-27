<?php
require "__set.php";

use math\student;

if (isset($_POST['set'])) {
    $name = $_POST['name'];
    $students->name = $name; //we can set private value from outsile.
}

// echo $students->studentInfo['name']; // get error
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set - php oop magic method</title>
</head>

<body>
    <style>
        #main_div {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 5px;
            margin: 2;

        }
    </style>
    <div id="main_div">
        <div style="margin: 10px 0px;">

        </div>
        <form action="" method="POST">
            <label for="Nmae">Name :</label>
            <input type="text" name="name" placeholder="Your Name ..">
            <button name="set" type="submit">SET</button>
        </form>
    </div>
</body>

</html>