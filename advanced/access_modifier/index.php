<?php
require "class.php";

use math\mathmetics;

$math = new mathmetics();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Modifier</title>
</head>

<body>
    <h3>This is access modifier </h3>

    <?php
    // this throw an error, We can't access this method outside.
    //$math->divide(10, 2); //this a uncaught error : call to private method
    echo "<br>";
    echo $math->mul(5, 2); //10 , why this is accessable into outside.
    echo "<br>";
    //access protected method
    $PerotectedObj->sub(15, 25); //-10
    ?>
</body>

</html>