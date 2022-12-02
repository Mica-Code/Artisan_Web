<?php


require ('helper.php');


// error variable.
// $error = array();

// $fullName = validate_input_text($_POST['fullName']);
// if (empty($fullName)){
//     $error[] = "You forgot to enter your Full Name";
// }

// $username = validate_input_text($_POST['username']);
// if (empty($username)){
//     $error[] = "You forgot to enter your Username";
// }

// $email = validate_input_email($_POST['email']);
// if (empty($email)){
//     $error[] = "You forgot to enter your Email";
// }

// $password = validate_input_text($_POST['password']);
// if (empty($password)){
//     $error[] = "You forgot to enter your password";
// }

// $confirmPassword = validate_input_text($_POST['confirmPassword']);
// if (empty($confirmPassword)){
//     $error[] = "You forgot to confirm your Password";
// }

// $phone = validate_input_text($_POST['phone']);
// if (empty($phone)){
//     $error[] = "You forgot to enter your Phone Number";
// }

// $location = validate_input_text($_POST['location']);
// if (empty($location)){
//     $error[] = "You forgot to enter your Location";
// }

// //Checking if Password and Confirmed Password are the same
// if ($password !== $confirmPassword){
//     $error[] = "Your Password must be the same";
// }

$schToken = sha1(uniqid(rand(),true));

$schname = $_POST['schname'];
$schqtitle = $_POST['schqtitle'];
$schstartdate = $_POST['schstartdate'];
$schenddate = $_POST['schenddate'];

require('../include/mydatabase2.php');
    foreach($schname as $key=>$value){
        $query = "INSERT into education (eduSchoolName, eduQualification, eduStartDate, eduEndDate, eduToken, userID) values ('".$value."', '".$schqtitle[$key]."', '".$schstartdate[$key]."', '"$schenddate[$key]"', '$schToken', '$session_id')" or die(mysqli_error($dbc));
        $result = mysqli_query($dbc, $query);
    }

    if($result){

        echo "<script>alert('Resume Uploaded Successfully')</script>";        
        echo "<script>window.location='index.php'</script>";
        exit();
        
    }else{
        print "Error while registration...!";
        echo mysqli_error($dbc);
    }

//}

// else{
//     foreach ($error as $err){
//         echo $err;
//     }
    
// }

a:














