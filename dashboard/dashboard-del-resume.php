<?php
include_once('include/head.php');

if (isset($_GET['schID']) && isset($_GET['schToken'])) {

    $schID = $_GET['schID'];
    $schToken = $_GET['schToken'];

    // echo "<script>alert('".$schID." and ".$schToken."');</script>";

    if (($schID != '') && ($schToken != '')){
        
        $get_rows = "SELECT * from education where eduID='$schID' AND eduToken='$schToken'";
        $res = mysqli_query($dbc, $get_rows);
        $num_row=mysqli_num_rows($res);

        
        // echo "<script>alert('Job ID is ".$jobId." and Job Token is ".$jobToken."')</script>";

        if($num_row > 0){
            $del_edu = "DELETE from education WHERE eduID=$schID AND eduToken='$schToken'";
            $result = mysqli_query($dbc, $del_edu);
            if($result){
                echo "<script>alert('Delete Successful');</script>";
                echo "<script>window.location='dashboard-add-resume.php'</script>";
            }else{
                echo "<script>alert('The query did not complete successfully');</script>";
            }            
        }else{
            echo "<script>window.location='dashboard-add-resume.php'</script>";
        }
    }else{
        echo "<script>window.location='dashboard-add-resume.php'</script>";
    }
}else{
    echo "<script>window.location='dashboard-add-resume.php'</script>";
}

?>
