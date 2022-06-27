<?php
require "class.php";

use math\mathmetics;
use math\Table;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Method - PHP OOP Megiz method</title>
</head>

<style>
    body {
        background-color: rgba(0, 0, 0, .2);
    }

    .container {
        width: 80%;
        padding: 5px;
        margin: 0 auto;
        /* background-color: white; */

    }

    .card {
        box-shadow: 0px 0px 3px gray;
        border-radius: 5px;
        ;
    }

    .card-body {
        padding: 2px;
        ;
    }
</style>

<body>
    <div class="container">
        <div class="card " style="padding: 5px;">
            <div class="card-body">
                <?php
                echo "Post Title : " . $table->title;
                ?>
            </div>
        </div>
    </div>
</body>

</html>