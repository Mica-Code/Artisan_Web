<?php

require ('./include/helper.php');

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

$phone = validate_input_text($_POST['phone']);
if (empty($phone)){
    $error[] = "You forgot to enter your Phone Number";
}

$location = validate_input_text($_POST['location']);
if (empty($location)){
    $error[] = "You forgot to enter your Location";
}

$age = validate_input_text($_POST['age']);
if (empty($age)){
    $error[] = "You forgot to enter your Age";
}

$address = validate_input_text($_POST['address']);
if (empty($address)){
    $error[] = "You forgot to enter your Address";
}

$about = validate_input_text($_POST['about']);
if (empty($about)){
    $error[] = "A little about yourself";
}

if(empty($error)){
    
    require ('../includes/mydatabase2.php');
    $query = "UPDATE art_reg_tbl SET fullname='$fullName', username='$username', email='$email', phone='$phone', location='$location', age='$age', address='$address', about='$about' WHERE userID=$session_id" or die(mysqli_error($dbc));;
    $result = mysqli_query($dbc, $query);
    if($result){

        echo "<script>alert('Update Successful')</script>";
            
        echo '<script>window.location="client-index.php"</script>';
        
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














