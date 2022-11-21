<?php

require('./include/helper.php');

// error variable.
$error = array();
echo "<script>alert('Declaring an array')</script>";

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error[] = "You forgot to enter your Old Password";
}

$new_password = validate_input_text($_POST['new_password']);
if (empty($new_password)){
    $error[] = "You forgot to enter your New Password";
}

$c_new_password = validate_input_email($_POST['c_new_password']);
if (empty($c_new_password)){
    $error[] = "You forgot to Confirm your password";
}


if(empty($error)){

    require ('../includes/mydatabase2.php');

    $query = "SELECT password from art_reg_tbl WHERE userID = $session_id";
    $pass = mysqli_query($dbc, $query);

    if(md5($password) != $pass){
        $error[] = "Password is Incorrect";
    }
    elseif($password != $new_password){
        $error[] = "New Password and Confirm Password must match";
    }
    else{
        $hashpassword = md5($password);
        $query = "UPDATE art_reg_tbl SET password='$hashpassword' WHERE userID=$session_id" or die(mysqli_error($dbc));;
        $result = mysqli_query($dbc, $query);
        if($result){
    
            echo "<script>alert('Password Updated Successfully')</script>";
                
            echo '<script>window.location="client-index.php"</script>';
            
        }else{
            print "Error while registration...!";
            echo mysqli_error($dbc);
        }
    }




    
}


?>
