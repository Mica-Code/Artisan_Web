<?php
include_once('include/client-head.php');

if (isset($_GET['JobID']) && isset($_GET['JobToken'])) {

    $jobId = $_GET['JobID'];
    $jobToken = $_GET['JobToken'];

    //echo "<script>alert('".$jobId." and ".$jobToken."');</script>";

    if (($jobId != '') && ($jobToken != '')){
        
        $get_rows = "SELECT postJobTitle from postjob where postJobID='$jobId' AND postJobToken='$jobToken'";
        $res = mysqli_query($dbc, $get_rows);
        $num_row=mysqli_num_rows($res);
        if($num_row > 0){
            $delete_sql = "DELETE from postjob where postJobID='$jobId'";
            $result = mysqli_query($dbc, $delete_sql);
            if($result){
                echo "<script>alert('Job Deleted successfully');</script>";
                echo "<script>window.location='dashboard-manage-jobs.php'</script>";
            }else{
                echo "<script>alert('The query did not complete successfully');</script>";
            }            
        }else{
            echo "<script>window.location='dashboard-manage-jobs.php'</script>";
        }
    }else{
        echo "<script>window.location='dashboard-manage-jobs.php'</script>";
    }
}else{
    echo "<script>window.location='dashboard-manage-jobs.php'</script>";
}

?>
