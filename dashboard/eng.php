<?php 

$profit = 0.00;
$tdy = date("d-m-Y");
$actv = "";
$style = "";
$query = "SELECT * from user WHERE userID = '$session_id'";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

$balance = $row['balance'];


$query = "SELECT * from deposit WHERE userid = '$session_id' Order by id DESC";

$run = mysqli_query($con, $query);

$bal = 0.00;
$remaining_day = 0;

while ($row = mysqli_fetch_array($run)) {

   if ($row['status'] == 'Active') {

      $id = $row['id'];

      $trans_date = $row['trans_date'];

      $percent =  $row['percent'];
      $day =  $row['after_days'];
      $amount =  $row['invest_amount'];


      if (($row['plan'] == 'starter-investment') || ($row['plan'] == 'standard-investment')) {

         $now = time();
         $your_d = strtotime($trans_date); //starting date "2020-09-03 19:54:10"
         $datediff = floor(($now - $your_d) / (60 * 60));

         if ($datediff <= 24) {
            // echo $datediff ." - ";
            $profit = ($amount * $percent) / 100;
            // echo $profit;
            $per_profit = $profit / 24;

            $bal = $amount + ($per_profit * $datediff);

            $actv = "fa-spin";
            $style = "style='background:none'";
            $remaining_day = 24 - $datediff;
            $remaining_day .= "hour(s)";
            if ($datediff == 24) {
               $remaining_day = "Few hours";
            }
         } else {
            $profit = ($amount * $percent) / 100;

            $bal = $amount + $profit;
            $status = 'Completed';

            $query = "UPDATE deposit SET status = '$status' WHERE id = '$id'";
            $result = mysqli_query($con, $query);

            $addtobal = $balance + $bal;

            $querys = "UPDATE user SET balance = '$addtobal' WHERE userID = '$session_id'";
            $results = mysqli_query($con, $querys);

            

            $query = "UPDATE x_transactions SET status = '$status' WHERE track_id = '$id'";
            $result = mysqli_query($con, $query);

         }
      } else {
         // $trans_date = "2020-11-06 04:40:11";
         $now = time();
         $your_d = strtotime($trans_date); //starting date "2020-09-02"
         $datediff = floor(($now - $your_d) / (60 * 60 * 24));
         if ($datediff <= $day) {
            //  echo $datediff.' now: '.$now. ' yurd: ' . $your_d;
            $profit = ($amount * $percent) / 100;

            $per_profit = $profit / $day;
            // $bal = $per_profit * $datediff;

            $bal = $amount + ($per_profit * $datediff);
            
            $actv = "fa-spin";
            $style = "style='background:none'";
            $remaining_day = $day - $datediff;
            $remaining_day .="day(s)";
            if ($datediff == 7){
               $remaining_day = "Few hours";
            }
            // echo " bal: ". $bal;
         } else {

            $profit = ($amount * $percent) / 100;

            $bal = $amount + $profit;
            $status = 'Completed';

            // echo $bal;


            $query = "UPDATE deposit SET status = '$status' WHERE id = '$id'";
            $result = mysqli_query($con, $query);

            $addtobal = $balance + $bal;

            $querys = "UPDATE user SET balance = '$addtobal' WHERE userID = '$session_id'";
            $results = mysqli_query($con, $querys);


            

            $query = "UPDATE x_transactions SET status = '$status' WHERE track_id = '$id'";
            $result = mysqli_query($con, $query);

         }
      }

   }
}


?>
