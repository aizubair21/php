<?php
require "user-controller.php";


$signup = new userconfig;

if (isset($_POST['signup'])) {
    $name = $_POST['name'] ?? "";
    $phone = $_POST['phone'] ?? "";
    $email = $_POST['email'] ?? "";

    $signup->name($name)->phone($phone)->email($email);
    // echo $signup->getName();
    $result = $signup->signup();
    echo $result;
    if ($result) {
        header("location: dashboard.php");
    } else {
        echo "Fill up all the field !";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <title>OOP Project - User Add</title>
</head>

<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card shadow-lg rounded" style="border-radius: 8px;">
                    <div class="bg-primary text-light fs-2 fw-bolder text-center py-4 ">
                        Add User
                    </div>
                    <div class="card-body">
                        <form action="<?php htmlspecialchars("PHP_SELF") ?>" method="POST">
                            <div>
                                <label for="name">Name :</label>
                                <input type="text" name="name" id="name" placeholder="Your name..." class="form-control <?php echo ($signup->nameErr) ? 'is-invalid' : "is-valid" ?> " autofocus value="<?php echo $name ?? "" ?>">
                                <?php
                                $signup->isError($signup->nameErr)
                                ?>
                            </div><br>
                            <div>
                                <label for="email">Email :</label>
                                <input type="email" name="email" id="email" placeholder="Your email..." class="form-control <?php echo ($signup->emailErr) ? 'is-invalid' : "is-valid" ?> " value="<?php echo $email ?? "" ?>">
                                <?php
                                $signup->isError($signup->emailErr)
                                ?>
                            </div><br>

                            <div>
                                <label for="phone">Phone :</label>
                                <input type="phone" name="phone" id="phone" placeholder="Your phone..." class="form-control <?php echo ($signup->phoneErr) ? 'is-invalid' : "is-valid" ?> " value="<?php echo $phone ?? "" ?>">
                                <?php
                                $signup->isError($signup->phoneErr)
                                ?>
                            </div><br>

                            <hr>
                            <div>
                                <button type="submit" class="btn btn-outline-success btn-md shadow-lg rounded-pill px-3" name="signup">Add User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>

</html>