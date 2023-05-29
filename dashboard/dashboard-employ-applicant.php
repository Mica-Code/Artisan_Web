<?php
include_once('include/client-head.php');

// if (isset($_GET['applicant']) && isset($_GET['job']) && isset($_GET['token']) && isset($_GET['client'])) {

//     $applicant = $_GET['applicant'];
//     $job = $_GET['job'];
//     $token = $_GET['token'];
//     $client = $_GET['client'];

//     $Q = "SELECT * FROM postjob WHERE postJobID = '$job' AND postJobToken = '$token'";
//     echo "<script>alert('".$job."and ".$token."')</script>";
//     $runQ = mysqli_query($dbc, $Q);

//     // echo "<script>alert('I am here')</script>";
    
//     if(mysqli_num_rows($runQ) > 0){
//         $UpdateQ = "UPDATE postJob SET postJobStatus = 'Active', postJobActiveDate = now() WHERE postJobID = '$job' AND postJobToken = '$token'";
//         $runUpdateQ = mysqli_query($dbc, $UpdateQ);

//         if($runUpdateQ){
//             // $UpdateAppQ = "UPDATE appjob SET appStatus = 'Active', activeJobDate = now() WHERE appPostJobID = '$job' AND appArtisanID = '$applicant' AND appClientID = '$client'";
//             $UpdateAppQ = "UPDATE appjob SET appStatus = 'Active', activeJobDate = now() WHERE appPostJobID = '$job' AND appArtisanID = '$applicant' AND appClientID = '$client'";
//             $runUpdateAppQ = mysqli_query($dbc, $UpdateAppQ);

//             if($runUpdateAppQ){
//                 echo "<script>alert('You have just Employed this Artisan for the Job')</script>";
//                 echo "<script>window.location='dashboard-manage-applications.php'</script>";
//             }
//         }
//     }

// }else{
//     echo "<script>window.location='dashboard-manage-applications.php'</script>";
// }








// I removed every that has to do with client in this code to see if passing client ID is Neccessary

if (isset($_GET['applicant']) && isset($_GET['job']) && isset($_GET['token'])) {

    $applicant = $_GET['applicant'];
    $job = $_GET['job'];
    $token = $_GET['token'];

    $Q = "SELECT * FROM postjob WHERE postJobID = '$job' AND postJobToken = '$token'";
    //echo "<script>alert('".$job."and ".$token."')</script>";
    $runQ = mysqli_query($dbc, $Q);

    // echo "<script>alert('I am here')</script>";
    
    if(mysqli_num_rows($runQ) > 0){
        $UpdateQ = "UPDATE postJob SET postJobStatus = 'Active', postJobActiveDate = now() WHERE postJobID = '$job' AND postJobToken = '$token'";
        $runUpdateQ = mysqli_query($dbc, $UpdateQ);

        if($runUpdateQ){
            $UpdateAppQ = "UPDATE appjob SET appStatus = 'Active', activeJobDate = now() WHERE appPostJobID = '$job' AND appArtisanID = '$applicant'";
            $runUpdateAppQ = mysqli_query($dbc, $UpdateAppQ);

            if($runUpdateAppQ){
                echo "<script>alert('You have Successfully Employed this Artisan for the Job')</script>";
                echo "<script>window.location='dashboard-manage-applications.php'</script>";
            }
        }
    }

}else{
    echo "<script>window.location='dashboard-manage-applications.php'</script>";
}

?>
