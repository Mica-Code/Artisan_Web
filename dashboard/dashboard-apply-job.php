<?php
include_once('include/head.php');

if (isset($_GET['JobID']) && isset($_GET['JobToken'])) {

    $jobId = $_GET['JobID'];
    $jobToken = $_GET['JobToken'];

    //echo "<script>alert('".$jobId." and ".$jobToken."');</script>";

    if (($jobId != '') && ($jobToken != '')){
        
        $get_rows = "SELECT * from postjob where postJobID='$jobId' AND postJobToken='$jobToken'";
        $res = mysqli_query($dbc, $get_rows);
        $num_row=mysqli_num_rows($res);

        // echo "<script>alert('Job ID is ".$jobId." and Job Token is ".$jobToken."')</script>";

        if($num_row > 0){
            $row = mysqli_fetch_array($res);

            $clientID = $row['userID'];

            $add_appjob = "INSERT into appjob (appPostJobID, appClientID, appArtisanID, appStatus, appJobDate) VALUES ('$jobId', '$clientID', '$session_id', 'Pending', now())";
            $result = mysqli_query($dbc, $add_appjob);
            if($result){
                echo "<script>alert('Job Applied successfully');</script>";
                echo "<script>window.location='dashboard-alert-job.php'</script>";
            }else{
                echo "<script>alert('The query did not complete successfully');</script>";
            }            
        }else{
            echo "<script>window.location='dashboard-alert-job.php'</script>";
        }
    }else{
        echo "<script>window.location='dashboard-alert-job.php'</script>";
    }
}else{
    echo "<script>window.location='dashboard-alert-job.php'</script>";
}

?>
