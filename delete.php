<?php
	session_start();
	include_once('config.php');

	if(isset($_GET['code'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = "DELETE FROM students WHERE code = '".$_GET['code']."'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Student ' . $_POST['fullname'] . ' deleted successfully' : 'Something went wrong. Cannot delete member';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();

	}
	else{
		$_SESSION['message'] = 'Select students to delete first';
	}

	header('location: index.php');

