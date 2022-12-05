<?php


echo "<script>alert('inside exp')</script>";

$jobToken = sha1(uniqid(rand(),true));

$empname = $_POST['employername'];
$jobtitle = $_POST['jobtitle'];
$jobstartdate = $_POST['jobstartdate'];
$jobenddate = $_POST['jobenddate'];
$jobnote = $_POST['jobnote'];

require('../includes/mydatabase2.php');

foreach($empname as $key=>$value){

    echo "<script>alert('".$value.", ".$jobtitle[$key].", ".$jobstartdate[$key].", ".$jobenddate[$key].", ".$jobToken.", ".$jobnote[$key].", ".$session_id."')</script>";      

    $query2 = "INSERT into experience (expEmployerName, expJobTitle, expStartDate, expEndDate, expJobDesc, expToken, userID) values ('".$value."', '".$jobtitle[$key]."', '".$jobstartdate[$key]."', '".$jobenddate[$key]."', '".$jobnote[$key]."', '$jobToken', '$session_id')" or die(mysqli_error($dbc));
    $result2 = mysqli_query($dbc, $query2);

}


if($result2){

    echo "<script>alert('Upload Experience Successfully')</script>";        
    echo "<script>window.location='index.php'</script>";
    exit();
    
}else{
    //print "Error while registration...!";
    echo mysqli_error($dbc);
}

?>


