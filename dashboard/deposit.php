<?php

if (empty($_GET['action'])) {
?>
   <script>
      window.location = "invest.php";
   </script>
<?php
} else {
   $plan = $_GET['action'];
}
?>


<!DOCTYPE html>
<html>

<head>
   <?php include 'head.php' ?>
</head>

<?php
$msg = '';



//////////////////////////////////////////////////////////////////////////////////////////////////////////
//Bitcoin//
//////////////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_POST['deposit_btc'])) {
   $amount = $_POST['amount'];
   $method = "Bitcoin";
   $status = "Pending";
   $type = "Deposit";





   if (($plan == "starter-investment") && (($amount < 50) || ($amount > 1000))) {
      $msg = "<p style ='color:red;'><b>Minimum Amount:</b> $50</p><p style ='color:red;'><b>Maximum Amount:</b> $1000</p>";
   } else if (($plan == "standard-investment") && (($amount < 500) || ($amount > 2500))) {
      $msg = "<p style ='color:red;'><b>Minimum Amount:</b> $500</p><p style ='color:red;'><b>Maximum Amount:</b> $2,500</p>";
   } else if (($plan == "advance-investment") && (($amount < 1000) || ($amount > 5000))) {
      $msg = "<p style ='color:red;'><b>Minimum Amount:</b> $1,000</p><p style ='color:red;'><b>Maximum Amount:</b> $5,000</p>";
   } else if (($plan == "premium-investment") && (($amount < 2000) || ($amount > 10000))) {
      $msg = "<p style ='color:red;'><b>Minimum Amount:</b> $2,000</p><p style ='color:red;'><b>Maximum Amount:</b> $10,000</p>";
   } else if (($plan == "vip-investment") && ($amount < 5000)) {
      $msg = "<p style ='color:red;'><b>Minimum Amount:</b> $5,000</p>";
   } else {

      date_default_timezone_set("Africa/Lagos");
      $date = date("Y-m-d h:i:sa");

      if ($plan == "starter-investment") {
         # code...
         $percent = 7;
         $day = "1";
         $transaction = "Deposit via " . $method . " Starter Investment Plan for a period of 24 hours";

         $profit = ($amount * $percent) / 100;
      }

      if ($plan == "standard-investment") {
         # code...
         $percent = 10;
         $day = "1";
         $transaction = "Deposit via " . $method . " Standard Investment Plan for a period of " . $day . " day(s)";

         $profit = ($amount * $percent) / 100;
      }

      if ($plan == "advance-investment") {
         # code...
         $percent = 15;
         $day = "2";
         $transaction = "Deposit via " . $method . " Advance Investment Plan for a period of " . $day . " day(s)";

         $profit = ($amount * $percent) / 100;
      }

      if ($plan == "premium-investment") {
         # code...
         $percent = 25;
         $day = "2";
         $transaction = "Deposit via " . $method . " Premium Investment Plan for a period of " . $day . " day(s)";

         $profit = ($amount * $percent) / 100;
      }

      if ($plan == "vip-investment") {
         # code...
         $percent = 35;
         $day = "3";
         $transaction = "Deposit via " . $method . " VIP Investment Plan for a period of " . $day . " day(s)";

         $profit = ($amount * $percent) / 100;
      }


      $count_d = 0;
      $query = "SELECT * from deposit WHERE userid = '$session_id' ORDER BY id DESC" or die(mysqli_error($con));
      $run = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($run)) {
         if ($row['status'] == "Pending") {
            $count_d++;
         }
      }



      $order_numb = rand(1000000, 9999999);

      //Query the database
      if ($count_d < 1) {

         $query = "INSERT INTO deposit (userid, email, invest_amount, trans_date, payment_method, plan, percent, after_days, pay_profit,status,order_numb) VALUES ('$session_id','$email','$amount',now(),'$method','$plan','$percent','$day','$profit','$status','$order_numb')" or die(mysqli_error($con));
         $result = mysqli_query($con, $query);

         if ($result) {
            $query = "SELECT * from deposit WHERE userid = $session_id ORDER BY id DESC";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_array($result);
            $track_id = $row['id'];

            $queryh = "INSERT INTO x_transactions (track_id, userid, email, type, transaction, amount, trans_date, order_numb, status) VALUES ('$track_id','$session_id ','$email',' $type','$transaction', '$amount',now(),'$order_numb','$status')" or die(mysqli_error($con));
            $resulth = mysqli_query($con, $queryh);
         }
      } else {
         $query = "SELECT * from deposit WHERE userid = $session_id ORDER BY id DESC";
         $result = mysqli_query($con, $query);
         $row = mysqli_fetch_array($result);
         $db_id = $row['id'];

         $querys = "UPDATE deposit SET userid = '$session_id', email = '$email', invest_amount = '$amount', trans_date = now(), payment_method = '$method', plan = '$plan', percent = '$percent', after_days = '$day', pay_profit = '$profit', status = '$status', order_numb = '$order_numb' WHERE id = '$db_id'";
         $results = mysqli_query($con, $querys);

         if ($results) {

            $queryh = "UPDATE x_transactions SET amount = '$amount', type = '$type', transaction = '$transaction', trans_date = now(), status = '$status', order_numb = '$order_numb' WHERE track_id = '$db_id'";
            $resulth = mysqli_query($con, $queryh);
         }
      }

