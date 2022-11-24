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
            $del_appjob = "DELETE from appjob WHERE appPostJobID=$jobId AND appArtisanID=$session_id";
            $result = mysqli_query($dbc, $del_appjob);
            if($result){
                echo "<script>alert('You have canceled your application');</script>";
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
