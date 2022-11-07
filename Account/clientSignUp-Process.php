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
    $error[] = "You forgot to enter your Username";
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
    $error[] = "You forgot to confirm your Password";
}

$phone = validate_input_text($_POST['phone']);
if (empty($phone)){
    $error[] = "You forgot to enter your Phone Number";
}

$location = validate_input_text($_POST['location']);
if (empty($location)){
    $error[] = "You forgot to enter your Location";
}

//Checking if Password and Confirmed Password are the same
if ($password !== $confirmPassword){
    $error[] = "Your Password must be the same";
}

//Checking if Email already exist
// require ('../includes/mydatabase2.php');

// $query = "SELECT email from `client_tbl` WHERE email='$email'";
// $run = mysqli_query($dbc, $query);

// if (mysqli_num_rows($run) > 0){
//     $error[] = "Email Already in use";
// }

if(empty($error)){
    // register a new user
    $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    
    require ('../includes/mydatabase2.php');
    $query = "SELECT email from `art_reg_tbl` WHERE email='$email'";
    $run = mysqli_query($dbc, $query);

    while ($row = mysqli_fetch_array($run)) {

        $demail = $row['email'];
        if ($demail == $email) {
            # code...
        //    echo '<script>alert("Email Already existing")</script>';
           $error[] = "Email Already existing";
           goto a;
        }
    }

    $query = "INSERT into art_reg_tbl (fullname, username, email, password, phone, status, location, reg_date) values ('$fullName', '$username', '$email', '$hashed_pass', '$phone', 'client', '$location', now())" or die(mysqli_error($dbc));
    $result = mysqli_query($dbc, $query);

    if($result){

        echo "<script>alert('Registration Successful')</script>";
            
        header('location: login.php?chk=successful');
        exit();
        
    }else{
        print "Error while registration...!";
        echo mysqli_error($dbc);
    }

}

// else{
//     foreach ($error as $err){
//         echo $err;
//     }
    
// }

a:














