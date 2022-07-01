<?php

use connection\handle\DBSelect;

include "DBHandeler.php";


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
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php

                                $select = new DBSelect;
                                $select->select(['postId, postTitle, catName, postPublisher, postCategory, publisherEmail'])->from('posts')->join('LEFT JOIN category ON category.catId = posts.postCategory LEFT JOIN publisher ON publisher.publisherId = posts.postPublisher')->where('postStatus = 1')->limit(5);
                                $result = $select->result();
                                while ($row = $result->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?php echo $row['postId'] ?></td>
                                        <td><?php echo $row['postTitle'] ?></td>
                                        <td><?php echo $row['catName'] ?></td>
                                        <td><?php echo $row['publisherEmail'] ?></td>
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