<!DOCTYPE html>
<html>

<head>
  <?php include 'head.php' ?>
</head>

<body class="sidebar-mini fixed">
  <div class="wrapper">
    <!-- Navbar-->

    <header class="main-header hidden-print"><a href="./" class="logo">Fundsgrowth</a>
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
        <!-- Navbar Right Menu-->

      </nav>
    </header>


    <?php

    /*$query = "SELECT * from withdraw WHERE user_id = '$session_id'" or die(mysqli_error($conn));
	  $result= mysqli_query($conn,$query);
	  $row = mysqli_fetch_array($result);
*/
    $sql = mysqli_query($con, "SELECT * FROM withdraw WHERE userid = '$session_id' ORDER BY id DESC LIMIT 1");

    $last_id = mysqli_fetch_row($sql);

    $status = $last_id[7];
    ?>


    <!-- Side-Nav-->
    <?php include 'sidenav.php' ?>

    <div class="content-wrapper" style="margin-top:-10px;">
      <div class="page-title">
        <div>
          <h1><i class="fa fa-archive"></i> Make Withdrawals From CH Wallet</h1>
        </div>
        <div>
          <ul class="breadcrumb">
            <li><i class="fa fa-home fa-lg"></i></li>
            <li><a href="user_dashboard.php?p=dashboard">Dashboard</a></li>
          </ul>
        </div>
      </div>



      <?php require 'top.php' ?>

      <div class="row card">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
          <div class='panel panel-primary ch'>
            <div class='panel-heading' id="demo" style="background-color:#b07200; color:#fff;">
              <h4 style="color:#fff;">Withdraw Funds</h4>
            </div><br />
            <div class='panel-body'>
              <div class="card-body">
                <div class="">

                  <div class="row">
                    <div class="col-md-12">
                      <form class="bs-component" action="" method="POST">
                        <div class="form-group">
                          <label class="control-label" for="focusedInput">Charges on Withdrawal</label>
                          <input class="form-control" type="text" value="<?php echo "$0.00"; ?>" disabled>
                        </div>
                        <div class="form-group">
                          <label class="control-label" for="focusedInput">Destination BTC Wallet Address</label>
                          <input class="form-control" id="focusedInput" type="text" placeholder="wallet" name="wallet" value="<?php echo $btc_address ?>" required>

                          <input class="form-control" id="focusedInput" type="hidden" placeholder="Withdrawal Method" name="payment_method" value="BTC" required>
                        </div>

                        <!-- <div class="form-group">
                          <label class="control-label" for="focusedInput">Destination Ethereum Wallet Address</label>
                          <input class="form-control" id="focusedInput" type="text" placeholder="wallet" name="wallet" value="<?php echo $btc_address ?>" required>

                          <input class="form-control" id="focusedInput" type="hidden" placeholder="Withdrawal Method" name="payment_method" value="BTC" required>
                        </div> -->




                        <div class="form-group">
                          <label class="control-label" for="focusedInput">Withdrawal Amount ( $ )</label>
                          <div class="input-group col-sm-12">
                            <span class="input-group-addon">
                              <span class="arrow"></span>
                              $
                            </span>
                            <input class="form-control" id="focusedInput" type="number" placeholder="Enter Withdraw Amount" name="amount" required>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="control-label" for="focusedInput">Password</label>
                          <input class="form-control" id="focusedInput" type="password" name="password" placeholder="Enter Your Password" required>
                        </div>
                        <div class="card-footer">
                          <div class="row">
                            <div class="form-group">
                              <div class="col-lg-10 col-lg-offset-2">
                                <p><?php if ($balance <= 0.00) {
                                      # code...
                                    ?>
                                <div style="font-size: 25px; color: red;">
                                  <?php echo "You have no funds to withdraw." ?>
                                </div>

                              <?php
                                    } elseif ($status == "Pending") {
                                      # code...
                              ?>
                                <div style="font-size: 19px;">
                                  <label class='control-label' for='focusedInput'>Please kindly wait while your withdrawal is processing! &nbsp; <i class="fa fa-spinner fa-spin" style="font-size: 24px"></i></label>
                                </div>
                              <?php
                                    } elseif ($balance <= 100) {
                                      # code...
                              ?>
                                <div style="font-size: 25px; color: red;">
                                  <?php
                                      echo "Your current balance is too low for withdrawal!" ?>&nbsp;
                                </div>
                              <?php
                                    } else {
                              ?>
                                <button class="btn btn-primary btn-lg" type="submit" name="withdraw" style='width:200px;'>WITHDRAW FUND</button>
                              <?php } ?>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>

                  <?php

                  if (isset($_POST['withdraw'])) { //checks if the name of the button is save

                    $password = $_POST['password'];

                    $query = "SELECT userID, firstName, lastName, email, password, profileImage FROM user WHERE email=?";
                    $q = mysqli_stmt_init($con);
                    mysqli_stmt_prepare($q, $query);

                    // bind parameter
                    mysqli_stmt_bind_param($q, 's', $email);
                    //execute query
                    mysqli_stmt_execute($q);

                    $result = mysqli_stmt_get_result($q);

                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if (!password_verify($password, $row['password'])) {
                      # code...
                      echo '<script>alert("Incorrect Password")</script>';
                      exit();
                    } elseif ($status == "Pending") {
                      # code...
                      echo "<script>alert('You have already a Pending withdrawal')</script>";
                      exit();
                    }

                    $btcacct = $_POST['wallet'];     //checks the password textfield
                    $amount = $_POST['amount'];
                    $payment_method = $_POST['payment_method'];
                    // $pm/btc_method = $_POST['pm/btc_method']; 
                    $status = "Pending";

                    if ($amount <= 0 or empty($amount)) {
                      # code...
                      echo "<script>alert('Provided amount too low')</script>";
                      echo '<pAmount too low</p>';
                      exit();
                    }

                    if ($amount > $balance) {
                      # code...
                      echo "<script>alert('Insufficient balance')</script>";
                      echo '<p style="color:red;">Insufficient balance</p>';
                      exit();
                    }
                    $order_numb = rand(1000000, 9999999);

                    date_default_timezone_set("Africa/Lagos");
                    // $date = date("h:i:sa l d-m-Y");
                    $date = date("Y-m-d h:i:sa");

                    //Query the database
                    $query = "INSERT INTO withdraw (userid, email, amount_withdrawn, withdrawal_date, payment_method, btcacct, status, order_numb) VALUES ('$session_id ','$email','$amount','$date','$payment_method','$btcacct','$status','$order_numb')" or die(mysqli_error($con));
                    $result = mysqli_query($con, $query);
                    if ($result) {

                      $querys = "UPDATE user SET btc_address = '$btcacct'  WHERE id = '$session_id' ";

                      $results = mysqli_query($con, $querys);

                      $querys = "SELECT * from withdraw WHERE userid = '$session_id'" or die(mysqli_error($con));
                      $results = mysqli_query($con, $querys);
                      $row = mysqli_fetch_array($results);
                      $track_id = $row['id'];


                      $type = "Withdraw";
                      $transaction = "Withdrawal via " . $payment_method . ' ' . $btcacct;
                      $queryh = "INSERT INTO x_transactions (track_id, userid, email, type, transaction, amount, trans_date, order_numb, status) VALUES ('$track_id','$session_id ','$email',' $type','$transaction', '$amount','$date','$order_numb','$status')" or die(mysqli_error($con));
                      $resulth = mysqli_query($con, $queryh);

                      //Create the email and send the message

                      echo '<script>alert("Request submitted successfully.")</script>';
                      echo '<script>window.location="withdraw.php"</script>';
                    } else {
                      echo '<p>Account Failed </p>';
                      echo "<script>alert('Error Occured')</script>";
                    }
                  }


                  ?>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-1">
        </div>
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