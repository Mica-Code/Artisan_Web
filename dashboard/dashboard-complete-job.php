<?php
include_once('include/client-head.php');

if (isset($_GET['applicant']) && isset($_GET['job']) && isset($_GET['token'])) {

    $applicant = $_GET['applicant'];
    $job = $_GET['job'];
    $token = $_GET['token'];

    $Q = "SELECT * FROM postjob WHERE postJobID = '$job' AND postJobToken = '$token'";
    //echo "<script>alert('".$job."and ".$token."')</script>";
    $runQ = mysqli_query($dbc, $Q);

    // echo "<script>alert('I am here')</script>";
    
    if(mysqli_num_rows($runQ) > 0){
        $UpdateQ = "UPDATE postJob SET postJobStatus = 'Completed', postJobCompletedDate = now() WHERE postJobID = '$job' AND postJobToken = '$token'";
        $runUpdateQ = mysqli_query($dbc, $UpdateQ);

        if($runUpdateQ){
            $UpdateAppQ = "UPDATE appjob SET appStatus = 'Completed', completedJobDate = now() WHERE appPostJobID = '$job' AND appArtisanID = '$applicant'";
            $runUpdateAppQ = mysqli_query($dbc, $UpdateAppQ);

            if($runUpdateAppQ){
                echo "<script>alert('This Job has been Successfully Completed')</script>";
                echo "<script>window.location='dashboard-manage-applications.php'</script>";
            }
        }
    }

}else{
    echo "<script>window.location='dashboard-manage-applications.php'</script>";
}

?>
