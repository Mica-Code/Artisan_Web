<?php


require ('helper.php');


// error variable.
$error = array();

$firstname = validate_input_text($_POST['firstname']);
if (empty($firstname)){
    $error[] = "You forgot to enter your First Name";
}

$lastname = validate_input_text($_POST['lastname']);
if (empty($lastname)){
    $error[] = "You forgot to enter your Last Name";
}

//Adding both first and last name together
$fullname = $lastname." ".$firstname;

$uname = validate_input_text($_POST['username']);
if (empty($uname)){
    $error[] = "You forgot to enter your Username";
}


$phone = validate_input_text($_POST['phone']);
if (empty($phone)){
    $error[] = "You forgot to enter your Phone Number";
}

$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error[] = "You forgot to enter your Email";
}

$location = validate_input_text($_POST['location']);
if (empty($location)){
    $error[] = "You forgot to enter your Location";
}

$age = validate_input_text($_POST['age']);
if (empty($age)){
    $error[] = "You forgot to enter your Age";
}

$handwork = validate_input_text($_POST['handwork']);
if (empty($handwork)){
    $error[] = "You have to have a Trade";
}

$experience = validate_input_text($_POST['experience']);
if (empty($experience)){
    $error[] = "You have to select your Experience Level";
}

$jobtype = validate_input_text($_POST['jobtype']);
if (empty($jobtype)){
    $error[] = "You have to select Job Type";
}

$address = validate_input_text($_POST['address']);
if (empty($address)){
    $error[] = "You forgot to enter your Address";
}

$skill_desc = validate_input_text($_POST['skill_desc']);
if (empty($skill_desc)){
    $error[] = "You have to input your work description";
}

$pwd = validate_input_text($_POST['password']);
if (empty($pwd)){
    $error[] = "You forgot to Enter your Password";
}
else{
    // Given password
    //$password = 'user-input-pass';

    $uppercase = preg_match('@[A-Z]@', $pwd);
    $lowercase = preg_match('@[a-z]@', $pwd);
    $number    = preg_match('@[0-9]@', $pwd);
    $specialChars = preg_match('@[^\w]@', $pwd);

    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pwd) < 8) {
        $error[] = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
    }
}

$cfm_password = validate_input_text($_POST['cfm_password']);
if (empty($cfm_password)){
    $error[] = "You forgot to confirm your Password";
}


//Checking if Password and Confirmed Password are the same
if ($pwd !== $cfm_password){
    $error[] = "Your Password must be the same";
}

$userToken = sha1(uniqid(rand(),true));

//uploading the picture

$files = $_FILES['profile_pic'];

//means there is no file uploaded
if($_FILES["profile_pic"]["error"] == 4) {
    $error[] = "You have to Upload your profile picture";
}else{
    $profileImage = upload_profile('assets/profile/', $files);
}

//acct verification code
$acct_code = md5(time() . $fullname);


// $imgContent = '';
// if(!empty($_FILES["profile_pic"]["name"])) { 
//     // Get file info 
//     $fileName = basename($_FILES["profile_pic"]["name"]); 
//     $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        
//     // Allow certain file formats 
//     $allowTypes = array('jpg','png','jpeg','gif'); 
//     if(in_array($fileType, $allowTypes)){ 
//         $image = $_FILES['profile_pic']['tmp_name']; 
//         $imgContent = addslashes(file_get_contents($image)); 
        
//         // Insert image content into database 
//         //$insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', NOW())"); 
//     }else{ 
//         $error[] = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
//     } 
// }else{ 
//     $error[] = 'Please select an image file to upload.'; 
// } 


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
    
    $query = "SELECT username from `art_reg_tbl` WHERE username='$uname'";
    $run = mysqli_query($dbc, $query);
   if(mysqli_num_rows($run) > 0){
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

    // while ($row = mysqli_fetch_array($erun)) {

    //     $demail = $row['email'];
    //     if ($demail == $email) {
    //         # code...
    //     //    echo '<script>alert("Email Already existing")</script>';
    //       $error[] = "Email Already Exists";
    //       goto a;
    //     }
        
    // }

    $query = "INSERT into art_reg_tbl (fullname, username, email, password, phone, status, age, handwork, experience, jobType, address, skill_desc, location, profile_pic, userToken, reg_date) 
    values ('$fullname', '$uname', '$email', '".md5($pwd)."', '$phone', 'artisan', '$age', '$handwork', '$experience', '$jobtype', '$address', '$skill_desc', '$location', '$profileImage', '$userToken', now())" or die(mysqli_error($dbc));
    $result = mysqli_query($dbc, $query);

    if($result){
        

		include ('email.php');
        
        
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














