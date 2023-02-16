<?php

require ('./include/helper.php');

// error variable.
$error = array();

$fullName = validate_input_text($_POST['fullName']);
if (empty($fullName)){
    $error[] = "You forgot to enter your Full Name";
}

// $username = validate_input_text($_POST['username']);
// if (empty($username)){
//     $error[] = "You forgot to enter your Username";
// }

// $email = validate_input_email($_POST['email']);
// if (empty($email)){
//     $error[] = "You forgot to enter your Email";
// }

$phone = validate_input_text($_POST['phone']);
if (empty($phone)){
    $error[] = "You forgot to enter your Phone Number";
}

$location = validate_input_text($_POST['location']);
if (empty($location)){
    $error[] = "You forgot to enter your Location";
}

$dob = validate_input_text($_POST['dob']);
if (empty($dob)){
    $error[] = "You forgot to enter your Date of Birth";
}

$experience = validate_input_text($_POST['experience']);
if (empty($experience)){
    $error[] = "You have to select an experience level";
}

$jobtype = validate_input_text($_POST['jobtype']);
if (empty($jobtype)){
    $error[] = "You have to select a Job Type";
}

$address = validate_input_text($_POST['address']);
if (empty($address)){
    $error[] = "You forgot to enter your Address";
}

$skill_desc = validate_input_text($_POST['skill_desc']);
if (empty($skill_desc)){
    $error[] = "Skill Description cannot be empty";
}

$about = validate_input_text($_POST['about']);
if (empty($about)){
    $error[] = "A little about yourself";
}

$files = $_FILES['profile_pic'];
$profileImage = upload_profile('../Account/assets/profile/', $files);
 
if(empty($error)){
    
    require ('../includes/mydatabase2.php');
    $query = "UPDATE art_reg_tbl SET fullname='$fullName', phone='$phone', location='$location', dob='$dob', experience='$experience', jobType='$jobtype', address='$address', skill_desc='$skill_desc', about='$about', profile_pic='$profileImage' WHERE userID=$session_id" or die(mysqli_error($dbc));;
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














