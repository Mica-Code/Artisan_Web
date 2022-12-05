<?php
// echo "<script>alert('inside the edit process');</script>";
$schname = $_POST['schname'];
$schqtitle = $_POST['schqtitle'];
$schstartdate = $_POST['schstartdate'];
$schenddate = $_POST['schenddate'];

require('../includes/mydatabase2.php');

if(isset($_POST['editEdu'])){
    
    // echo "<script>alert('".$schname.", ".$schqtitle.", ".$schstartdate.", ".$schenddate.", ".$schTokenE."')</script>";


    $query = "UPDATE education SET eduSchoolName = '$schname', eduQualification = '$schqtitle', eduStartDate = '$schstartdate', eduEndDate = '$schenddate' WHERE eduToken='$schTokenE'" or die(mysqli_error($dbc));
    $result = mysqli_query($dbc, $query);


    if($result){

        echo "<script>alert('Edit Successful')</script>";        
        echo "<script>window.location='index.php'</script>";
        exit();
        
    }else{
        //print "Error while registration...!";
        echo mysqli_error($dbc);
    }
    
    



}elseif(isset($_POST['submitEdu'])){
    
    $schToken = sha1(uniqid(rand(),true));

    //echo "<script>alert('".$value.", ".$schqtitle[$key].", ".$schstartdate[$key].", ".$schenddate[$key].", ".$schToken.", ".$session_id."')</script>";      

    $query = "INSERT into education (eduSchoolName, eduQualification, eduStartDate, eduEndDate, eduToken, userID) values ('".$schname."', '".$schqtitle."', '".$schstartdate."', '".$schenddate."', '$schToken', '$session_id')" or die(mysqli_error($dbc));
    $result = mysqli_query($dbc, $query);


    if($result){

        echo "<script>alert('Upload Successful')</script>";        
        echo "<script>window.location='index.php'</script>";
        exit();
        
    }else{
        //print "Error while registration...!";
        echo mysqli_error($dbc);
    }
}

?>












