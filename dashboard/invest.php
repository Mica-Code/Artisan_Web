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
          <h1><i class="fa fa-archive"></i> New Investment</h1>
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
              <h4 style="color:#fff;">Select Investment Plan</h4>
            </div><br />

            <!-- <div id="investment" class="purchase text-center">
              <h1>Choose your Investment plan</h1>
              <p>
                Choose any investment plan of your choice today and start earning
              </p>
              <div class="cards">
                <div class="d-flex flex-row justify-content-center flex-wrap row">
                  <style>
                    .card-title {
                      color: #f6f6f6;
                    }
                  </style>

                  <div class="card col-md-4" style="background:#000;border-radius:5%;">
                    <div class="card-body">
                      <div class="title">
                        <h4 class="card-title" style="color: #b07200;font-weight:bold">STARTER</h4>
                      </div>

                      <h4 class="card-text" style="color: #f6f6f6;">
                        $100 - $999
                      </h4>

                      <div class="pricing">
                        <h6 class="card-title">Return 0.625%</h6>
                        <hr>
                        <h6 class="card-title"> Every Hour</h6>
                        <hr>
                        <h6 class="card-title">For 24 Hours</h6>
                        <hr>
                        <h6 class="card-title">Total 15% + <span class="badge badge-success">Capital</span></h6>
                        <hr>

                        <a href="register/register.php" class="btn btn-dark px-5 py-2 primary-btn mb-5">Invest Now</a>
                      </div>
                    </div>
                  </div>


                  <div class="card col-md-4" style="background:#000;border-radius:5%;">
                    <div class="card-body">
                      <div class="title">
                        <h4 class="card-title" style="color: #b07200;font-weight:bold">PREMIUM</h4>
                      </div>

                      <h4 class="card-text" style="color: #f6f6f6;">
                        $1,000 - $10,000
                      </h4>

                      <div class="pricing">
                        <h6 class="card-title">Return 11.667%</h6>
                        <hr>
                        <h6 class="card-title"> Every Day</h6>
                        <hr>
                        <h6 class="card-title">For 3 Days</h6>
                        <hr>
                        <h6 class="card-title">Total 35% + <span class="badge badge-success">Capital</span></h6>
                        <hr>

                        <a href="register/register.php" class="btn btn-dark px-5 py-2 primary-btn mb-5">Invest Now</a>
                      </div>
                    </div>
                  </div>




                  <div class="card col-md-4" style="background:#000;border-radius:5%;">
                    <div class="card-body">
                      <div class="title">
                        <h4 class="card-title" style="color: #b07200;font-weight:bold">VIP</h4>
                      </div>

                      <h4 class="card-text" style="color: #f6f6f6;">
                        $10,000 - $100,000
                      </h4>

                      <div class="pricing">
                        <h6 class="card-title">Return 7.143%</h6>
                        <hr>
                        <h6 class="card-title"> Every Day</h6>
                        <hr>
                        <h6 class="card-title">For 7 Days</h6>
                        <hr>
                        <h6 class="card-title">Total 50% + <span class="badge badge-success">Capital</span></h6>
                        <hr>

                        <a href="register/register.php" class="btn btn-dark px-5 py-2 primary-btn mb-5">Invest Now</a>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div> -->


            <form action="" method="POST">
              <div class='panel-body'>
                <div class="card-body">
                  <div class="">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card-title-w-btn">
                          <h3 class="title">Select Plan</h3>
                        </div>


                        <div class="card-body">
                          <!-- <h4>Plans</h4> -->
                          <select class="form-control" id="demoSelect" name="select" style="font-size: 17px;" required>
                            <!-- <optgroup> -->




                            <option disabled>-Select Plan-</option>
                            <option value="starter-investment">STARTER ($50 - $1000) Investment</option>
                            <option value="standard-investment">STANDARD ($500 - $2,500) Investment</option>
                            <option value="advance-investment">ADVANCE ($1,000 - $5,000) Investment</option>
                            <option value="premium-investment">PREMIUM ($2,000 - $10,000) Investment</option>
                            <option value="vip-investment">VIP ($5,000 - Unlimited) Investment</option>
                            <!-- </optgroup> -->

                          </select><br>
                          <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-primary btn-lg" type="submit" name="select_btn">SELECT</button>

                            <?php
                            if (isset($_POST['select_btn'])) {

                              $select = $_POST['select'];
                            ?>
                              <script>
                                window.location = "deposit.php?action=<?php echo $select; ?>";
                              </script>
                            <?php
                            }

                            ?>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-1">
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