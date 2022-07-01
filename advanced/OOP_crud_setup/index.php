<?php

// use connection\handle;
use connection\handle\DBSelect;

// require "DBHandeler.php";
require "signup-controller.php";


$signup = new configuration;

if (isset($_POST['signup'])) {
	$name = $_POST['name'] ?? "";
	$username = $_POST['username'] ?? "";
	$phone = $_POST['phone'] ?? "";
	$email = $_POST['email'] ?? "";
	$password = $_POST['password'] ?? "";

	$isExist = new DBSelect;
	$isExist->select([])->from('publisher')->where("publisherEmail = '$email'");
	$res = $isExist->result()->num_rows;
	if ($res > 0) {
		echo "Already Exist";
	}
	$signup->name($name);
	$signup->username($username);
	$signup->phone($phone);
	$signup->email($email);
	$signup->password($password);
	// echo $signup->getName();
	echo $signup->getName();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap-5.1.0-dist/css/bootstrap.min.css">
	<title>OOP Project - Error handle</title>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="card mt-10">
					<div class="bg-primary text-light fs-2 text-center">
						Input form
					</div>
					<div class="card-body">
						<form action="" method="POST">
							<div>
								<label for="name">Name :</label>
								<input type="text" name="name" id="name" placeholder="Your name..." class="form-control <?php echo ($signup->nameErr) ? 'is-invalid' : "" ?> " autofocus value="<?php echo $name ?? "" ?>">
								<?php
								$signup->isError($signup->nameErr)
								?>
							</div><br>
							<div>
								<label for="email">Email :</label>
								<input type="email" name="email" id="email" placeholder="Your email..." class="form-control <?php echo ($signup->emailErr) ? 'is-invalid' : "" ?> " value="<?php echo $email ?? "" ?>">
								<?php
								$signup->isError($signup->emailErr)
								?>
							</div><br>
							<div>
								<label for="username">Username :</label>
								<input type="text" name="username" id="username" placeholder="Your username..." class="form-control <?php echo ($signup->userNameErr) ? 'is-invalid' : "" ?> " value="<?php echo $username ?? "" ?>">
								<?php
								$signup->isError($signup->userNameErr)
								?>
							</div><br>
							<div>
								<label for="phone">Phone :</label>
								<input type="phone" name="phone" id="phone" placeholder="Your phone..." class="form-control <?php echo ($signup->phoneErr) ? 'is-invalid' : "" ?> " value="<?php echo $phone ?? "" ?>">
								<?php
								$signup->isError($signup->phoneErr)
								?>
							</div><br>
							<div>
								<label for="password">Password :</label>
								<input type="password" name="password" id="password" placeholder="Your password..." class="form-control <?php echo ($signup->passwordErr) ? 'is-invalid' : "" ?> " autocomplete="off">
								<?php
								$signup->isError($signup->passwordErr)
								?>
							</div><br>

							<div>
								<button type="submit" class="btn btn-outline-success btn-sm shadow-lg rounded-pill px-3" name="signup">Check</button>
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