?>
      <script>
         window.location = "btc.php";
      </script>
   <?php
   }
}




//////////////////////////////////////////////////////////////////////////////////////////////////////////
//Etherium//
//////////////////////////////////////////////////////////////////////////////////////////////////////////



if (isset($_POST['deposit_ether'])) {
   $amount = $_POST['amount'];
   $method = "Ethereum";
   $status = "Pending";
   $type = "Deposit";




   if (($plan == "starter-investment") && (($amount < 50) || ($amount > 1000))) {
      $msg = "<p style ='color:red;'><b>Minimum Amount:</b> $50</p><p style ='color:red;'><b>Maximum Amount:</b> $1000</p>";
   } else if (($plan == "standard-investment") && (($amount < 500) || ($amount > 2500))) {
      $msg = "<p style ='color:red;'><b>Minimum Amount:</b> $500</p><p style ='color:red;'><b>Maximum Amount:</b> $2,500</p>";
   } else if (($plan == "advance-investment") && (($amount < 1000) || ($amount > 5000))) {
      $msg = "<p style ='color:red;'><b>Minimum Amount:</b> $1,000</p><p style ='color:red;'><b>Maximum Amount:</b> $5,000</p>";
   } else if (($plan == "premium-investment") && (($amount < 2000) || ($amount > 10000))) {
      $msg = "<p style ='color:red;'><b>Minimum Amount:</b> $2,000</p><p style ='color:red;'><b>Maximum Amount:</b> $10,000</p>";
   } else if (($plan == "vip-investment") && ($amount < 5000)) {
      $msg = "<p style ='color:red;'><b>Minimum Amount:</b> $5,000</p>";
   } else {

      date_default_timezone_set("Africa/Lagos");
      $date = date("Y-m-d h:i:sa");

      if ($plan == "starter-investment") {
         # code...
         $percent = 7;
         $day = "1";
         $transaction = "Deposit via " . $method . " Starter Investment Plan for a period of 24 hours";

         $profit = ($amount * $percent) / 100;
      }

      if ($plan == "standard-investment") {
         # code...
         $percent = 10;
         $day = "1";
         $transaction = "Deposit via " . $method . " Standard Investment Plan for a period of 24 hours";

         $profit = ($amount * $percent) / 100;
      }

      if ($plan == "advance-investment") {
         # code...
         $percent = 15;
         $day = "2";
         $transaction = "Deposit via " . $method . " Advance Investment Plan for a period of " . $day . " day(s)";

         $profit = ($amount * $percent) / 100;
      }

      if ($plan == "premium-investment") {
         # code...
         $percent = 25;
         $day = "2";
         $transaction = "Deposit via " . $method . " Premium Investment Plan for a period of " . $day . " day(s)";

         $profit = ($amount * $percent) / 100;
      }

      if ($plan == "vip-investment") {
         # code...
         $percent = 35;
         $day = "3";
         $transaction = "Deposit via " . $method . " VIP Investment Plan for a period of " . $day . " day(s)";

         $profit = ($amount * $percent) / 100;
      }


      $count_d = 0;
      $query = "SELECT * from deposit WHERE userid = '$session_id' ORDER BY id DESC" or die(mysqli_error($con));
      $run = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($run)) {
         if ($row['status'] == "Pending") {
            $count_d++;
         }
      }



      $order_numb = rand(1000000, 9999999);

      //Query the database
      if ($count_d < 1) {

         $query = "INSERT INTO deposit (userid, email, invest_amount, trans_date, payment_method, plan, percent, after_days, pay_profit,status,order_numb) VALUES ('$session_id','$email','$amount',now(),'$method','$plan','$percent','$day','$profit','$status','$order_numb')" or die(mysqli_error($con));
         $result = mysqli_query($con, $query);

         if ($result) {
            $query = "SELECT * from deposit WHERE userid = $session_id ORDER BY id DESC";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_array($result);
            $track_id = $row['id'];

            $queryh = "INSERT INTO x_transactions (track_id, userid, email, type, transaction, amount, trans_date, order_numb, status) VALUES ('$track_id','$session_id ','$email',' $type','$transaction', '$amount',now(),'$order_numb','$status')" or die(mysqli_error($con));
            $resulth = mysqli_query($con, $queryh);
         }
      } else {
         $query = "SELECT * from deposit WHERE userid = $session_id ORDER BY id DESC";
         $result = mysqli_query($con, $query);
         $row = mysqli_fetch_array($result);
         $db_id = $row['id'];

         $querys = "UPDATE deposit SET userid = '$session_id', email = '$email', invest_amount = '$amount', trans_date = now(), payment_method = '$method', plan = '$plan', percent = '$percent', after_days = '$day', pay_profit = '$profit', status = '$status', order_numb = '$order_numb' WHERE id = '$db_id'";
         $results = mysqli_query($con, $querys);

         if ($results) {

            $queryh = "UPDATE x_transactions SET amount = '$amount', type = '$type', transaction = '$transaction', trans_date = now(), status = '$status', order_numb = '$order_numb' WHERE track_id = '$db_id'";
            $resulth = mysqli_query($con, $queryh);
         }
      }

   ?>
      <script>
         window.location = "ether.php";
      </script>
   <?php
   }
}







