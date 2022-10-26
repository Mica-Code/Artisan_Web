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

      /*$query = "SELECT * from withdraw WHERE user_id = '$session_id'" or die(mysqli_error($con));
	  $result= mysqli_query($con,$query);
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

         <?php

         $query_ref = "SELECT * FROM ref_tbl WHERE refered_by ='$session_id'" or die(mysqli_error($con));
         $run = mysqli_query($con, $query_ref);
         $count = 0;
         $no_active = 0;

         $arr_name[] = '';
         $arr_bonus[] = '';

         while ($row_ref = mysqli_fetch_array($run)) {
            $ref_by_id = $row_ref['refered_by'];
            $ref_id = $row_ref['user'];
            $ref_date = $row_ref['ref_date'];
            $count = $count + 1;



            $query = "SELECT * FROM user WHERE userID ='$ref_by_id'" or die(mysqli_error($con));
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_array($result);
            $active = $row['status'];

            // $arr_name[] = $row['email'];
            // $arr_bonus[] = $row_ref['profit'];

            if ($active == "Verified") {
               $no_active = $no_active + 1;
            }
         } ?>


         <div class="row card">
            <div class="row card">
               <div class="col-md-1">
               </div>
               <div class="col-md-10">
                  <div class='panel panel-primary ch'>
                     <div class='panel-heading' id="demo" style="background-color:#b07200; color:#fff;">
                        <h4 style="color:#fff;"><i class="fa fa-link"></i> Referral</h4>
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



                                          <label class=item style="font-size: 15px;">Total Referrals:</label>
                                          <span class=item style="font-size: 15px;"><?php echo $count; ?></span><br><br>

                                          <label class=item style="font-size: 15px;">Active referrals:</label>
                                          <span class=item style="font-size: 15px;"><?php echo $no_active; ?></span><br><br>

                                          <table class="table table-striped table-bordered zero-configuration text-center" style="color:black; border-color: #dcdcdc;">
                                             <thead>
                                                <tr>
                                                   <th style="width: 5%; text-align:center">
                                                      S/N
                                                   </th>
                                                   <th style="width: 15%; text-align:center">
                                                      Date/Time
                                                   </th>
                                                   <th style="width: 35%; text-align:center">
                                                      Referrals
                                                   </th>

                                                   <th style="width: 15%; text-align:center">
                                                      Your Commission
                                                   </th>

                                                </tr>
                                             </thead>
                                             <tbody>

                                                
                                                      <?php

                                                      $query_ref = "SELECT * FROM ref_tbl WHERE refered_by ='$session_id'" or die(mysqli_error($con));
                                                      $run = mysqli_query($con, $query_ref);

                                                      $sn = 0;
                                                      $total_com = 0;

                                                      while ($row_ref = mysqli_fetch_array($run)) {
                                                         $ref_by_id = $row_ref['refered_by'];
                                                         $ref_id = $row_ref['user'];
                                                         $ref_date = $row_ref['ref_date'];

                                                         $profit = $row_ref['profit'];

                                                         $total_com = $total_com + $row_ref['profit'];
                                                         $sn++;

                                                         $query = "SELECT * FROM user WHERE userID ='$ref_id'" or die(mysqli_error($con));
                                                         $result = mysqli_query($con, $query);
                                                         $row = mysqli_fetch_array($result);
                                                         $active = $row['status'];
                                                         $email = $row['email'];
                                                      ?>
                                                         <tr>
                                                            <td class=item style="font-size: 15px;"><?php echo $sn; ?></td>
                                                            <td class=item style="font-size: 15px;"><?php echo $ref_date; ?></td>
                                                            <td class=item style="font-size: 15px;"><?php echo $email; ?></td>
                                                            <td class=item style="font-size: 15px;">$<?php echo number_format($profit,2); ?></td>
                                                         </tr>

                                                      <?php }

                                                      if ($sn == 0) { ?>
                                                         <td class=item style="font-size: 15px;">N/A</td>
                                                         <td class=item style="font-size: 15px;"></td>
                                                         <td class=item style="font-size: 15px;"> <i>No referrals yet</i></td>
                                                         <td class=item style="font-size: 15px;"></td>
                                                      <?php } ?>

                                                </table>
                                                <label class=item style="font-size: 15px;;">Total Referral Commission:</label>
                                                <span class=item style="font-size: 15px;"> $<?php echo number_format($total_com,2); ?></span>

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