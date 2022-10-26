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
          <h1><i class="fa fa-archive"></i> Dashboard</h1>
          <p>Welcome to Fundsgrowth</p>
        </div>
        <div>
          <ul class="breadcrumb">
            <li><i class="fa fa-home fa-lg"></i></li>
            <li><a href="#">Dashboard</a></li>
          </ul>
        </div>
      </div>


<?php require 'top.php'?>







      <div class="col-md-12 col-sm-12 col-xs-12">
        <!--  Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div id="tradingview_3cc53"></div>
          <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BITSTAMP-EURUSD/" rel="noopener" target="_blank"></a></div>
          <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
          <script type="text/javascript">
            new TradingView.widget({
              "width": "100%",
              "height": 500,
              "symbol": "BITSTAMP:EURUSD",
              "interval": "D",
              "timezone": "Etc/UTC",
              "theme": "dark",
              "style": "1",
              "locale": "en",
              "toolbar_bg": "#f1f3f6",
              "enable_publishing": false,
              "allow_symbol_change": true,
              "container_id": "tradingview_3cc53"
            });
          </script>
        </div>
        <!--  Widget END -->
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