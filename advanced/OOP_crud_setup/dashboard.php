<?php

use connection\handle\DBSelect;

include "DBHandeler.php";

// $conn = mysqli_connect("localhost", "root", "", "coderbees");
// $result = mysqli_query($conn, " SELECT * FROM publisher WHERE publisherUser_name = 'publisher21'");
// echo mysqli_num_rows($result);

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
        <div class="row" style="margin-top:20px ;">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card shadow-lg rounded">
                    <div class="bg-primary text-light fs-2 text-center d-flex justify-content-between px-2 align-items-center">
                        <div>User Info</div>
                        <a href="user_add.php" class="btn btn-outline-info shadow-lg rounded-pill">Add User</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-response table-hover">
                            <thead>
                                <tr>
                                    <th>ID :</th>
                                    <th>Name :</th>
                                    <th>Username :</th>
                                    <th>Phone :</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                $select = new DBSelect;
                                $select->select([''])->from('user');
                                $result = $select->result();
                                if ($result->num_rows < 1) {
                                    echo "<tr class='alert alert-info m-1'><td>No Data Found !</td></tr>";
                                }
                                while ($row = $result->fetch_assoc()) {

                                ?>
                                    <tr>
                                        <td><?php echo $row['userId'] ?></td>
                                        <td><?php echo $row['userName'] ?></td>
                                        <td><?php echo $row['userEmail'] ?></td>
                                        <td><?php echo $row['userPhone'] ?></td>
                                        <td class="d-flex justify-content-between align-items-center px-1">
                                            <a class="btn btn-outline-danger btn-sm shadow-lg rounded" href="#"> Trash </a>
                                            <a class="btn btn-outline-info btn-sm rounded" href="#"> Edit </a>
                                        </td>
                                    </tr>
                                <?php
                                }

                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="bootstrap-5.1.0-dist/js/bootstrap.min.js"></script>

</html>