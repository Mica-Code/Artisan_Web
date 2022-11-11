<?php

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

//echo "<script>alert('".$password."')</script>";

if(empty($error)){
    // sql query
    $query = "SELECT * FROM art_reg_tbl WHERE email=?";
    $q = mysqli_stmt_init($dbc);
    mysqli_stmt_prepare($q, $query);
    
    // bind parameter
    mysqli_stmt_bind_param($q, 's', $email);
    //execute query
    mysqli_stmt_execute($q);

    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if (!empty($row)){
        // verify password

        if($row['password'] == md5($password)){
            
            $_SESSION['userID'] = $row['id'];
            $_SESSION['loggedin_time'] = time();

            if($row['status'] == 'artisan'){
                $status = "artisan";
                header("location: ../dashboard");
                exit();
            }
            else {
                $status = "client";
                header("location: ../dashboard/client-index.php");
                exit();
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
