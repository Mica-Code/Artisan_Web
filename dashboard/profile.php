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




    <!-- Side-Nav-->
    <?php include 'sidenav.php' ?>





    <div class="content-wrapper" style="margin-top:-10px;">
      <div class="page-title">
        <div>
          <h1><i class="fa fa-user"></i> Profile</h1>
        </div>
        <div>
          <ul class="breadcrumb">
            <li><i class="fa fa-home fa-lg"></i></li>
            <li><a href="./">Dashboard</a></li>
          </ul>
        </div>
      </div>

      <?php require 'top.php' ?>
      
      <div class="row user">
        <!-- <div class="col-md-12">
          <div class="profile">
            <div class="info"><img src="../register/<?php echo $profileImage; ?>" width=40%">
              <h4 style="color:#fff;">brainbag</h4>
            </div>
            <div class="cover-image"></div>
          </div>
        </div> -->

        <?php
        $set1 = "";
        $set2 = "";
        ?>
        <script>
          function change2(name) {
            // if (document.getElementById("two").checked == true) {


            // } else if (document.getElementById("one").checked == true) {
            // console.log("Choice: ", name);
            document.getElementById("regular_address").style.display = "unset";
            document.getElementById("different_address").style.display = "none";
            // document.getElementById("multiple-variable-equations").checked = true;
            // document.getElementById("one-variable-equations").checked = false;
            // }
            <?php
            $set1 = "";
            $set2 = "active";
            ?>
          }
        </script>

        <script>
          function change1(name) {
            // if (document.getElementById("two").checked == true) {
            // console.log("Choice: ", name);
            document.getElementById("regular_address").style.display = "none";
            document.getElementById("different_address").style.display = "unset";
            //  document.getElementById("multiple-variable-equations").checked = false;
            // document.getElementById("one-variable-equations").checked = true;

            <?php
            $set1 = "active";
            $set2 = "";
            ?>

          }
        </script>


        <div class="col-md-3">
          <div class="card tab-content p-4">
            <ul class="nav nav-tabs nav-stacked user-tabs">
              <div class="info text-center"><img src="../register/<?php echo $profileImage; ?>" width="100px">
                <h4 style=>Profile</h4>
              </div>
              <li class="<?php echo $set1 ?>"><a href="#user-timeline" data-toggle="tab" name="address" id="two" onclick="change1(name)">My Details</a></li>
              <li class="<?php echo $set2 ?>"><a href="#user-timeline" data-toggle="tab" name="address" id="one" onclick="change2(name)">Edit Profile</a></li>
            </ul>
          </div>
        </div>




        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane active" id="different_address" style="display: unset;">
              <div class="timeline">
                <div class="post">
                  <div class="post-content">
                    <label>First name</label>
                    <input class="form-control" type="text" value="<?php echo $fname ?>" disabled>
                    <br>
                    <label>Last name</label>
                    <input class="form-control" type="text" value="<?php echo $lname ?>" disabled>
                    <br>
                    <label>Email Address</label>
                    <input class="form-control" type="text" value="<?php echo $email ?>" disabled><br>
                    <label>Phone Number</label>
                    <input class="form-control" type="text" value="<?php echo $phone ?>" disabled><br>
                    <label>Registration Date</label>
                    <input class="form-control" type="text" value="<?php echo $registerDate ?>" disabled><br>
                    <label>BTC Address</label>
                    <input class="form-control" type="text" value="<?php echo $btc_address ?>" disabled><br>
                    <!-- <label>Upline</label>
                    <input class="form-control" type="text" value="none" disabled><br> -->
                  </div>

                </div>

              </div>
            </div>
            <div id="regular_address" style="display:none;">
              <div class="card user-settings">
                <h4 class="line-head p-4">Edit Profile</h4>
                <form method="POST" action="">
                  <div class="mb-20 post-content">
                    <label>First name</label>
                    <input class="form-control" type="text" name="first_name" value="<?php echo $fname ?>">
                    <br>
                    <label>Last name</label>
                    <input class="form-control" type="text" name="last_name" value="<?php echo $lname ?>">
                    <br>
                    <label>Phone Number</label>
                    <input class="form-control" type="text" name="phone" value="<?php echo $phone ?>"><br>
                    <label>BTC Address</label>
                    <input class="form-control" type="text" name="btc_address" value="<?php echo $btc_address ?>"><br>
                  </div>
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-primary" type="submit" name="edit_profile"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                    </div>
                  </div>

                  <?php
                  if (isset($_POST['edit_profile'])) {

                    $first_name = $_POST['first_name'];
                    $last_name = $_POST['last_name'];
                    $phone = $_POST['phone'];
                    $btc_address = $_POST['btc_address'];


                    $query = "UPDATE user SET firstName='$first_name', lastName='$last_name', phone='$phone', btc_address='$btc_address' WHERE userID = '$session_id'" or die(mysqli_error($con));
                    $result = mysqli_query($con, $query);
                    if ($result) {
                      echo '<script>alert("Account Updated Successfully")</script>';
                      echo '<script>window.location="profile.php"</script>';
                    } else {
                      echo '<script>alert("Account Failed to Update. An error occured while trying to Update Account")</script>';
                      echo mysqli_error($con);
                    }
                  }

                  ?>
                </form>

                <h4 class="line-head p-4" style="margin-top: 80px;">Change Password</h4>
                <form method="POST" action="">
                  <div class="mb-20 post-content">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password">
                    <br>
                    <label>New Password</label>
                    <input class="form-control" type="password" name="new_password">
                    <br>
                    <label>Confirm New Password</label>
                    <input class="form-control" type="password" name="c_new_password"><br>

                  </div>
                  <div class="row mb-10">
                    <div class="col-md-12">
                      <button class="btn btn-primary" type="submit" name="edit_password"><i class="fa fa-fw fa-lg fa-check-circle"></i> Change</button>
                    </div>
                  </div>


                  <?php
                  if (isset($_POST['edit_password'])) {

                    $cpassword = $_POST['password'];
                    $npassword = $_POST['new_password'];
                    $rnpassword = $_POST['c_new_password'];

                    $query = "SELECT userID, firstName, lastName, email, password, profileImage FROM user WHERE email=?";
                    $q = mysqli_stmt_init($con);
                    mysqli_stmt_prepare($q, $query);

                    // bind parameter
                    mysqli_stmt_bind_param($q, 's', $email);
                    //execute query
                    mysqli_stmt_execute($q);

                    $result = mysqli_stmt_get_result($q);

                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if (!password_verify($cpassword, $row['password'])) {
                      # code...
                      echo '<script>alert("Current password incorrect")</script>';
                      exit();
                    } elseif ($npassword <> $rnpassword) {
                      # code...
                      $r = $row['password'];
                      echo '<script>alert("New password not matched")</script>';
                      exit();
                    } else {

                      $hashed_pass = password_hash($npassword, PASSWORD_DEFAULT);

                      $query = "UPDATE user SET password='$hashed_pass' WHERE userID = '$session_id'" or die(mysqli_error($con));
                      $result = mysqli_query($con, $query);
                      if ($result) {

                        echo '<script>alert("Password Changed Successfully")</script>';
                        echo '<script>window.location="profile.php"</script>';
                      } else {
                        echo '<script>alert("Account Failed to Update. An error occured while trying to Update Account")</script>';
                      }
                    }
                  }
                  ?>
                </form>
              </div>
            </div>
          </div>
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