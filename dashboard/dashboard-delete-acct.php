<?php
include_once('include/head.php');

$del_acct = "DELETE from art_reg_tbl WHERE userID=$session_id";
$result = mysqli_query($dbc, $del_acct);
if($result){
    echo "<script>alert('Your Account has been deleted Successfully');</script>";
    echo "<script>window.location='logout.php'</script>";
}else{
    echo "<script>alert('The query did not complete successfully');</script>";
}   

?>
