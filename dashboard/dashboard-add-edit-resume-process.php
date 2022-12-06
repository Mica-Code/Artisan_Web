<?php
// echo "<script>alert('inside the edit process');</script>";

require('../includes/mydatabase2.php');

if(isset($_POST['editEdu'])){

    $schname = $_POST['schname'];
    $schqtitle = $_POST['schqtitle'];
    $schstartdate = $_POST['schstartdate'];
    $schenddate = $_POST['schenddate'];

    
    // echo "<script>alert('".$schname.", ".$schqtitle.", ".$schstartdate.", ".$schenddate.", ".$schTokenE."')</script>";


    $query = "UPDATE education SET eduSchoolName = '$schname', eduQualification = '$schqtitle', eduStartDate = '$schstartdate', eduEndDate = '$schenddate' WHERE eduToken='$schTokenE'" or die(mysqli_error($dbc));
    $result = mysqli_query($dbc, $query);


    if($result){

        echo "<script>alert('Edit Successful')</script>";        
        echo "<script>window.location='dashboard-add-resume.php'</script>";
        exit();
        
    }else{
        //print "Error while registration...!";
        echo mysqli_error($dbc);
    }
    
    



}elseif(isset($_POST['submitEdu'])){

    $schname = $_POST['schname'];
    $schqtitle = $_POST['schqtitle'];
    $schstartdate = $_POST['schstartdate'];
    $schenddate = $_POST['schenddate'];

    $schToken = sha1(uniqid(rand(),true));

    //echo "<script>alert('".$value.", ".$schqtitle[$key].", ".$schstartdate[$key].", ".$schenddate[$key].", ".$schToken.", ".$session_id."')</script>";      

    $query = "INSERT into education (eduSchoolName, eduQualification, eduStartDate, eduEndDate, eduToken, userID) values ('".$schname."', '".$schqtitle."', '".$schstartdate."', '".$schenddate."', '$schToken', '$session_id')" or die(mysqli_error($dbc));
    $result = mysqli_query($dbc, $query);


    if($result){

        echo "<script>alert('Upload Successful')</script>";        
        echo "<script>window.location='dashboard-add-resume.php'</script>";
        exit();
        
    }else{
        //print "Error while registration...!";
        echo mysqli_error($dbc);
    }
}elseif(isset($_POST['editExp'])){
    
    $expname = $_POST['employername'];
    $expqtitle = $_POST['jobtitle'];
    $expstartdate = $_POST['jobstartdate'];
    $expenddate = $_POST['jobenddate'];
    $expnote = $_POST['jobnote'];
    

    $query = "UPDATE experience SET expEmployerName = '$expname', expJobTitle = '$expqtitle', expStartDate = '$expstartdate', expEndDate = '$expenddate', expJobDesc = '$expnote' WHERE expToken='$expTokenE'" or die(mysqli_error($dbc));
    $result = mysqli_query($dbc, $query);


    if($result){

        echo "<script>alert('Edit Successful')</script>";        
        echo "<script>window.location='dashboard-add-resume.php'</script>";
        exit();
        
    }else{
        //print "Error while registration...!";
        echo mysqli_error($dbc);
    }
}elseif(isset($_POST['submitExp'])){

    $expname = $_POST['employername'];
    $expqtitle = $_POST['jobtitle'];
    $expstartdate = $_POST['jobstartdate'];
    $expenddate = $_POST['jobenddate'];
    $expnote = $_POST['jobnote'];
    
    $expToken = sha1(uniqid(rand(),true));

    // echo "<script>alert('".$expname.", ".$expqtitle.", ".$expnote.", ".$session_id."')</script>";      

    $query = "INSERT into experience (expEmployerName, expJobTitle, expStartDate, expEndDate, expJobDesc, expToken, userID) values ('".$expname."', '".$expqtitle."', '".$expstartdate."', '".$expenddate."', '$expnote', '$expToken', '$session_id')" or die(mysqli_error($dbc));
    $result = mysqli_query($dbc, $query);


    if($result){

        echo "<script>alert('Upload Successful')</script>";        
        echo "<script>window.location='dashboard-add-resume.php'</script>";
        exit();
        
    }else{
        //print "Error while registration...!";
        echo mysqli_error($dbc);
    }
}
elseif(isset($_POST['editSkill'])){

    $skillname = $_POST['skillname'];
    $skillpercent = $_POST['skillper'];

    // echo "<script>alert('".$expname.", ".$expqtitle.", ".$expnote.", ".$session_id."')</script>";      

    $query = "UPDATE skill SET skiName = '$skillname', skiPercent = '$skillpercent' WHERE skiToken='$skiTokenE'" or die(mysqli_error($dbc));
    $result = mysqli_query($dbc, $query);


    if($result){

        echo "<script>alert('Edit Successful')</script>";        
        echo "<script>window.location='dashboard-add-resume.php'</script>";
        exit();
        
    }else{
        //print "Error while registration...!";
        echo mysqli_error($dbc);
    }
}
elseif(isset($_POST['submitSkill'])){

    $skillname = $_POST['skillname'];
    $skillpercent = $_POST['skillper'];

    
    $skillToken = sha1(uniqid(rand(),true));

    // echo "<script>alert('".$expname.", ".$expqtitle.", ".$expnote.", ".$session_id."')</script>";      
   
    $query = "INSERT into skill (skiName, skiPercent, skiToken, userID) values ('".$skillname."', '".$skillpercent."', '$skillToken', '$session_id')" or die(mysqli_error($dbc));
    $result = mysqli_query($dbc, $query);


    if($result){

        echo "<script>alert('Upload Successful')</script>";        
        echo "<script>window.location='dashboard-add-resume.php'</script>";
        exit();
        
    }else{
        //print "Error while registration...!";
        echo mysqli_error($dbc);
    }
}

?>












