<?php
	include '../register/mysqli_connect.php';
	include 'fxn.php';
	session_start();

	if(!isset($_SESSION["userID"]) || (trim ($_SESSION["userID"] == ""))) {
		header("location:../register/login.php");
		exit();
	}
	if(isset($_SESSION["id"])) {
		if(isLoginSessionExpired()) {
			header("Location:logout.php?session_expired=1");
		}
	}


	$session_id = $_SESSION["userID"];


?>
