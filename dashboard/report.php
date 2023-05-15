<?php



$title = "Generate Report";
$nav='<ul data-submenu-title="Main Navigation">
<li ><a href="index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
<li><a href="dashboard-add-resume.php"><i class="lni lni-add-files mr-2"></i>Create Resume</a></li>
<li><a href="dashboard-alert-job.php"><i class="ti-bell mr-2"></i>Vacant Jobs</a></li>
<li><a href="dashboard-applied-jobs.php"><i class="lni lni-briefcase mr-2"></i>Applied jobs</a></li>
<li class="active"><a href="report.php"><i class="lni lni-files mr-2"></i>Generate Report</a></li>
<!-- <li><a href="dashboard-saved-jobs.php"><i class="lni lni-bookmark mr-2"></i>Bookmark Jobs</a></li> -->
<!-- <li><a href="dashboard-packages.php"><i class="lni lni-mastercard mr-2"></i>Packages</a></li> -->
<!-- <li><a href="dashboard-messages.php"><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a></li> -->
</ul>
<ul data-submenu-title="My Accounts">
<li><a href="dashboard-my-profile.php"><i class="lni lni-user mr-2"></i>My Profile </a></li>
<li><a href="dashboard-change-password.php"><i class="lni lni-lock-alt mr-2"></i>Change Password</a></li>
<li><a onclick= "return confirm(\'You are about to Delete your account. \nData(s) related to you will be cleared from the system. \nThis action is irreversible.\')" href="dashboard-delete-acct.php"><i class="lni lni-trash-can mr-2"></i>Delete Account</a></li>
<li><a href="logout.php"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
</ul>';

include_once('include/head.php');


$getSelStat = "";

if (isset($_POST['gen_rep'])){
	$selRep = $_POST['selRep'];
	echo "<script>window.location.href='report.php?status=$selRep';</script>";
}

if (isset($_GET['status'])){
	$getSelStat = $_GET['status'];
	//echo "<script>alert('".$getSelStat."')</script>";
}


?>			


				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
                            
							<div class="colxl-12 col-lg-12 col-md-12">
                            <!-- <span style="color:red;">No Report has been Generated so far</span> -->
								<h1 class="ft-medium">Generate Report</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Generate Report</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					

                    <!-- Selecting The Particular Report to the Generated -->
					<div class="dashboard-widg-bar d-block">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">

								<div class="_dashboard_content bg-white rounded mb-4">
									<div class="_dashboard_content_header br-bottom py-3 px-3">
										<div class="_dashboard__header_flex">
											<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>Generate Report</h4>	
										</div>
									</div>
									
									<div class="_dashboard_content_body py-3 px-3">
										<form id="report" class="row" method="post">
											
											<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
												<div class="row">
                                                    <div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Report to Generate</label>
                                                            <select class="form-control rounded" name="selRep" style="height: 52px;">
                                                                <!-- <option value="">-- Select Report to be Generated --</option> -->
																<?php
																$StatArrays = array('Select Report to be Generated'=>'','List of Applied Jobs'=>'applied',
                                                                'List of Pending Jobs'=>'pending','List of Active Jobs'=>'active','List of Completed Jobs'=>'completed');
																foreach($StatArrays as $key => $value){
																	if($value == $getSelStat){
																		echo '<option value="'.$value.'" selected>'.$key.'</option>';
																	}
																	else{
																		echo '<option value="'.$value.'">'.$key.'</option>';
																	}
																}
																?>
															<!-- <select class="form-control rounded" name="selReport" style="height: 52px;">
                                                                <option value="">-- Select Report to be Generated --</option>
																<option value="app">List of Applied Jobs</option>
																<option value="aprv">List of Pending Jobs</option>
																<option value="rej">List of Active Jobs</option>
                                                                <option value="com">List of Completed Jobs</option> -->
															</select>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">&nbsp;</label>
															<input type="submit" class="btn-success form-control rounded" name="gen_rep" style="width:150px;" value="Generate Report">
														</div>
													</div>
												</div>
											</div>
											
										</form>
									</div>

								</div>




							</div>
						</div>						
					</div>


                    <!-- Report to the Generated Table-->

                    <!-- All Jobs -->


					
					
