<?php
require "namespace.php";

use math\Table;
use math\mathmetics;
?>
<!DOCTYPE html>
<html>

<body>

    <?php

    //from table class
    //if we create a obj in class file, not need here to define 
    $table = new Table();
    $table->title = "My Test Now"; //set value, title is a public access modifier.
    $table->numRows = 10;
    $table->message();

    //from mathmetics class
    $div = new mathmetics;
    echo $div->substra(50, 2); //48 (50-2)
    echo "<br>";
    echo $div->add(1.20, 2.30); //3.50
    echo "<br>";
    echo $div->mul(2.5, 2); //
    echo "<br>";
    echo $div->divide(150, 25) //6
    ?>

</body>

</html>