//////////////////////////////////////////////////////////////////////////////////////////////////////////
//PayPal//
//////////////////////////////////////////////////////////////////////////////////////////////////////////



if (isset($_POST['deposit_paypal'])) {
   //    $amount = $_POST['amount'];
   //    $method = "PayPal";
   //    $status = "Pending";
   //    $type = "Deposit";




   //    if (($plan == "starter-investment") && (($amount < 100) || ($amount > 999))) {
   //       $msg = "<p style ='color:red;'><b>Minimum Amount:</b> $100</p><p style ='color:red;'><b>Maximum Amount:</b> $999</p>";
   //    } else if (($plan == "premium-investment") && (($amount < 1000) || ($amount > 10000))) {
   //       $msg = "<p style ='color:red;'><b>Minimum Amount:</b> $1,000</p><p style ='color:red;'><b>Maximum Amount:</b> $10,000</p>";
   //    } else if (($plan == "vip-investment") && (($amount < 10000) || ($amount > 100000))) {
   //       $msg = "<p style ='color:red;'><b>Minimum Amount:</b> $10,000</p><p style ='color:red;'><b>Maximum Amount:</b> $100,000</p>";
   //    } else {

   //       date_default_timezone_set("Africa/Lagos");
   //       $date = date("Y-m-d h:i:sa");

   //       if ($plan == "starter-investment") {
   //          # code...
   //          $percent = 15;
   //          $day = "1";
   //          $transaction = "Deposit via " . $method . " Method for Starter Investment Plan for a period of 24 hours";

   //          $profit = ($amount * $percent) / 100;
   //       }

   //       if ($plan == "premium-investment") {
   //          # code...
   //          $percent = 35;
   //          $day = "3";
   //          $transaction = "Deposit via " . $method . " Method for Premium Investment Plan for a period of " . $day . " day(s)";

   //          $profit = ($amount * $percent) / 100;
   //       }

   //       if ($plan == "vip-investment") {
   //          # code...
   //          $percent = 50;
   //          $day = "7";
   //          $transaction = "Deposit via " . $method . " Method for VIP Investment Plan for a period of " . $day . " day(s)";

   //          $profit = ($amount * $percent) / 100;
   //       }


   //       $count_d = 0;
   //       $query = "SELECT * from deposit WHERE userid = '$session_id' ORDER BY id DESC" or die(mysqli_error($con));
   //       $run = mysqli_query($con, $query);
   //       while ($row = mysqli_fetch_array($run)) {
   //          if ($row['status'] == "Pending") {
   //             $count_d++;
   //          }
   //       }



   //       $order_numb = rand(1000000, 9999999);

   //       //Query the database
   //       if ($count_d < 1) {

   //          $query = "INSERT INTO deposit (userid, email, invest_amount, trans_date, payment_method, plan, percent, after_days, pay_profit,status,order_numb) VALUES ('$session_id','$email','$amount',now(),'$method','$plan','$percent','$day','$profit','$status','$order_numb')" or die(mysqli_error($con));
   //          $result = mysqli_query($con, $query);

   //          if ($result) {
   //             $query = "SELECT * from deposit WHERE userid = $session_id ORDER BY id DESC";
   //             $result = mysqli_query($con, $query);
   //             $row = mysqli_fetch_array($result);
   //             $track_id = $row['id'];

   //             $queryh = "INSERT INTO x_transactions (track_id, userid, email, type, transaction, amount, trans_date, order_numb, status) VALUES ('$track_id','$session_id ','$email',' $type','$transaction', '$amount',now(),'$order_numb','$status')" or die(mysqli_error($con));
   //             $resulth = mysqli_query($con, $queryh);
   //          }
   //       } else {
   //          $query = "SELECT * from deposit WHERE userid = $session_id ORDER BY id DESC";
   //          $result = mysqli_query($con, $query);
   //          $row = mysqli_fetch_array($result);
   //          $db_id = $row['id'];

   //          $querys = "UPDATE deposit SET userid = '$session_id', email = '$email', invest_amount = '$amount', trans_date = now(), payment_method = '$method', plan = '$plan', percent = '$percent', after_days = '$day', pay_profit = '$profit', status = '$status', order_numb = '$order_numb' WHERE id = '$db_id'";
   //          $results = mysqli_query($con, $querys);

   //          if ($results) {

   //             $queryh = "UPDATE x_transactions SET amount = '$amount', type = '$type', transaction = '$transaction', trans_date = now(), status = '$status', order_numb = '$order_numb' WHERE track_id = '$db_id'";
   //             $resulth = mysqli_query($con, $queryh);
   //          }
   //       }

   //    
   ?>
   <script>
      //          window.location = "paypal.php";
   </script>
   <?php
   //    }
   ?>
   <script>
      alert("Sorry!! Paypal Unavailable... Try again later");
   </script>
<?php
}

