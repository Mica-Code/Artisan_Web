<!DOCTYPE html>
<html>

<head>
  <?php include 'head.php' ?>
</head>

<body class="sidebar-mini fixed">
  <div class="wrapper">
    <!-- Navbar-->

    <header class="main-header hidden-print"><a href="index.html" class="logo">Fundsgrowth</a>
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
          <h1><i class="fa fa-archive"></i> Loan Platform</h1>
        </div>
        <div>
          <ul class="breadcrumb">
            <li><i class="fa fa-home fa-lg"></i></li>
            <li><a href="./">Dashboard</a></li>
          </ul>
        </div>
      </div>
      <div class="row card">
        <div class="col-md-3">
        </div>
        <div class="col-md-6  card">
          <h5 class="text-justify">Get a personal/corporate loan for your financial goals.<br>Loans through fundsgrowth' Financial Services can help you take control of your Finances.</h5>
          <h6 class="bold no-mb"><i class="fa fa-check-circle-o complete f-s-14"></i> Terms and Condidtions Apply.</h6>
        </div>
        <div class="col-md-3">
        </div>
        <form action="" method="POST">
          <section class="box has-border-left-3">
            <div class="content-body">
              <div class="row">
                <div class="col-xs-12">
                  <div class="option-identity-wrapper no-mb">
                    <div class="tab-head left15">
                      <h3 class="bold no-mt">Check Eligibility</h3>
                      <p>Loans are granted to members who have made a minium investment of $1,000</p>
                      <div class="clearfix"></div>

                      <div class="input-group col-sm-9">
                        <span class="input-group-addon">
                          <span class="arrow"></span>
                          $
                        </span>
                        <input type="text" class="form-control" name="amount" placeholder="Enter Loan Amount" required>
                      </div><br>
                      <div class="col-sm-3 no-pr">
                        <button type="submit" class="btn btn-primary mt-30 btn-corner" name="check_btn"><i class="fa fa-check"></i> Check Eligibility</button>
                      </div>

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </section>
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