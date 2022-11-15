<?php


require ('./include/helper.php');


// error variable.
$error = array();

$postJobTitle = validate_input_text($_POST['postJobTitle']);
if (empty($postJobTitle)){
    $error[] = "You forgot to enter the Job Title";
}

$postJobDesc = validate_input_text($_POST['postJobDesc']);
if (empty($postJobDesc)){
    $error[] = "You forgot to enter the Job Description";
}

$postJobProfession = validate_input_text($_POST['postJobProfession']);
if (empty($postJobProfession)){
    $error[] = "You forgot to select the Profession Needed";
}

$postJobLevel = validate_input_text($_POST['postJobLevel']);
if (empty($postJobLevel)){
    $error[] = "You forgot to select the Experience Level Needed";
}

$postJobType = validate_input_text($_POST['postJobType']);
if (empty($postJobType)){
    $error[] = "You forgot to select the Job Type";
}

$postJobGender = validate_input_text($_POST['postJobGender']);
if (empty($postJobGender)){
    $error[] = "You forgot to select the gender needed";
}

$postJobDeadline = validate_input_text($_POST['postJobDeadline']);
if (empty($postJobDeadline)){
    $error[] = "You forgot to select the application deadline";
}

$postJobLocation = validate_input_text($_POST['postJobLocation']);
if (empty($postJobLocation)){
    $error[] = "You forgot to select the Job Location";
}

$postJobAddress = validate_input_text($_POST['postJobAddress']);
if (empty($postJobAddress)){
    $error[] = "You forgot to Enter the full Address of the job";
}

$postJobToken = sha1(uniqid(rand(),true));

if(empty($error)){
    
    $query = "INSERT into postjob (postJobTitle, postJobDesc, postJobProfession, postJobLevel, postJobType, postJobGender, postJobDeadline, postJobLocation, postJobAddress, postJobDate, userID, postJobToken) 
    values ('$postJobTitle', '$postJobDesc', '$postJobProfession', '$postJobLevel', '$postJobType', '$postJobGender', '$postJobDeadline', '$postJobLocation', '$postJobAddress', now(), '$session_id', '$postJobToken')" or die(mysqli_error($dbc));
    $result = mysqli_query($dbc, $query);

    if($result){

        echo "<script>window.location = 'client-index.php';</script>";
            
        // header('location: dashboard-post-job.php#myModal');
        // header('location: logout.php');
        // exit(header("Location: /logout.php"));
        // echo "<script>alert('The page will exit after this')</script>";
        
    }else{
        print "Error while Posting Job Try Again Later...!";
        echo mysqli_error($dbc);
    }

}

// else{
//     foreach ($error as $err){
//         echo $err;
//     }
    
// }

a:














