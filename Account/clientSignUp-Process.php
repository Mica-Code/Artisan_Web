<?php


require ('helper.php');


// error variable.
$error = array();

$fullName = validate_input_text($_POST['fullName']);
if (empty($fullName)){
    $error[] = "You forgot to enter your Full Name";
}

$uname = validate_input_text($_POST['username']);
if (empty($uname)){
    $error[] = "You forgot to enter your Username";
}

$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "You forgot to enter your Email";
}

$pwd = validate_input_text($_POST['password']);
if (empty($pwd)){
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
if ($pwd !== $confirmPassword){
    $error[] = "Your Password must be the same";
}

$userToken = sha1(uniqid(rand(),true));

//Checking if Email already exist
// require ('../includes/mydatabase2.php');

// $query = "SELECT email from `client_tbl` WHERE email='$email'";
// $run = mysqli_query($dbc, $query);

// if (mysqli_num_rows($run) > 0){
//     $error[] = "Email Already in use";
// }

if(empty($error)){
    // register a new user
    //$hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    
    require ('../includes/mydatabase2.php');

    $uquery = "SELECT username from `art_reg_tbl` WHERE username='$uname'";
    $urun = mysqli_query($dbc, $uquery);
   if(mysqli_num_rows($urun) > 0){
        $error[] = "Username Already Exists";
        goto a;
   }
    $equery = "SELECT email from `art_reg_tbl` WHERE email='$email'";
    $erun = mysqli_query($dbc, $equery);
    //echo "<script>alert('I am here for email')</script>";
   if(mysqli_num_rows($erun) > 0){
        $error[] = "Email Already Exists";
        goto a;
   }
    $pquery = "SELECT phone from `art_reg_tbl` WHERE phone='$phone'";
    $prun = mysqli_query($dbc, $pquery);
   if(mysqli_num_rows($prun) > 0){
        $error[] = "Phone Number Already Exists";
        goto a;
   }


    $query = "INSERT into art_reg_tbl (fullname, username, email, password, phone, status, location, userToken, reg_date) values ('$fullName', '$uname', '$email', '".md5($pwd)."', '$phone', 'client', '$location', '$userToken', now())" or die(mysqli_error($dbc));
    $result = mysqli_query($dbc, $query);

    if($result){
        
        include ('email2.php');

        // echo "<script>alert('Registration Successful')</script>";
            
        // header('location: login.php?chk=successful');
        // exit();
        
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














