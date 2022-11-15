<?php
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

	$query = "SELECT * from art_reg_tbl WHERE userID = $session_id ";

	$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_array($result);

	$status = $row['status'];

	if(!isset($_SESSION["userID"]) || (trim ($_SESSION["userID"] == ""))) {
		header("location:../Account/login.php");
		exit();
	}
	else{
		if ($status != 'client'){
			header("location:../Account/login.php");
			exit();
		}
	}

	// echo "<script>alert('".$status."')</script>";

	if(isset($_SESSION["id"])) {
		if(isLoginSessionExpired()) {
			header("Location:logout.php?session_expired=1");
		}
	}
 

	

?>

