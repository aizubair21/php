<?php

require "class.php";

// use resultFunction;

if (isset($_POST['result'])) {
    $bangla = $_POST['bangla'];
    $english = $_POST['english'];
    $math = $_POST['math'];

    $mark = [
        $bangla, $english, $math
    ];
    // $result->averageNumber($mark);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marksheet - Inheritence in php oop</title>
</head>

<body style="display: flex; justify-content:center;align-items:center; padding:5px; margin:0px auto;">
    <div style="padding:5px; border:1px solid gray;">
        <p>Your averaget number is : <?php echo $result->averageNumber($mark) ?></p>
        <p>You total number is : <?php echo $result->totalNumber($mark) ?></p>
        <p>Your minimun number is : <?php echo $result->minimunNumber($mark) ?></p>
        <p>Your maximum number is : <?php echo $result->maximumNumber($mark) ?></p>
    </div>

    <div style="padding:10px;border: 1px solid gray">
        <form action="" method="post">
            <div>
                <label for="bangla">Bangla :</label>
                <input type="number" name="bangla" id="bangla" placeholder="Mark for bangla">
            </div>
            <br>
            <div>
                <label for="english">English :</label>
                <input type="number" name="english" id="english" placeholder="Mark for english">
            </div>
            <br>
            <div>
                <label for="math">Math :</label>
                <input type="number" name="math" id="math" placeholder="Mark for math">
            </div>
            <br>
            <div>
                <button type="submit" name="result">Check</button>
            </div>
        </form>
    </div>


</body>

</html>