<!DOCTYPE html>
<html lang="en">

<?php
require "__get.php";

use math\student;

if (isset($_POST['set'])) {
    $info = $_POST['name'];
    if ($info == 'address') {
?>
        <table bordered="1">
            <thead>
                <tr>
                    <th>District</th>
                    <th>Sub-District</th>
                    <th>Village</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                    foreach ($students->$info as $key => $value) {
                        echo "<td> {$value} </td>";
                    }
                    ?>
                </tr>
            </tbody>
        </table>
<?php
    } else {

        echo $students->$info;
    }
}

// echo $students->studentInfo['name']; // get error
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
            <label for="Nmae">Student :</label>
            <select name="name" id="info">
                <option value="">Select _____</option>
                <option value="name">name</option>
                <option value="userName">userName</option>
                <option value="email">email</option>
                <option value="address">address</option>
            </select>
            <button name="set" type="submit">GET</button>
        </form>
    </div>
</body>

</html>