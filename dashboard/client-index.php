<?php


$title = "Client Dashboard";
$nav='<ul data-submenu-title="Main Navigation">
<li class="active"><a href="client-index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
<li><a href="dashboard-post-job.php"><i class="lni lni-files mr-2"></i>Post New Job</a></li>
<li><a href="dashboard-manage-jobs.php"><i class="lni lni-add-files mr-2"></i>Manage Jobs</a></li>
<li><a href="dashboard-manage-applications.php"><i class="lni lni-briefcase mr-2"></i>Manage Applicants</a></li>
<li ><a href="report-client.php"><i class="lni lni-files mr-2"></i>Generate Report</a></li>
<!-- <li><a href="dashboard-shortlisted-resume.php"><i class="lni lni-bookmark mr-2"></i>BookmarkResumes<span class="count-tag bg-warning">4</span></a></li> -->
<!-- <li><a href="dashboard-packages.html"><i class="lni lni-mastercard mr-2"></i>Packages</a></li>
<li><a href="dashboard-messages.html"><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a></li> -->
</ul>
<ul data-submenu-title="My Accounts">
<li><a href="dashboard-client-profile.php"><i class="lni lni-user mr-2"></i>Edit Profile </a></li>
<li><a href="dashboard-change-client-password.php"><i class="lni lni-lock-alt mr-2"></i>Change Password</a></li>
<li><a onclick= "return confirm(\'You are about to Delete your account. \nData(s) related to you will be cleared from the system. \nThis action is irreversible.\')" href="dashboard-delete-acct.php"><i class="lni lni-trash-can mr-2"></i>Delete Account</a></li>
<li><a href="logout.php"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
</ul>';

include_once('include/client-head.php');



$query = "SELECT * from postjob WHERE userID = $session_id ";

$result = mysqli_query($dbc, $query);

$postJobCount = 0;

while(mysqli_fetch_array($result)){
	$postJobCount += 1;
}
?>	
				
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Hello, <?php echo $fname;?></h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Dashboard</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						<div class="row">
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
								<a href="dashboard-manage-jobs.php">
									<div class="dash-widgets py-5 px-4 rounded" style="background-color:#000F5C;">
										<h2 class="ft-medium mb-1 fs-xl text-light"><?php echo $n_row;?></h2>
										<p class="p-0 m-0 text-light fs-md">Posted Jobs</p>
										<i class="lni lni-files"></i>
									</div>
								</a>
							</div>

							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
								<a href="dashboard-manage-jobs.php?status=pending">
									<div class="dash-widgets py-5 px-4 rounded bg-warning">
										<h2 class="ft-medium mb-1 fs-xl text-light"><?php echo $pn_row;?></h2>
										<p class="p-0 m-0 text-light fs-md">Pending Jobs</p>
										<i class="lni lni-files"></i>
									</div>
								</a>
							</div>

							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
								<a href="dashboard-manage-jobs.php?status=active">
									<div class="dash-widgets py-5 px-4 rounded" style="background-color:#7460ee;">
										<h2 class="ft-medium mb-1 fs-xl text-light"><?php echo $an_row;?></h2>
										<p class="p-0 m-0 text-light fs-md">Active Jobs</p>
										<i class="lni lni-files"></i>
									</div>
								</a>
							</div>

							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
								<a href="dashboard-manage-jobs.php?status=completed">
									<div class="dash-widgets py-5 px-4 rounded" style="background-color:#008113;">
										<h2 class="ft-medium mb-1 fs-xl text-light"><?php echo $cn_row;?></h2>
										<p class="p-0 m-0 text-light fs-md">Completed Jobs</p>
										<i class="lni lni-files"></i>
									</div>
								</a>
							</div>

							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
								<a href="dashboard-manage-applications.php">
									<div class="dash-widgets py-5 px-4 rounded bg-dark" >
										<h2 class="ft-medium mb-1 fs-xl text-light"><?php echo $tan_row;?></h2>
										<p class="p-0 m-0 text-light fs-md">Applicants</p>
										<i class="lni lni-files"></i>
									</div>
								</a>
							</div>

							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
								<a href="report-client.php">
									<div class="dash-widgets py-5 px-4 rounded" style="background-color:#821700;">
										<h2 class="ft-medium mb-1 fs-xl text-light">GR</h2>
										<p class="p-0 m-0 text-light fs-md">Generate Report</p>
										<i class="lni lni-files"></i>
									</div>
								</a>
							</div>

						</div>
						

							
					</div>
					
					<!-- footer -->
					<div class="row">
						<div class="col-md-12">
							<div class="py-3">© <?php echo date("Y");?> ArtificerHub.</div>
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