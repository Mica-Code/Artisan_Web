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
               <h1><i class="fa fa-archive"></i> Transaction History</h1>
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
            <div class="row card">
               <div class="col-md-1">
               </div>
               <div class="col-md-10">
                  <div class='panel panel-primary ch'>
                     <div class='panel-heading' id="demo" style="background-color:#b07200; color:#fff;">
                        <h4 style="color:#fff;">History</h4>
                     </div><br />
                     <form action="" method="POST">
                        <div class='panel-body'>
                           <div class="card-body">
                              <div class="">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="card-title-w-btn">
                                          <!-- <h3 class="title">Select Plan</h3> -->
                                       </div>
                                       <div class="card-body">

                                          <table class="table table-striped table-bordered zero-configuration" style="color:black; border-color: #dcdcdc;">
                                             <thead>
                                                <tr>
                                                   <th style="width: 15%; text-align:center">
                                                      Order No.
                                                   </th>
                                                   <th style="width: 5%; text-align:center">
                                                      Type
                                                   </th>
                                                   <th style="width: 35%; text-align:center">
                                                      Transaction
                                                   </th>

                                                   <th style="width: 15%; text-align:center">
                                                      Amount
                                                   </th>

                                                   <th style="width: 15%; text-align:center">
                                                      Date/Time
                                                   </th>
                                                   <th style="width: 15%; text-align:center">
                                                      Status
                                                   </th>

                                                </tr>
                                             </thead>
                                             <tbody>
                                                <?php
                                                $query = "SELECT * from x_transactions WHERE userid = '$session_id' ORDER BY trans_date DESC" or die(mysqli_error($con));
                                                $run = mysqli_query($con, $query);
                                                $count = 0;
                                                while ($row = mysqli_fetch_array($run)) {
                                                   $type = $row['type'];
                                                   $count++;

                                                   if ((strpos(strtolower($type), "withdraw") !== false) || (strpos(strtolower($type), "debit") !== false)) {
                                                      $color = "red";
                                                   } elseif (strpos(strtolower($type), "deposit") !== false) {
                                                      $color = "green";
                                                   } else {
                                                      $color = "blue";
                                                   }
                                                ?>

                                                   <tr style="color:<?php echo $color; ?>">
                                                      <td style='text-align:center'>#<?php echo $row['order_numb']; ?></td>
                                                      <td style='text-align:center'><?php echo $row['type']; ?></td>
                                                      <td style='text-align:center'><?php echo $row['transaction']; ?></td>
                                                      <td style='text-align:center'>$<?php echo number_format($row['amount'],2); ?></td>
                                                      <td style='text-align:center'><?php echo $row['trans_date']; ?></td>
                                                      <td style='text-align:center'><i><?php echo $row['status']; ?>...</i></td>

                                                   </tr>
                                                <?php } ?>

                                                <?php if ($count < 1) { ?>

                                                   <tr>
                                                      <td colspan=6 align=center><i>No transaction yet</i></td>
                                                   </tr>

                                                <?php
                                                }
                                                ?>
                                          </table>
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