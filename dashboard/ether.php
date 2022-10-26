<!DOCTYPE html>
<html>

<head>
   <?php include 'head.php' ?>
</head>


<?php

$count_d = 0;
$query = "SELECT * from deposit WHERE userid = '$session_id' ORDER BY id DESC" or die(mysqli_error($con));
$run = mysqli_query($con, $query);
while ($row = mysqli_fetch_array($run)) {
   if ($row['status'] == "Pending") {
      $count_d++;
   }
}
if ($count_d < 1) {
?>
   <script>
      window.location = "invest.php";
   </script>
<?php
}

$query = "SELECT * from deposit WHERE userid = $session_id ORDER BY id DESC";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

$db_id = $row['id'];
$invest_amount = $row['invest_amount'];
$trans_date = $row['trans_date'];
$payment_method = $row['payment_method'];
$plan = $row['plan'];
$percent = $row['percent'];
$pay_profit = $row['pay_profit'];
$status = $row['status'];
$order_numb = $row['order_numb'];
$pay_proof = $row['pay_proof'];

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
            <div class="col-md-6 card text-center">
               <img src="images/ether.png" style="width: 200px;">
               <hr>


               <img src="../admin/uploads/<?php echo $pm_ether_bar_code ?>" style="width: 250px;">
               <!-- <span></span> -->

               <input class="bold" type='text' id='copy' readonly value='<?php echo $pm_ether_address ?>' style="font-size: 22px; border:0ch; padding:5px; margin: 10px; width:100%; text-align: center;">

               <button style='font-size: 15px; color:#fff;' class='btn btn-primary' onclick='myFunction()'><i class="fa fa-check-circle-o complete f-s-14"></i> Copy Address</button>
               <h5 class="">Make the Payment for the investment in the above Ethereum address.<br></h5>
            </div>


            <script type="text/javascript">
               function myFunction() {
                  /* Get the text field */
                  var copyText = document.getElementById("copy");

                  /* Select the text field */
                  copyText.select();
                  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

                  /* Copy the text inside the text field */
                  document.execCommand("copy");

                  /* Alert the copied text */
                  alert("Copied : " + copyText.value);
               }
            </script>


            <div class="col-md-3">
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
               <div class='panel-body panel panel-primary ch'>
                  <section class="box has-border-left-3">
                     <div class="content-body">
                        <div class="row">
                           <div class="col-xs-12">
                              <div class="option-identity-wrapper no-mb">
                                 <p> <span><b>Amount: </b></span>$<?php echo $invest_amount ?></p>
                                 <p> <span><b>Payment ID: </b></span><?php echo $order_numb ?></p>
                                 <p>(have this handy if you need any support related to this transaction)</p>
                                 <p> <span><b>Status: </b></span><?php echo $status ?></p>
                                 <div class="tab-head left15">
                                    <h3 class="bold no-mt">Waiting for your funds...</h3>
                                    <p>Upload the Proof of your payment</p>
                                    <div class="clearfix"></div>
                                    <div class="input-group col-sm-9">
                                       <input type="file" class="form-control" name="image" class="custom-file-input" id="customFile" accept="image/*" required>
                                    </div><br>
                                    <div class="col-sm-3 no-pr">
                                       <button type="submit" class="btn btn-primary mt-30 btn-corner" name="proof"><i class="fa fa-upload"></i> Upload Proof Now</button>
                                    </div>

                                    <?php
                                    // If change button is clicked ...
                                    if (isset($_POST['proof'])) {
                                       $msg = "";

                                       // Get image name
                                       $image = $_FILES['image']['name'];


                                       // Get text
                                       //$image_text = mysqli_real_escape_string($link, $_POST['image_text']);
                                       // image file directory
                                       $target = "./upload_proof/" . basename($image);

                                       // Check file size
                                       if ($_FILES["image"]["size"] > 500000) {
                                          echo "<div class='alert alert-danger'>Sorry, your file is too large.</div>";
                                          exit;
                                       }

                                       $sql = "UPDATE `deposit` SET `pay_proof` = '$image' WHERE `id` = '$db_id'";

                                       // execute query
                                       $result = mysqli_query($con, $sql);

                                       $id = "work";

                                       // uplaoddng pictures to site
                                       if ((move_uploaded_file($_FILES['image']['tmp_name'], $target)) && ($result)) {
                                          $msg = "<div class='alert alert-success'>Proof uploaded successfully</div>";
                                    ?>
                                          <script>
                                             alert("Proof uploaded successfully");
                                             window.location = "btc.php";
                                          </script>
                                    <?php
                                          echo $msg;
                                       } else {
                                          $msg = "<div class='alert alert-danger'>Failed to upload image </div>";
                                          echo $msg;
                                       }
                                    }
                                    ?>

                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="text-center">
                           <?php
                           if ((!empty($pay_proof)) && ($status == "Pending")) { ?>
                              <h4 style="margin-top: 20px;"><i>Awaiting for comfirms...</i> <i class="fa fa-spinner fa-spin"></i></h4>
                              <img src="upload_proof/<?php echo $pay_proof; ?>" width="20%">
                              <h4 style="margin-top: 20px; color:green;"><i>Proof upload was successfully!</i></h4>
                           <?php } ?>
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