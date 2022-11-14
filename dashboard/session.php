<?php
	// include './include/database2.php';
	// // include 'fxn.php';
	// session_start();

	// if(!isset($_SESSION["userID"]) || (trim ($_SESSION["userID"] == ""))) {
	// 	header("location:../Account/login.php");
	// 	exit();
	// }
	// if(isset($_SESSION["id"])) {
	// 	if(isLoginSessionExpired()) {
	// 		header("Location:logout.php?session_expired=1");
	// 	}
	// }


	// $session_id = $_SESSION["userID"];

	include './include/database2.php';
	// include 'fxn.php';
	session_start();

	$session_id = '';
	if(isset($_SESSION["userID"])){
		$session_id = $_SESSION["userID"];
	}
	else{
		header("location:../Account/login.php");
		exit();
	}
	//echo "<script>alert('".$session_id."')</script>";

	$query = "SELECT * from art_reg_tbl WHERE userID = $session_id ";

	$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);

	$status = $row['status'];

	if(!isset($_SESSION["userID"]) || (trim ($_SESSION["userID"] == ""))) {
		header("location:../Account/login.php");
		exit();
	}
	if(isset($_SESSION["id"])) {
		if($status != 'artisan'){
			header("location:../Account/login.php");
			exit();
		}
		if(isLoginSessionExpired()) {
			header("Location:logout.php?session_expired=1");
		}
	}


	

?>

