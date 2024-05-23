<?php
	session_start();
	include_once('config.php');

    if(isset($_POST['edit'])){
        $database = new Connection();
        $db = $database->open();
        try{
            $code = $_GET['code'];
            $fullname = $_POST['fullname'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $score = $_POST['score'];


            $sql = "UPDATE students SET fullname = '$fullname', dob = '$dob', email = '$email', score = '$score' WHERE code = '$code'";
            //if-else statement in executing our query
            $_SESSION['message'] = ( $db->exec($sql) ) ? 'Student updated successfully' : 'Something went wrong. Cannot update student';

        }
        catch(PDOException $e){
            $_SESSION['message'] = $e->getMessage();
        }

        //close connection
        $database->close();
    }
    else{
        $_SESSION['message'] = 'Fill up edit form first';
    }
	header('location: index.php');
