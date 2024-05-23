<!DOCTYPE>
<html>

<head>
    <title>PHP Test</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1 class="page-header text-center">PHP CRUD Operation using PDO</h1>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <button href="create_modal.php" class="btn btn-primary" data-toggle="modal" data-target="#createModal">Create Student</button>
                <?php
                session_start();
                if (isset($_SESSION['message'])) {
                ?>
                    <div class="alert alert-info text-center" style="margin-top:20px;">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                <?php

                    unset($_SESSION['message']);
                }
                ?>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover" style="margin-top:20px;">
                        <thead>
                            <th>Code</th>
                            <th>Fullname</th>
                            <th>Date Of Birth</th>
                            <th>Emal</th>
                            <th>Score</th>
                            <th>Action</th>

                        </thead>
                        <tbody>
                            <?php
                            //include our connection
                            include_once('config.php');

                            $database = new Connection();
                            $db = $database->open();
                            try {
                                $sql = 'SELECT * FROM students';
                                foreach ($db->query($sql) as $row) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['code']; ?></td>
                                        <td><?php echo $row['fullname']; ?></td>
                                        <td><?php echo $row['dob']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['score']; ?></td>
                                        <td>
                                            <a href="#edit_<?php echo $row['code']; ?>" class="btn btn-success btn-sm" data-toggle="modal"> <i class="fas fa-pen fa-xs"></i></a>
                                            <a href="#delete_<?php echo $row['code']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"> <i class="fas fa-trash fa-xs"></i></a>
                                        </td>
                                        <?php include('delete_modal.php'); ?>
                                        <?php include('edit_modal.php'); ?>
                                    </tr>
                            <?php
                                }
                            } catch (PDOException $e) {
                                echo "There is some problem in connection: " . $e->getMessage();
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


    <?php include('create_modal.php'); ?>

</body>

</html>