<div id="printer">
<style>
	@media print {
  /* Styles applied when printing */
  .no-print {
    display: none;
  }

  /* Additional print-specific styles and adjustments */
}
</style>



					<?php
//Getting All Jobs
if($getSelStat == 'applied'){
?>

<div class="mb-4 tbl-lg rounded overflow-hidden">
												<div class="table-responsive bg-white">
													<table class="table">
														<thead class="thead-dark">
															<tr>
															<th scope="col">S/N</th>
															<th scope="col">Client Name</th>
															<th scope="col">Job Title</th>
															<th scope="col">Job Location</th>
															<th scope="col">Posted Date</th>
															<th scope="col">Deadline Date</th>
															<th scope="col">Application Status</th>
															<th scope="col">Application Date</th>

															</tr>
														</thead>
														<tbody>

														<?php

														$sn = 1;
														
														$appJobquery = "SELECT * from appjob WHERE appArtisanID = $session_id ";

														$appJobresult = mysqli_query($dbc, $appJobquery);

														while($row = mysqli_fetch_array($appJobresult)){

															$appId = $row['appJobID'];
															$appPostId = $row['appPostJobID'];
															$appClientId = $row['appClientID'];
															$appArtisanId = $row['appArtisanID'];
															$appStatus = $row['appStatus'];
															$appJobDate = $row['appJobDate'];


															//Using the PostJob ID Gotten from the AppJob Table to get Details on the Post Job Table
															// echo "<script>alert('".$appPostId."')</script>";
															$postJobquery = "SELECT * from postjob WHERE postJobID = $appPostId ";
															$postJobresult = mysqli_query($dbc, $postJobquery);
															$postJobrow = mysqli_fetch_array($postJobresult);

															//echo "<script>alert('I am here 3')</script>";
															$postJobID = $postJobrow['postJobID'];
															$postJobTitle = $postJobrow['postJobTitle'];
															$postJobLevel = $postJobrow['postJobLevel'];
															$postJobDeadline = $postJobrow['postJobDeadline'];
															$postJobLocation = $postJobrow['postJobLocation'];
															$postJobDate = $postJobrow['postJobDate'];
															$postClientId = $postJobrow['userID'];
															
															//Getting details of clients that posted the job
															$clientDetails = "SELECT * from art_reg_tbl WHERE userID = $postClientId ";
															$clientDetailsresult = mysqli_query($dbc, $clientDetails);
															$ClientDetailsrow = mysqli_fetch_array($clientDetailsresult);
															
															$ClientName = $ClientDetailsrow['fullname'];

														?>
															<tr>
																<td><div class="dash-title">
																		<h4 class="mb-0 ft-medium fs-sm">
																			<?php echo $sn++;?>
																		</h4>
																	</div>
																</td>

																<td><div class="dash-filled">
																	<?php
																		echo $ClientName;
																	?>

																</td>

																<td>
																<?php
																		echo $postJobTitle;
																	?>
																</td>

																<td>
																<?php
																		echo $postJobLocation;
																	?>
																</td>

																<td><?php 
																$phpdate = strtotime( $postJobDate );
																// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );
																// $mysqldate = date( '(D) j M Y <br> h:i A', $phpdate);
																$mysqldate = date( 'j M Y', $phpdate);
																echo $mysqldate;?></td>


																<td><?php 
																$phpdate2 = strtotime( $postJobDeadline );
																// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );
																// $mysqldate = date( '(D) j M Y <br> h:i A', $phpdate);
																$mysqldate2 = date( 'j M Y', $phpdate2);
																echo $mysqldate2;?></td>

																<td>
																<?php
																		echo $appStatus;
																	?>
																</td>


																<td><?php 
																$phpdate2 = strtotime( $appJobDate );
																// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );
																// $mysqldate = date( '(D) j M Y <br> h:i A', $phpdate);
																$mysqldate2 = date( 'j M Y', $phpdate2);
																echo $mysqldate2;?></td>

																
															</tr>

															<?php
															}
															?>
														</tbody>
													</table>
												</div>
											</div>

                                            <center>
        <input type="button" class="btn-success form-control rounded no-print" 
        style="width:100px; font-size:12px; padding: auto 2px; height:40px; margin-bottom:20px;" onclick="printDiv()" value="Print"
</center>

<?php
}elseif($getSelStat == 'pending'){
?>

<div class="mb-4 tbl-lg rounded overflow-hidden">
												<div class="table-responsive bg-white">
													<table class="table">
														<thead class="thead-dark">
															<tr>
															<th scope="col">S/N</th>
															<th scope="col">Client Name</th>
															<th scope="col">Job Title</th>
															<th scope="col">Job Location</th>
															<th scope="col">Posted Date</th>
															<th scope="col">Deadline Date</th>
															<th scope="col">Application Status</th>
															<th scope="col">Application Date</th>

															</tr>
														</thead>
														<tbody>

														<?php

														$sn = 1;
														
														$appJobquery = "SELECT * from appjob WHERE appArtisanID = $session_id AND appStatus = 'Pending'";

														$appJobresult = mysqli_query($dbc, $appJobquery);

														while($row = mysqli_fetch_array($appJobresult)){

															$appId = $row['appJobID'];
															$appPostId = $row['appPostJobID'];
															$appClientId = $row['appClientID'];
															$appArtisanId = $row['appArtisanID'];
															$appStatus = $row['appStatus'];
															$appJobDate = $row['appJobDate'];


															//Using the PostJob ID Gotten from the AppJob Table to get Details on the Post Job Table
															// echo "<script>alert('".$appPostId."')</script>";
															$postJobquery = "SELECT * from postjob WHERE postJobID = $appPostId ";
															$postJobresult = mysqli_query($dbc, $postJobquery);
															$postJobrow = mysqli_fetch_array($postJobresult);

															//echo "<script>alert('I am here 3')</script>";
															$postJobID = $postJobrow['postJobID'];
															$postJobTitle = $postJobrow['postJobTitle'];
															$postJobLevel = $postJobrow['postJobLevel'];
															$postJobDeadline = $postJobrow['postJobDeadline'];
															$postJobLocation = $postJobrow['postJobLocation'];
															$postJobDate = $postJobrow['postJobDate'];
															$postClientId = $postJobrow['userID'];
															
															//Getting details of clients that posted the job
															$clientDetails = "SELECT * from art_reg_tbl WHERE userID = $postClientId ";
															$clientDetailsresult = mysqli_query($dbc, $clientDetails);
															$ClientDetailsrow = mysqli_fetch_array($clientDetailsresult);
															
															$ClientName = $ClientDetailsrow['fullname'];

														?>
															<tr>
																<td><div class="dash-title">
																		<h4 class="mb-0 ft-medium fs-sm">
																			<?php echo $sn++;?>
																		</h4>
																	</div>
																</td>

																<td><div class="dash-filled">
																	<?php
																		echo $ClientName;
																	?>

																</td>

																<td>
																<?php
																		echo $postJobTitle;
																	?>
																</td>

																<td>
																<?php
																		echo $postJobLocation;
																	?>
																</td>

																<td><?php 
																$phpdate = strtotime( $postJobDate );
																// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );
																// $mysqldate = date( '(D) j M Y <br> h:i A', $phpdate);
																$mysqldate = date( 'j M Y', $phpdate);
																echo $mysqldate;?></td>


																<td><?php 
																$phpdate2 = strtotime( $postJobDeadline );
																// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );
																// $mysqldate = date( '(D) j M Y <br> h:i A', $phpdate);
																$mysqldate2 = date( 'j M Y', $phpdate2);
																echo $mysqldate2;?></td>

																<td>
																<?php
																		echo $appStatus;
																	?>
																</td>


																<td><?php 
																$phpdate2 = strtotime( $appJobDate );
																// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );
																// $mysqldate = date( '(D) j M Y <br> h:i A', $phpdate);
																$mysqldate2 = date( 'j M Y', $phpdate2);
																echo $mysqldate2;?></td>

																
															</tr>

															<?php
															}
															?>
														</tbody>
													</table>
												</div>
											</div>

                                            <center>
        <input type="button" class="btn-success form-control rounded no-print" 
        style="width:100px; font-size:12px; padding: auto 2px; height:40px; margin-bottom:20px;" onclick="printDiv()" value="Print"
</center>

<?php
}elseif($getSelStat == 'active'){
?>

<div class="mb-4 tbl-lg rounded overflow-hidden">
												<div class="table-responsive bg-white">
													<table class="table">
														<thead class="thead-dark">
															<tr>
															<th scope="col">S/N</th>
															<th scope="col">Client Name</th>
															<th scope="col">Job Title</th>
															<th scope="col">Job Location</th>
															<th scope="col">Posted Date</th>
															<th scope="col">Deadline Date</th>
															<th scope="col">Application Status</th>
															<th scope="col">Application Date</th>

															</tr>
														</thead>
														<tbody>

														<?php

														$sn = 1;
														
														$appJobquery = "SELECT * from appjob WHERE appArtisanID = $session_id AND appStatus = 'Active'";

														$appJobresult = mysqli_query($dbc, $appJobquery);

														while($row = mysqli_fetch_array($appJobresult)){

															$appId = $row['appJobID'];
															$appPostId = $row['appPostJobID'];
															$appClientId = $row['appClientID'];
															$appArtisanId = $row['appArtisanID'];
															$appStatus = $row['appStatus'];
															$appJobDate = $row['appJobDate'];


															//Using the PostJob ID Gotten from the AppJob Table to get Details on the Post Job Table
															// echo "<script>alert('".$appPostId."')</script>";
															$postJobquery = "SELECT * from postjob WHERE postJobID = $appPostId ";
															$postJobresult = mysqli_query($dbc, $postJobquery);
															$postJobrow = mysqli_fetch_array($postJobresult);

															//echo "<script>alert('I am here 3')</script>";
															$postJobID = $postJobrow['postJobID'];
															$postJobTitle = $postJobrow['postJobTitle'];
															$postJobLevel = $postJobrow['postJobLevel'];
															$postJobDeadline = $postJobrow['postJobDeadline'];
															$postJobLocation = $postJobrow['postJobLocation'];
															$postJobDate = $postJobrow['postJobDate'];
															$postClientId = $postJobrow['userID'];
															
															//Getting details of clients that posted the job
															$clientDetails = "SELECT * from art_reg_tbl WHERE userID = $postClientId ";
															$clientDetailsresult = mysqli_query($dbc, $clientDetails);
															$ClientDetailsrow = mysqli_fetch_array($clientDetailsresult);
															
															$ClientName = $ClientDetailsrow['fullname'];

														?>
															<tr>
																<td><div class="dash-title">
																		<h4 class="mb-0 ft-medium fs-sm">
																			<?php echo $sn++;?>
																		</h4>
																	</div>
																</td>

																<td><div class="dash-filled">
																	<?php
																		echo $ClientName;
																	?>

																</td>

																<td>
																<?php
																		echo $postJobTitle;
																	?>
																</td>

																<td>
																<?php
																		echo $postJobLocation;
																	?>
																</td>

																<td><?php 
																$phpdate = strtotime( $postJobDate );
																// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );
																// $mysqldate = date( '(D) j M Y <br> h:i A', $phpdate);
																$mysqldate = date( 'j M Y', $phpdate);
																echo $mysqldate;?></td>


																<td><?php 
																$phpdate2 = strtotime( $postJobDeadline );
																// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );
																// $mysqldate = date( '(D) j M Y <br> h:i A', $phpdate);
																$mysqldate2 = date( 'j M Y', $phpdate2);
																echo $mysqldate2;?></td>

																<td>
																<?php
																		echo $appStatus;
																	?>
																</td>


																<td><?php 
																$phpdate2 = strtotime( $appJobDate );
																// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );
																// $mysqldate = date( '(D) j M Y <br> h:i A', $phpdate);
																$mysqldate2 = date( 'j M Y', $phpdate2);
																echo $mysqldate2;?></td>

																
															</tr>

															<?php
															}
															?>
														</tbody>
													</table>
												</div>
											</div>

                                            <center>
        <input type="button" class="btn-success form-control rounded no-print" 
        style="width:100px; font-size:12px; padding: auto 2px; height:40px; margin-bottom:20px;" onclick="printDiv()" value="Print"
</center>

<?php
}elseif($getSelStat == 'completed'){
?>

<div class="mb-4 tbl-lg rounded overflow-hidden">
												<div class="table-responsive bg-white">
													<table class="table">
														<thead class="thead-dark">
															<tr>
															<th scope="col">S/N</th>
															<th scope="col">Client Name</th>
															<th scope="col">Job Title</th>
															<th scope="col">Job Location</th>
															<th scope="col">Posted Date</th>
															<th scope="col">Deadline Date</th>
															<th scope="col">Application Status</th>
															<th scope="col">Application Date</th>

															</tr>
														</thead>
														<tbody>

														<?php

														$sn = 1;
														
														$appJobquery = "SELECT * from appjob WHERE appArtisanID = $session_id AND appStatus = 'Completed'";

														$appJobresult = mysqli_query($dbc, $appJobquery);

														while($row = mysqli_fetch_array($appJobresult)){

															$appId = $row['appJobID'];
															$appPostId = $row['appPostJobID'];
															$appClientId = $row['appClientID'];
															$appArtisanId = $row['appArtisanID'];
															$appStatus = $row['appStatus'];
															$appJobDate = $row['appJobDate'];


															//Using the PostJob ID Gotten from the AppJob Table to get Details on the Post Job Table
															// echo "<script>alert('".$appPostId."')</script>";
															$postJobquery = "SELECT * from postjob WHERE postJobID = $appPostId ";
															$postJobresult = mysqli_query($dbc, $postJobquery);
															$postJobrow = mysqli_fetch_array($postJobresult);

															//echo "<script>alert('I am here 3')</script>";
															$postJobID = $postJobrow['postJobID'];
															$postJobTitle = $postJobrow['postJobTitle'];
															$postJobLevel = $postJobrow['postJobLevel'];
															$postJobDeadline = $postJobrow['postJobDeadline'];
															$postJobLocation = $postJobrow['postJobLocation'];
															$postJobDate = $postJobrow['postJobDate'];
															$postClientId = $postJobrow['userID'];
															
															//Getting details of clients that posted the job
															$clientDetails = "SELECT * from art_reg_tbl WHERE userID = $postClientId ";
															$clientDetailsresult = mysqli_query($dbc, $clientDetails);
															$ClientDetailsrow = mysqli_fetch_array($clientDetailsresult);
															
															$ClientName = $ClientDetailsrow['fullname'];

														?>
															<tr>
																<td><div class="dash-title">
																		<h4 class="mb-0 ft-medium fs-sm">
																			<?php echo $sn++;?>
																		</h4>
																	</div>
																</td>

																<td><div class="dash-filled">
																	<?php
																		echo $ClientName;
																	?>

																</td>

																<td>
																<?php
																		echo $postJobTitle;
																	?>
																</td>

																<td>
																<?php
																		echo $postJobLocation;
																	?>
																</td>

																<td><?php 
																$phpdate = strtotime( $postJobDate );
																// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );
																// $mysqldate = date( '(D) j M Y <br> h:i A', $phpdate);
																$mysqldate = date( 'j M Y', $phpdate);
																echo $mysqldate;?></td>


																<td><?php 
																$phpdate2 = strtotime( $postJobDeadline );
																// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );
																// $mysqldate = date( '(D) j M Y <br> h:i A', $phpdate);
																$mysqldate2 = date( 'j M Y', $phpdate2);
																echo $mysqldate2;?></td>

																<td>
																<?php
																		echo $appStatus;
																	?>
																</td>


																<td><?php 
																$phpdate2 = strtotime( $appJobDate );
																// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );
																// $mysqldate = date( '(D) j M Y <br> h:i A', $phpdate);
																$mysqldate2 = date( 'j M Y', $phpdate2);
																echo $mysqldate2;?></td>

																
															</tr>

															<?php
															}
															?>
														</tbody>
													</table>
												</div>
											</div>

                                            <center>
        <input type="button" class="btn-success form-control rounded no-print" 
        style="width:100px; font-size:12px; padding: auto 2px; height:40px; margin-bottom:20px;" onclick="printDiv()" value="Print"
</center>

<?php
}?>

</div>

<script>
	function printDiv() {

	var printContents = document.getElementById("printer").innerHTML;

	var originalContents = document.body.innerHTML;
	document.body.innerHTML = printContents;

	window.print();

	document.body.innerHTML = originalContents;
	}
</script>







					<?php
include_once('include/footer.php');
?>			