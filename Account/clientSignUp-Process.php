<?php

require ('helper.php');


// error variable.
$error = array();

$fullName = validate_input_text($_POST['fullName']);
if (empty($fullName)){
    $error[] = "You forgot to enter your Full Name";
}

$username = validate_input_text($_POST['username']);
if (empty($username)){
    $error[] = "You forgot to enter your Last Name";
}

$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "You forgot to enter your Email";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "You forgot to enter your password";
}

$confirmPassword = validate_input_text($_POST['confirmPassword']);
if (empty($confirmPassword)){
    $error[] = "You forgot to enter your Confirm Password";
}

if ($password !== $confirmPassword){
    $error[] = "Your Password must be the same";
}


$tel = validate_input_text($_POST['tel']);
if (empty($tel)){
    $error[] = "You forgot to enter your Phone Number";
}

$location = validate_input_text($_POST['location']);
if (empty($location)){
    $error[] = "You forgot to enter your Location";
}

if(empty($error)){
    // register a new user
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    require ('../includes/mydatabase2.php');


    $query = "SELECT * from client_tbl" or die(mysqli_error($dbc));
    $run = mysqli_query($dbc, $query);
    while ($row = mysqli_fetch_array($run)) {

        $demail = $row['email'];
        if ($demail == $email) {
            # code...
            echo '<script>alert("Email Already existing")</script>';
            goto a;
        }
    }

    $query = "INSERT into client_tbl (fullName, username, email, password, tel, location, reg_date) values ('$fullName', '$username', '$email', '$hashed_pass', '$tel', 'location', now())" or die(mysqli_error($dbc));
    $result = mysqli_query($dbc, $query);

    if($result){

        echo "<script>alert('Registration Successful')</script>";
            
        header('location: Login.htm');
        exit();
        
    }else{
        print "Error while registration...!";
        echo mysqli_error($dbc);
    }

}else{
    echo 'not validate';
}

a:















