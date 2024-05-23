<?php
session_start();
include_once('config.php');

if (isset($_POST['btnCreate'])) {
    $database = new Connection();
    $db = $database->open();
    try {
        $stmt = $db->prepare("INSERT INTO students (code, fullname, dob, email, score) VALUES (:code, :fullname, :dob, :email, :score)");
        $_SESSION['message'] = ($stmt->execute(array(':code' => $_POST['code'], ':fullname' => $_POST['fullname'], ':dob' => $_POST['dob'], ':email' => $_POST['email'], ':score' => $_POST['score'])) ) ? 'Student created successfully' : 'Something went wrong. Cannot create student';
		
    } catch (PDOException $e) {
        $_SESSION['message'] = $e->getMessage();
    }
    $database->close();
} else {
    $_SESSION['message'] = 'Fill up create form first';
}   
header('location: index.php');

