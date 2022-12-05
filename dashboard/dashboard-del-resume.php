<?php
include_once('include/head.php');

if (isset($_GET['rand']) && isset($_GET['getToken'])) {

    $rand = $_GET['rand'];
    $getToken = $_GET['getToken'];
    $type = $_GET['type'];

    // echo "<script>alert('".$schID." and ".$schToken."');</script>";

    if (($rand != '') && ($getToken != '') && ($type =='edu')){
        
        $get_rows = "SELECT * from education where eduID='$rand' AND eduToken='$getToken'";
        $res = mysqli_query($dbc, $get_rows);
        $num_row=mysqli_num_rows($res);

        
        // echo "<script>alert('Job ID is ".$jobId." and Job Token is ".$jobToken."')</script>";

        if($num_row > 0){
            $del_edu = "DELETE from education WHERE eduID=$rand AND eduToken='$getToken'";
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


    }
    
    elseif(($rand != '') && ($getToken != '') && ($type == 'exp')){
        $get_rows = "SELECT * from experience where expID='$rand' AND expToken='$getToken'";
        $res = mysqli_query($dbc, $get_rows);
        $num_row=mysqli_num_rows($res);

        
        // echo "<script>alert('Job ID is ".$jobId." and Job Token is ".$jobToken."')</script>";

        if($num_row > 0){
            $del_exp = "DELETE from experience WHERE expID=$rand AND expToken='$getToken'";
            $result = mysqli_query($dbc, $del_exp);
            if($result){
                echo "<script>alert('Delete Successful');</script>";
                echo "<script>window.location='dashboard-add-resume.php'</script>";
            }else{
                echo "<script>alert('The query did not complete successfully');</script>";
            }            
        }else{
            echo "<script>window.location='dashboard-add-resume.php'</script>";
        }
    }

    else{
        echo "<script>window.location='dashboard-add-resume.php'</script>";
    }
}else{
    echo "<script>window.location='dashboard-add-resume.php'</script>";
}

?>
