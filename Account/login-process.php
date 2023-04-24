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
    $query = "SELECT * FROM art_reg_tbl WHERE email='$email'";
    $run = mysqli_query($dbc, $query);
    
    //echo "<script>alert('".$email."')</script>";

	if(!$run){
		echo 'Query failed while fetching data';
		exit();
	}
    $row = mysqli_fetch_array($run, MYSQLI_ASSOC);
    if (!empty($row)){
        // verify password
        if($row['password'] == md5($password)){
            
            if($row['verify'] == 1){
                
                //echo "<script>alert('Password')</script>";
            
                $_SESSION['userID'] = $row['userID'];
                $_SESSION['loggedin_time'] = time();
                $statusn = $row['status'];
                
                //echo "<script>alert('".$status."')</script>";
    
                if($statusn == 'client'){
                    $status = "client";
                    //echo "<script>alert('Going to client index')</script>";
                    header("location: ../dashboard/client-index.php");
                    
                }
                else{
                    $status = "artisan";
                    //echo "<script>alert('Going to artisan index')</script>";
                    header("location: ../dashboard/artisan-index.php");
                    
                }

                
            }else{
                $error[] = "Your Email has not been verified";
            }

            
        } else {
            $error[] = "Incorrect Email or Password!";
        }
    }else{
        $error[] = "E-mail does not exist!";
    }

}else{
    $error[] = "Please Fill out email and password to login!";
}
