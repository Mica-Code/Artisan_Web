<?php

$title = "View Job";
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
								<h1 class="ft-medium">Name of Job</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="client-index.php">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="dashboard-manage-jobs.php">Manage Jobs</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">View Job</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<section class="middle">
				<div class="container">
					<div class="row">
						
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
						
							<div class="d-block mb-4">
								<a href="dashboard-manage-jobs.php" class="btn btn-md btn-success ft-medium rounded" style="color:white;"><i class="ti-back-left mr-1"></i>Back</a>
							</div>
							
							<div class="d-block mb-4">
								<div class="svd-01 d-flex align-items-center">
									<div class="jbd-flex d-flex align-items-center justify-content-start">
										<div class="jbd-01-thumb">
											<img src="assets/img/c-1.png" class="img-fluid" width="90" alt="" />
										</div>
									</div>
									<div class="jbd-01-caption pl-3">
										<div class="tbd-title">
											<div class="ft-medium medium"><span>InfosysX</span></div>
											<h4 class="mb-3 ft-medium fs-lg">Senior UI/UX Web Designer in USA<img src="assets/img/verify.svg" class="ml-1" width="12" alt=""></h4>
										</div>
										<div class="jbd-list mb-2">
											<span class="px-2 py-1 rounded theme-cl theme-bg-light mr-2"><i class="lni lni-briefcase mr-1"></i>Full Time</span>
											<span><i class="lni lni-map-marker mr-1"></i>San Francisco, USA</span>
											<span class="px-2 py-1 rounded text-warning bg-light-warning ml-2"><i class="lni lni-star mr-1"></i>Featured</span>
											<span class="rounded ml-2"><i class="lni lni-money-protection mr-1"></i>$85k - 100k PA.</span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="rounded mb-4">
								<div class="jbd-01">

									<div class="jbd-details mb-4">
										<h5 class="ft-medium fs-md">Job description</h5>
										<p>We are looking for a PHP Developer responsible for managing back-end services and the interchange of data between the server and the users. Your primary focus will be the development of all server-side logic, definition and maintenance of the central database</p>
										<p>Across our network, we strive to provide rapid, performance-based, industry-focused and technology-enabled services, which reflect a shared knowledge of global and local industries and our experience of the Indian business environment.</p>
									</div>
									
									<div class="jbd-details mb-3">
										<h5>Requirements:</h5>
										<div class="position-relative row">
											<div class="col-lg-12 col-md-12 col-12">
												<div class="mb-2 mr-4 ml-lg-0 mr-lg-4">
													<div class="d-flex align-items-center">
													  <div class="rounded-circle bg-light-success theme-cl p-1 small d-flex align-items-center justify-content-center">
														<i class="fas fa-check small"></i>
													  </div>
													  <h6 class="mb-0 ml-3 text-muted fs-sm">Strong core PHP Hands on experience.</h6>
													</div>
												</div>
												<div class="mb-2 mr-4 ml-lg-0 mr-lg-4">
													<div class="d-flex align-items-center">
													  <div class="rounded-circle bg-light-success theme-cl p-1 small d-flex align-items-center justify-content-center">
														<i class="fas fa-check small"></i>
													  </div>
													  <h6 class="mb-0 ml-3 text-muted fs-sm">Strong Expertise in CodeIgniter Framework .</h6>
													</div>
												</div>
												<div class="mb-2 mr-4 ml-lg-0 mr-lg-4">
													<div class="d-flex align-items-center">
													  <div class="rounded-circle bg-light-success theme-cl p-1 small d-flex align-items-center justify-content-center">
														<i class="fas fa-check small"></i>
													  </div>
													  <h6 class="mb-0 ml-3 text-muted fs-sm">Understanding of MVC design pattern.</h6>
													</div>
												</div>
												<div class="mb-2 mr-4 ml-lg-0 mr-lg-4">
													<div class="d-flex align-items-center">
													  <div class="rounded-circle bg-light-success theme-cl p-1 small d-flex align-items-center justify-content-center">
														<i class="fas fa-check small"></i>
													  </div>
													  <h6 class="mb-0 ml-3 text-muted fs-sm">Expertise in PHP, MVC Frameworks and good technology exposure of Codeigniter .</h6>
													</div>
												</div>
												<div class="mb-2 mr-4 ml-lg-0 mr-lg-4">
													<div class="d-flex align-items-center">
													  <div class="rounded-circle bg-light-success theme-cl p-1 small d-flex align-items-center justify-content-center">
														<i class="fas fa-check small"></i>
													  </div>
													  <h6 class="mb-0 ml-3 text-muted fs-sm">Basic understanding of front-end technologies, such as JavaScript, HTML5, and CSS3</h6>
													</div>
												</div>
												<div class="mb-2 mr-4 ml-lg-0 mr-lg-4">
													<div class="d-flex align-items-center">
													  <div class="rounded-circle bg-light-success theme-cl p-1 small d-flex align-items-center justify-content-center">
														<i class="fas fa-check small"></i>
													  </div>
													  <h6 class="mb-0 ml-3 text-muted fs-sm">Good knowledge of relational databases, version control tools and of developing web services.</h6>
													</div>
												</div>
												<div class="mb-2 mr-4 ml-lg-0 mr-lg-4">
													<div class="d-flex align-items-center">
													  <div class="rounded-circle bg-light-success theme-cl p-1 small d-flex align-items-center justify-content-center">
														<i class="fas fa-check small"></i>
													  </div>
													  <h6 class="mb-0 ml-3 text-muted fs-sm">Proficient understanding of code versioning tools, such as Git.</h6>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="jbd-details mb-4">
										<h5 class="ft-medium fs-md">Skills Required</h5>
										<div class="other-details">
											<div class="details ft-medium"><label class="text-muted">Role</label><span class="text-dark">Database Architect / Designer</span></div>
											<div class="details ft-medium"><label class="text-muted">Industry Type</label><span class="text-dark">Advertising & Marketing</span></div>
											<div class="details ft-medium"><label class="text-muted">Functional Area</label><span class="text-dark">Engineering - Software</span></div>
											<div class="details ft-medium"><label class="text-muted">Employment Type</label><span class="text-dark">Full Time, Permanent</span></div>
											<div class="details ft-medium"><label class="text-muted">Role Category</label><span class="text-dark">DBA / Data warehousing</span></div>
										</div>
									</div>
									
									<div class="jbd-details mb-1">
										<h5 class="ft-medium fs-md">Key Skills</h5>
										<ul class="p-0 skills_tag text-left">
											<li><span class="px-2 py-1 medium skill-bg rounded text-dark">Joomla</span></li>
											<li><span class="px-2 py-1 medium skill-bg rounded text-dark">WordPress</span></li>
											<li><span class="px-2 py-1 medium skill-bg rounded text-dark">Javascript</span></li>
											<li><span class="px-2 py-1 medium skill-bg rounded text-dark">PHP</span></li>
											<li><span class="px-2 py-1 medium skill-bg rounded text-dark">HTML5</span></li>
											<li><span class="px-2 py-1 medium skill-bg rounded text-dark">MS SQL</span></li>
											<li><span class="px-2 py-1 medium skill-bg rounded text-dark">SQL Development</span></li>
											<li><span class="px-2 py-1 medium skill-bg rounded text-dark">Dynamod</span></li>
											<li><span class="px-2 py-1 medium skill-bg rounded text-dark">Database</span></li>
										</ul>
									</div>
									
								</div>
								
								<div class="jbd-02 mt-4">
									<div class="jbd-02-flex d-flex align-items-center justify-content-between">
										<div class="jbl_button mb-2">
											<a href="dashboard-edit-job.php" class="btn btn-md btn-warning rounded fs-sm ft-medium mr-2">Edit Job</a>
											<a href="#" class="btn btn-md btn-danger rounded text-light fs-sm ft-medium">Delete Job</a>
										</div>
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
				</div>
			</section>
					
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