?>















<body class="sidebar-mini fixed">
   <div class="wrapper">
      <!-- Navbar-->

      <header class="main-header hidden-print"><a href="./" class="logo">Fundsgrowth</a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
            <!-- Navbar Right Menu-->

         </nav>
      </header>




      <!-- Side-Nav-->
      <?php include 'sidenav.php' ?>





      <div class="content-wrapper" style="margin-top:-10px;">
         <div class="page-title">
            <div>
               <h1><i class="fa fa-download  "></i> Deposit Platform</h1>
            </div>
            <div>
               <ul class="breadcrumb">
                  <li><i class="fa fa-home fa-lg"></i></li>
                  <li><a href="user_dashboard.php?p=dashboard">Dashboard</a></li>
               </ul>
            </div>
         </div>
         <div class="row card">
            <div class="col-md-3">
            </div>
            <?php
            if ($_GET['action'] == "starter-investment") { ?>
               <div class="col-md-6 card">
                  <h3><i class="fa fa-cube"></i> STARTER INVESTMENT PLAN:</h3>
                  <hr>
                  <p class="text-justify">Get <strong>0.625%</strong> return every hour, for 24 Hours + capital as profit</p>
                  <h5>Minimum Amount: $50</h5>
                  <h5>Maximum Amount: $1000</h5>
                  <hr>
                  <h6>Through fundsgrowth' Financial Services can help you take control of your Finances.</h6>
                  <h6 class="bold no-mb"><i class="fa fa-check-circle-o complete f-s-14"></i> Terms and Condidtions Apply.</h6>
               </div>
            <?php } elseif ($_GET['action'] == "standard-investment") { ?>
               <div class="col-md-6 card">
                  <h4><i class="fa fa-cube"></i> STANDARD INVESTMENT PLAN:</h4>
                  <hr>
                  <p class="text-justify">Get <strong>0.417%</strong> return every hour, for 24 Hours + capital as profit</p>
                  <h5>Minimum Amount: $500</h5>
                  <h5>Maximum Amount: $2,500</h5>
                  <hr>
                  <h6>Through fundsgrowth' Financial Services can help you take control of your Finances.</h6>
                  <h6 class="bold no-mb"><i class="fa fa-check-circle-o complete f-s-14"></i> Terms and Condidtions Apply.</h6>
               </div>
            <?php } elseif ($_GET['action'] == "advance-investment") { ?>
               <div class="col-md-6 card">
                  <h4><i class="fa fa-cube"></i> ADVANCE INVESTMENT PLAN:</h4>
                  <hr>
                  <p class="text-justify">Get <strong>0.5%</strong> return every hour, for 30 Hours + capital as profit</p>
                  <h5>Minimum Amount: $1,000</h5>
                  <h5>Maximum Amount: $5,000</h5>
                  <hr>
                  <h6>Through fundsgrowth' Financial Services can help you take control of your Finances.</h6>
                  <h6 class="bold no-mb"><i class="fa fa-check-circle-o complete f-s-14"></i> Terms and Condidtions Apply.</h6>
               </div>
            <?php } elseif ($_GET['action'] == "premium-investment") { ?>
               <div class="col-md-6 card">
                  <h4><i class="fa fa-cube"></i> PREMIUM INVESTMENT PLAN:</h4>
                  <hr>
                  <p class="text-justify">Get <strong>1.92%</strong> return every day, for 2 Days + capital as profit</p>
                  <h5>Minimum Amount: $2,000</h5>
                  <h5>Maximum Amount: $10,000</h5>
                  <hr>
                  <h6>Through fundsgrowth' Financial Services can help you take control of your Finances.</h6>
                  <h6 class="bold no-mb"><i class="fa fa-check-circle-o complete f-s-14"></i> Terms and Condidtions Apply.</h6>
               </div>
            <?php } elseif ($_GET['action'] == "vip-investment") { ?>
               <div class="col-md-6 card">
                  <h4><i class="fa fa-cube"></i> VIP INVESTMENT PLAN:</h4>
                  <hr>
                  <p class="text-justify">Get <strong>2.06%</strong> return every day, for 3 Days + capital as profit</p>
                  <h5>Minimum Amount: $5,000</h5>
                  <h5>Maximum Amount: Unlimited</h5>
                  <hr>
                  <h6>Through fundsgrowth' Financial Services can help you take control of your Finances.</h6>
                  <h6 class="bold no-mb"><i class="fa fa-check-circle-o complete f-s-14"></i> Terms and Condidtions Apply.</h6>
               </div>
            <?php } ?>
            <div class="col-md-3">
            </div>
            <form action="" method="POST">
               <div class='panel-body panel panel-primary ch'>
                  <section class="box has-border-left-3">
                     <div class="content-body">
                        <div class="row">
                           <div class="col-xs-12">
                              <div class="option-identity-wrapper" style="padding-left: 30px;">
                                 <div class="tab-head left15">
                                    <h3 class="bold no-mt">Enter Amount to Deposit</h3>
                                    <p>~Loans are granted to members who have made a minium investment of $1,000~</p>
                                    <div class="clearfix"></div>

                                    <div class="input-group col-sm-9">
                                       <span class="input-group-addon">
                                          <span class="arrow"></span>
                                          $
                                       </span>
                                       <input type="number" class="form-control" name="amount" placeholder="Enter Investment Amount" required>
                                    </div>
                                    <?php echo $msg; ?>
                                    <br>


                                    <h5 class="bold no-mt"><a href="https://co-w.io" target="_blank"><i class="fa fa-eye"></i> <span> CHECK CRYPTOCURRENCY LIVE VALUES</span></a></h5>



                                    <style>
                                       .btn1 {
                                          color: #fff;
                                       }

                                       .btn1:hover {
                                          background-color: #fff;
                                          color: green;
                                       }
                                    </style>
                                    <div class="col-sm-12 no-pr">
                                       <button type="submit" class="btn1 btn btn mt-30 btn-corner" style="background-color: #fff;" name="deposit_btc"><i class="fa fa-check"></i> <img src="images/btc1.png" style="width: 100px;"></button>

                                       <button type="submit" class="btn1 btn btn mt-30 btn-corner" style="background-color: #fff;" name="deposit_ether"><i class="fa fa-check"></i> <img src="images/ether1.png" style="width: 120px;"></button>

                                       <button type="submit" class="btn1 btn btn mt-30 btn-corner" style="background-color: #fff; padding: 25px 10px 25px 10px;" name="deposit_paypal"><i class="fa fa-check"></i> <img src="images/paypal1.png" style="width: 120px;"></button>
                                    </div><br><br>




                                    <br>

                                    <!-- <div class="col-sm-3 no-pr">
                                       <button type="submit" class="btn btn- mt-30 btn-corner" name="deposit_btn"><i class="fa fa-check"></i> Deposit with <img src="images/btc.png" style="width: 99px;"></button>
                                    </div> -->

                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                  </section>
               </div>
            </form>
         </div>
      </div>
   </div>





   <!-- Javascripts-->
   <script src="js/jquery-2.1.4.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/plugins/pace.min.js"></script>
   <script src="js/main.js"></script>
   <script type="text/javascript" src="js/js/plugins/jquery.dataTables.min.js"></script>
   <script type="text/javascript" src="js/js/plugins/dataTables.bootstrap.min.js"></script>
   <script type="text/javascript">
      $('#sampleTable').DataTable();
   </script>






</body>

</html>