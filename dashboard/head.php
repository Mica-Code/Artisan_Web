<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=970px">
<link rel="icon" type="image/x-icon" href="image/weltweit-logo.jpg" />
<link rel="stylesheet" type="text/css" href="css/main.css">

<link rel="stylesheet" type="text/css" href="bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Fundsgrowth| invest now to start earning big</title>

<?php
require 'session.php';
?>

<?php
$query = "SELECT * from user WHERE userID = $session_id ";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

$fname = $row['firstName'];
$lname = $row['lastName'];
$email = $row['email'];
$profileImage = $row['profileImage'];
$balance = $row['balance'];
$registerDate = $row['registerDate'];
$phone = $row['phone'];
$btc_address = $row['btc_address'];

?>
<?php
$query = "SELECT * from withdraw WHERE userid = '$session_id' ORDER BY id DESC" or die(mysqli_error($con));
$run = mysqli_query($con, $query);
$withdrawn = "0.00";
while ($row = mysqli_fetch_array($run)) {
  if ($row['status'] != "Pending") {
    $withdrawn += $row['amount_withdrawn'];
  }
}
?>

<?php
$query = "SELECT * from deposit WHERE userid = '$session_id' ORDER BY id DESC" or die(mysqli_error($con));
$run = mysqli_query($con, $query);
$act_deposit = "0.00";
$invest = "0.00";
$d_p_btc = 0;
$d_p_ether = 0;
while ($row = mysqli_fetch_array($run)) {
  if ($row['status'] != "Pending") {
    $invest += $row['invest_amount'];
  }

  if (($row['status'] == "Pending") && ($row['payment_method'] == "Bitcoin")) {
    $d_p_btc++;
  }

  if (($row['status'] == "Pending") && ($row['payment_method'] == "Ethereum")) {
    $d_p_ether++;
  }
}
?>

<?php
$query = "SELECT * from x_transactions WHERE userid = '$session_id' ORDER BY id DESC" or die(mysqli_error($con));
$run = mysqli_query($con, $query);
$act_deposit = "0.00";
while ($row = mysqli_fetch_array($run)) {

  if (($row['status'] == "Active") && ($row['type'] == "Deposit")) {
    $act_deposit += $row['amount'];
  }
}
?>


<?php
$query = "SELECT * from payment_method WHERE method = 'Bitcoin'";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

$pm_btc_address = $row['key_address'];
$pm_btc_bar_code = $row['bar_code'];
?>


<?php
$query = "SELECT * from payment_method WHERE method = 'Ethereum'";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

$pm_ether_address = $row['key_address'];
$pm_ether_bar_code = $row['bar_code'];

?>

<?php
$ref_profit = 0;

$query_ref = "SELECT * FROM ref_tbl WHERE refered_by ='$session_id'" or die(mysqli_error($con));
$run = mysqli_query($con, $query_ref);

while ($row_ref = mysqli_fetch_array($run)) {
  $ref_profit =$ref_profit + $row_ref['profit'];
}
?>
