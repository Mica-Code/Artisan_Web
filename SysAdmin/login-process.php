<?php
//echo "<script>alert('Inside Login Process')</script>";
$status = "";

// echo "<script>alert('Am inside login process')</script>";


$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "You forgot to enter your Email";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "You forgot to enter your password";
}




if(empty($error)){
    //echo "<script>alert('Error is empty')</script>";
    // sql query
    $query = "SELECT * FROM admin_user WHERE admin_email='$email'";
    $run = mysqli_query($dbc, $query);
    
    //echo "<script>alert('".$email."')</script>";

	if(!$run){
		echo 'Query failed while fetching data';
		exit();
	}
    $row = mysqli_fetch_array($run, MYSQLI_ASSOC);
    if (!empty($row)){
        // verify password
        if($row['admin_pass'] == md5($password)){
            
            $_SESSION['userID'] = $row['admin_id'];
            $_SESSION['loggedin_time'] = time();

            header("location: ./dashboard/index.php");
            
        } else {
            $error[] = "Incorrect Email or Password!";
        }
    }else{
        $error[] = "E-mail does not exist!";
    }

}else{
    $error[] = "Please Fill out email and password to login!";
}
