<?php


echo "<script>alert('inside process')</script>";

$schToken = sha1(uniqid(rand(),true));

$schname = $_POST['schname'];
$schqtitle = $_POST['schqtitle'];
$schstartdate = $_POST['schstartdate'];
$schenddate = $_POST['schenddate'];

require('../includes/mydatabase2.php');

foreach($schname as $key=>$value){

    echo "<script>alert('".$value.", ".$schqtitle[$key].", ".$schstartdate[$key].", ".$schenddate[$key].", ".$schToken.", ".$session_id."')</script>";      

    $query = "INSERT into education (eduSchoolName, eduQualification, eduStartDate, eduEndDate, eduToken, userID) values ('".$value."', '".$schqtitle[$key]."', '".$schstartdate[$key]."', '".$schenddate[$key]."', '$schToken', '$session_id')" or die(mysqli_error($dbc));
    $result = mysqli_query($dbc, $query);

}


if($result){

    echo "<script>alert('Resume Uploaded Successfully')</script>";        
    echo "<script>window.location='index.php'</script>";
    exit();
    
}else{
    //print "Error while registration...!";
    echo mysqli_error($dbc);
}

?>












