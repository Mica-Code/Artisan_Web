<?php


require ('./include/helper.php');


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

$username = validate_input_text($_POST['username']);
if (empty($username)){
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
    $error[] = "You have to have a Handwork";
}

$address = validate_input_text($_POST['address']);
if (empty($address)){
    $error[] = "You forgot to enter your Address";
}

$skill_desc = validate_input_text($_POST['skill_desc']);
if (empty($skill_desc)){
    $error[] = "You have to input your work description";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "You forgot to enter your password";
}

$cfm_password = validate_input_text($_POST['cfm_password']);
if (empty($cfm_password)){
    $error[] = "You forgot to confirm your Password";
}


//Checking if Password and Confirmed Password are the same
if ($password !== $cfm_password){
    $error[] = "Your Password must be the same";
}

$userToken = sha1(uniqid(rand(),true));

//uploading the picture
$imgContent = '';
if(!empty($_FILES["profile_pic"]["name"])) { 
    // Get file info 
    $fileName = basename($_FILES["profile_pic"]["name"]); 
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        
    // Allow certain file formats 
    $allowTypes = array('jpg','png','jpeg','gif'); 
    if(in_array($fileType, $allowTypes)){ 
        $image = $_FILES['profile_pic']['tmp_name']; 
        $imgContent = addslashes(file_get_contents($image)); 
        
        // Insert image content into database 
        //$insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', NOW())"); 
    }else{ 
        $error[] = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
    } 
}else{ 
    $error[] = 'Please select an image file to upload.'; 
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
    //$hashed_pass = password_hash($password, PASSWORD_DEFAULT);
    
    require ('../includes/mydatabase2.php');
    $query = "SELECT email from `art_reg_tbl` WHERE email='$email'";
    $run = mysqli_query($dbc, $query);

    while ($row = mysqli_fetch_array($run)) {

        $demail = $row['email'];
        if ($demail == $email) {
            # code...
        //    echo '<script>alert("Email Already existing")</script>';
           $error[] = "Email Already Exists";
           goto a;
        }
    }

    $query = "INSERT into art_reg_tbl (fullname, username, email, password, phone, status, age, handwork, address, skill_desc, location, profile_pic, userToken, reg_date) 
    values ('$fullname', '$username', '$email', '".md5($password)."', '$phone', 'artisan', '$age', '$handwork', '$address', '$skill_desc', '$location', '$imgContent', '$userToken', now())" or die(mysqli_error($dbc));
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














