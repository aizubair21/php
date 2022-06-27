<!DOCTYPE html>
<html lang="en">

<?php
require "__instructor.php";

use math\mathmetics;
use math\student;

if (isset($_POST['add'])) {

    $title = $_POST['name'];
    $obj = new student($title);
}

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Get - php oop magic method</title>
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
            <label for="name">Title : </label>
            <input type="text" name="name" id="name" placeholder="Write Your Title ...">
            <button name="add" type="submit"> Add </button>
        </form>
    </div>
</body>

</html>