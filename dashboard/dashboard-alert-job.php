<?php

$title = "Job Alerts";
$nav='<ul data-submenu-title="Main Navigation">
<li ><a href="index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
<li><a href="dashboard-add-resume.php"><i class="lni lni-add-files mr-2"></i>Create Resume</a></li>
<li class="active"><a href="dashboard-alert-job.php"><i class="ti-bell mr-2"></i>Vacant Jobs</a></li>
<li><a href="dashboard-applied-jobs.php"><i class="lni lni-briefcase mr-2"></i>Applied jobs</a></li>
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
?>			
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Vacant Jobs</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Vacant Jobs</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="mb-4 tbl-lg rounded overflow-hidden">
									<div class="table-responsive bg-white">
										<table class="table">
											<thead class="thead-dark">
												<tr>
												  <th scope="col">Title</th>
												  <th scope="col">Experience Level</th>
												  <th scope="col">Posted Date</th>
												  <th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>


												<?php
												
													//Getting all data from the Post Job Table
													$query = "SELECT * from postjob WHERE postJobProfession = '$handwork'";
													
													$result = mysqli_query($dbc, $query);
													$num_row = mysqli_num_rows($result);
													// echo "<script>alert('".$num_row."')</script>";
													if($num_row > 0){
														while($row = mysqli_fetch_array($result)){
															$postJobID = $row['postJobID'];
															$postJobTitle = $row['postJobTitle'];
															$postJobDesc = $row['postJobDesc'];
															$postJobProfession = $row['postJobProfession'];
															$postJobLevel = $row['postJobLevel'];
															$postJobType = $row['postJobType'];
															$postJobGender = $row['postJobGender'];
															$postJobDeadline = $row['postJobDeadline'];
															$postJobLocation = $row['postJobLocation'];
															$postJobAddress = $row['postJobAddress'];
															$postJobDate = $row['postJobDate'];
															$postJobStatus = $row['postJobStatus'];
															$postJobToken = $row['postJobToken'];	

															//Checking if the Job is already active
															// $if_act_com = "SELECT * from appjob WHERE (appPostJobID = $postJobID AND appStatus = 'Active') OR (appPostJobID = $postJobID AND appStatus = 'Completed')";
															// $run = mysqli_query($dbc, $if_act_com);
															// $num_row2 = mysqli_num_rows($run);

															// if($num_row2 < 1){
													?>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm"><?php echo $postJobTitle;?><span class='medium theme-cl rounded text-success bg-light-success ml-1 py-1 px-2'><?php echo $postJobType;?></span></h4><div class="jbl_location"><i class="lni lni-map-marker mr-1"></i><?php echo $postJobLocation;?>, Lagos</div></div></td>
													<td><?php echo $postJobLevel;?></td>
													<td><?php 
													$phpdate2 = strtotime( $postJobDate );
													$mysqldate2 = date( 'j M Y', $phpdate2);
													echo $mysqldate2;?>
													<td>
														<div class="dash-action">
															<a href="dashboard-job-detail.php?JobID=<?php echo $postJobID; ?>&JobToken=<?php echo $postJobToken;?>" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<?php
															// $q1 = "SELECT * from appjob WHERE appPostJobID=$postJobID AND appStatus='Completed'";
															$q1 = "SELECT * from appjob WHERE (appPostJobID = $postJobID AND appStatus = 'Active') OR (appPostJobID = $postJobID AND appStatus = 'Completed')";
															$r1 = mysqli_query($dbc, $q1);
															$no_row1 = mysqli_num_rows($r1);

															// echo "<script>alert('". $postJobID."')</script>";
															// echo "<script>alert('".$no_row1."')</script>";

															if($no_row1 < 1){

																$q = "SELECT * from appjob WHERE appPostJobID=$postJobID AND appArtisanID=$session_id";
																$r = mysqli_query($dbc, $q);
																$no_row = mysqli_num_rows($r);

																if($no_row >  0){
																?>
																<a onclick="return confirm('You are about to cancel you application \nfor this Job.');" href="dashboard-delete-apply-job.php?JobID=<?php echo $postJobID; ?>&JobToken=<?php echo $postJobToken;?>" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1" class="tooltip"><i class="lni lni-cross-circle"></i></a>
																<?php
																}
																else{?>
																<a onclick="return confirm('You are about to apply for this Job, \nYour Resume will be Provided to the Employer. \nIt is adviced to keep your resume up to date \nto increase your chances');" href="dashboard-apply-job.php?JobID=<?php echo $postJobID; ?>&JobToken=<?php echo $postJobToken;?>" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center ml-1" class="tooltip"><i class="lni lni-checkmark"></i></a>
																<?php
																}
															}
															else{?>
																<a class="p-2 circle d-inline-flex align-items-center justify-content-center ml-1" style="pointer-events: none; color:#868E96; background-color:#EDEDED;"><i class="lni lni-checkmark"></i></a>
															<?php
															}
																?>
														</div>
													</td>
												</tr>

												<?php
														}}//}
														else{
															?>
															<tr>
																<td></td>
																<td></td>
																<td>No request for your profession yet</td>
																<td></td>
															</tr>
				
															<?php
															}
															?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
							
					</div>
					<?php
include_once('include/footer.php');
?>			