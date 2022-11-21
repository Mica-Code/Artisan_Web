<?php

$title = "Manage Jobs";
$nav='<ul data-submenu-title="Main Navigation">
<li><a href="client-index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
<li><a href="dashboard-post-job.php"><i class="lni lni-files mr-2"></i>Post New Job</a></li>
<li class="active"><a href="dashboard-manage-jobs.php"><i class="lni lni-add-files mr-2"></i>Manage Jobs</a></li>
<li><a href="dashboard-manage-applications.php"><i class="lni lni-briefcase mr-2"></i>Manage Applicants</a></li>
<!-- <li><a href="dashboard-shortlisted-resume.php"><i class="lni lni-bookmark mr-2"></i>BookmarkResumes<span class="count-tag bg-warning">4</span></a></li> -->
<!-- <li><a href="dashboard-packages.html"><i class="lni lni-mastercard mr-2"></i>Packages</a></li>
<li><a href="dashboard-messages.html"><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a></li> -->
</ul>
<ul data-submenu-title="My Accounts">
<li><a href="dashboard-client-profile.php"><i class="lni lni-user mr-2"></i>My Profile </a></li>
<li><a href="dashboard-change-client-password.php"><i class="lni lni-lock-alt mr-2"></i>Change Password</a></li>
<li><a href="javascript:void(0);"><i class="lni lni-trash-can mr-2"></i>Delete Account</a></li>
<li><a href="logout.php"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
</ul>';

include_once('include/client-head.php');
?>	
				
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Manage Jobs</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="client-index.php">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Manage Jobs</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="d-flex align-items-center p-3 alert alert-danger">
									Your listings will be automatically removed after 30 days.
								</div>
								<div class="mb-4 tbl-lg rounded overflow-hidden">
									<div class="table-responsive bg-white">
										<table class="table">
											<thead class="thead-dark">
												<tr>
												  <th scope="col">Title</th>
												  <th scope="col">Filled</th>
												  <th scope="col">Posted Date</th>
												  <th scope="col">Expire</th>
												  <th scope="col">Applications</th>
												  <th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>

											<?php
											$count = 0;
											
											$query = "SELECT * from postjob WHERE userID = $session_id ";

											$result = mysqli_query($dbc, $query);

											while($row = mysqli_fetch_array($result)){
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
											?>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm"><?php echo $postJobTitle;

													if ($postJobStatus == "Pending"){
														echo "<span class='medium theme-cl rounded text-warning bg-light-warning ml-1 py-1 px-2'>Pending</span>";
													}
													elseif ($postJobStatus == "Active"){
														echo "<span class='medium theme-cl rounded text-primary bg-light-primary ml-1 py-1 px-2'>Active</span>";
													}
													elseif ($postJobStatus == "Completed"){
														echo "<span class='medium theme-cl rounded text-success bg-light-success ml-1 py-1 px-2'>Completed</span>";
													}
													elseif ($postJobStatus == "Cancled"){
														echo "<span class='medium theme-cl rounded text-danger bg-light-danger ml-1 py-1 px-2'>Cancled</span>";
													}
													?></h4></div></td>
													<td><div class="dash-filled">
														<?php
														if ($postJobStatus == "Active" || $postJobStatus == "Completed"){
															echo "<span class='p-2 circle text-light bg-success d-inline-flex align-items-center justify-content-center'><i class='lni lni-checkmark'></i></span>";
														}
														else{
															echo "<span class='p-2 circle gray d-inline-flex align-items-center justify-content-center'><i class='lni lni-minus'></i></span></div></td>";
														}
														?>

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

													<td><a href="dashboard-manage-applications.html" class="gray rounded px-3 py-2 ft-medium">----</a></td>
													<td>
														<div class="dash-action">
															<a href="dashboard-single-job.php" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="dashboard-edit-job.php" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>

												<?php
												$count++;
												}
												?>
												<!-- <tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Experienced UI/UX Product Designer</h4></div></td>
													<td><div class="dash-filled"><span class="p-2 circle gray d-inline-flex align-items-center justify-content-center"><i class="lni lni-minus"></i></span></div></td>
													<td>18 Sep 2021</td>
													<td>12 Dec 2021</td>
													<td><a href="dashboard-manage-applications.html" class="theme-bg text-light rounded px-3 py-2 ft-medium">Total 04</a></td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Web developer - Front-End & PHP developer</h4></div></td>
													<td><div class="dash-filled"><span class="p-2 circle text-light bg-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-checkmark"></i></span></div></td>
													<td>07 Sep 2021</td>
													<td>20 Nov 2021</td>
													<td><a href="dashboard-manage-applications.html" class="theme-bg text-light rounded px-3 py-2 ft-medium">Total 08</a></td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">WordPress Developer & Database Management System</h4></div></td>
													<td><div class="dash-filled"><span class="p-2 circle text-light bg-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-checkmark"></i></span></div></td>
													<td>21 Sep 2021</td>
													<td>20 Dec 2021</td>
													<td><a href="dashboard-manage-applications.html" class="theme-bg text-light rounded px-3 py-2 ft-medium">Total 12</a></td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Senior Web Developer<span class="medium theme-cl rounded text-success bg-light-success ml-1 py-1 px-2">Pending</span></h4></div></td>
													<td><div class="dash-filled"><span class="p-2 circle gray d-inline-flex align-items-center justify-content-center"><i class="lni lni-minus"></i></span></div></td>
													<td>10 Oct 2021</td>
													<td>12 Jan 2021</td>
													<td><a href="dashboard-manage-applications.html" class="gray rounded px-3 py-2 ft-medium">----</a></td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<tr>
													<td><div class="dash-title"><h4 class="mb-0 ft-medium fs-sm">Experienced UI/UX Product Designer</h4></div></td>
													<td><div class="dash-filled"><span class="p-2 circle gray d-inline-flex align-items-center justify-content-center"><i class="lni lni-minus"></i></span></div></td>
													<td>15 Oct 2021</td>
													<td>22 Dec 2021</td>
													<td><a href="dashboard-manage-applications.html" class="theme-bg text-light rounded px-3 py-2 ft-medium">Total 04</a></td>
													<td>
														<div class="dash-action">
															<a href="javascript:void(0);" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
															<a href="javascript:void(0);" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr> -->
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
							
					</div>
					
					<!-- footer -->
					<div class="row">
						<div class="col-md-12">
						<div class="py-3">© 2022 AtificerHub</div>
						</div>
					</div>
		
				</div>
				
			</div>
			<!-- ======================= dashboard Detail End ======================== -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

		</div>
		<!-- ============================================================== -->
		<!-- End Wrapper -->
		<!-- ============================================================== -->

		<!-- ============================================================== -->
		<!-- All Jquery -->
		<!-- ============================================================== -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/slick.js"></script>
		<script src="assets/js/slider-bg.js"></script>
		<script src="assets/js/smoothproducts.js"></script>
		<script src="assets/js/snackbar.min.js"></script>
		<script src="assets/js/jQuery.style.switcher.js"></script>
		<script src="assets/js/custom.js"></script>
		<!-- ============================================================== -->
		<!-- This page plugins -->
		<!-- ============================================================== -->

	</body>
</html>