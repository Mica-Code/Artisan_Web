<?php


require ('./include/helper.php');


// error variable.
$error = array();

$postJobTitlen = validate_input_text($_POST['postJobTitle']);
if (empty($postJobTitle)){
    $error[] = "You forgot to enter the Job Title";
}

$postJobDescn = validate_input_text($_POST['postJobDesc']);
if (empty($postJobDesc)){
    $error[] = "You forgot to enter the Job Description";
}

$postJobProfessionn = validate_input_text($_POST['postJobProfession']);
if (empty($postJobProfession)){
    $error[] = "You forgot to select the Profession Needed";
}

$postJobLeveln = validate_input_text($_POST['postJobLevel']);
if (empty($postJobLevel)){
    $error[] = "You forgot to select the Experience Level Needed";
}

$postJobTypen = validate_input_text($_POST['postJobType']);
if (empty($postJobType)){
    $error[] = "You forgot to select the Job Type";
}

$postJobGendern = validate_input_text($_POST['postJobGender']);
if (empty($postJobGender)){
    $error[] = "You forgot to select the gender needed";
}

$postJobDeadlinen = validate_input_text($_POST['postJobDeadline']);
if (empty($postJobDeadline)){
    $error[] = "You forgot to select the application deadline";
}

$postJobLocationn = validate_input_text($_POST['postJobLocation']);
if (empty($postJobLocation)){
    $error[] = "You forgot to select the Job Location";
}

$postJobMinBudn = validate_input_text($_POST['postJobMinBud']);
if (empty($postJobMinBudn)){
    $error[] = "You forgot to Enter a Minimum Budget for the project";
}

$postJobMaxBudn = validate_input_text($_POST['postJobMaxBud']);
if (empty($postJobMaxBudn)){
    $error[] = "You forgot to Enter a Maximum Budget for the project";
}

if ($postJobMaxBudn < $postJobMinBudn){
    $error[] = "Maximum Budget should be greater than minimum budget";
}

$postJobAddressn = validate_input_text($_POST['postJobAddress']);
if (empty($postJobAddress)){
    $error[] = "You forgot to Enter the full Address of the job";
}

if(empty($error)){
    
    $query = "UPDATE postjob SET postJobTitle='$postJobTitlen', postJobDesc='$postJobDescn', postJobProfession='$postJobProfessionn', postJobLevel='$postJobLeveln', postJobType='$postJobTypen', postJobGender='$postJobGendern', postJobDeadline='$postJobDeadlinen', postJobLocation='$postJobLocationn', postJobAddress='$postJobAddressn', postJobMinBudget='$postJobMinBudn', postJobMaxBudget='$postJobMaxBudn', postJobEditDate=now(), postJobStatus='Pending' WHERE postJobToken='$postJobToken'" or die(mysqli_error($dbc));
    $result = mysqli_query($dbc, $query);

    if($result){


        echo "<script>alert('Job Edited Successfully')</script>";
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














