<?php
require ('../includes/mydatabase2.php');

$headmsg = "";
$msg = "";

if (isset($_GET['vkey'])) {
   # code...
   //process verification
   $vkey = $_GET['vkey'];

   // $resultSet = mysqli_query($con, "SELECT acct_code,status FROM user WHERE acct_code = '$vkey' And status = 'Unverified' LIMIT 1"); 

   
   
  $query = "SELECT acct_code,verify FROM art_reg_tbl WHERE acct_code = '$vkey' AND verify = 0";
  
  $q = mysqli_query($dbc, $query);

    $numrow = mysqli_num_rows($q);

  $row = mysqli_fetch_array($q, MYSQLI_ASSOC);

   if (!empty($row)) {
      # code...Validate the email
      echo "<script>alert('row is actually not empty')</script>";
      $update = mysqli_query($dbc, "UPDATE art_reg_tbl SET verify = 1 WHERE acct_code = '$vkey' And verify = 0");
      if ($update) {
         # code...
         echo "<script>alert('Thank you for registering, Your account has been verified and activated, you may now login.')</script>";
            header('location: https://lekkilersa.org/Artisan_Web/Account/login.php?chk=successful');
            mysqli_close($dbc);
            exit();
      } else {
         $headmsg = "Something went wrong";
         $msg = mysqli_error($dbc);
      }
   } else {
          echo "<script>alert('This account is invalid or already verified. Try Loging in')</script>";
          header('location: https://lekkilersa.org/Artisan_Web/Account/login.php?chk=invalid');
            mysqli_close($dbc);
            exit();
   }
} else {
   die("Something went wrong");
}
?>