<?php 

include './include/database2.php';
	// include 'fxn.php';
	session_start();

	$session_id = '';
	if(isset($_SESSION["userID"])){
	    
		$session_id = $_SESSION["userID"];
		
		$query = "SELECT * from art_reg_tbl WHERE userID = $session_id ";

    	$result = mysqli_query($dbc, $query);
    	$row = mysqli_fetch_array($result);

	    $status = $row['status'];
		
		if($status == 'artisan'){
			header("location:artisan-index.php");
			exit();
		}
		elseif($status == 'client'){
		    header("location:client-index.php");
			exit();
		}
		else{
		    header("../Account/login.php");
			exit();
		}
	}
	else{
		header("location:../Account/login.php");
		exit();
	}

?>