<?php

$title = "Change Password";
$nav='<ul data-submenu-title="Main Navigation">
<li><a href="index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
<!-- S<li><a href="dashboard-manage-resume.php"><i class="lni lni-files mr-2"></i>Manage Resumes</a></li> -->
<li><a href="dashboard-add-resume.php"><i class="lni lni-add-files mr-2"></i>Create Resume</a></li>
<li><a href="dashboard-applied-jobs.php"><i class="lni lni-briefcase mr-2"></i>Applied jobs</a></li>
<li><a href="dashboard-alert-job.php"><i class="ti-bell mr-2"></i>Alert Jobs<span class="count-tag bg-warning">4</span></a></li>
<!-- <li><a href="dashboard-saved-jobs.php"><i class="lni lni-bookmark mr-2"></i>Bookmark Jobs</a></li> -->
<!-- <li><a href="dashboard-packages.php"><i class="lni lni-mastercard mr-2"></i>Packages</a></li>
<li><a href="dashboard-messages.php"><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a></li> -->
</ul>
<ul data-submenu-title="My Accounts">
<li><a href="dashboard-my-profile.php"><i class="lni lni-user mr-2"></i>My Profile </a></li>
<li class="active"><a href="dashboard-change-password.php"><i class="lni lni-lock-alt mr-2"></i>Change Password</a></li>
<li><a href="javascript:void(0);"><i class="lni lni-trash-can mr-2"></i>Delete Account</a></li>
<li><a href="logout.php"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
</ul>';


include_once('include/head.php');
?>			
			
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Change Password</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Change Password</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="_dashboard_content bg-white rounded mb-4">
									<div class="_dashboard_content_header br-bottom py-3 px-3">
										<div class="_dashboard__header_flex">
											<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-lock mr-1 theme-cl fs-sm"></i>Change Password</h4>	
										</div>
									</div>
									
									<div class="_dashboard_content_body py-3 px-3">
										<form class="row">
											<div class="col-xl-8 col-lg-9 col-md-12 col-sm-12">
												<div class="form-group">
													<label class="text-dark ft-medium">Old Password</label>
													<input type="text" class="form-control rounded" placeholder="">
												</div>
											</div>
											<div class="col-xl-8 col-lg-9 col-md-12 col-sm-12">
												<div class="form-group">
													<label class="text-dark ft-medium">New Password</label>
													<input type="text" class="form-control rounded" placeholder="">
												</div>
											</div>
											<div class="col-xl-8 col-lg-9 col-md-12 col-sm-12">
												<div class="form-group">
													<label class="text-dark ft-medium">Confirm Password</label>
													<input type="text" class="form-control rounded" placeholder="">
												</div>
											</div>
											<div class="col-xl-12 col-lg-12">
												<div class="form-group">
													<button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save Changes</button>
												</div>
											</div>
											
										</form>
									</div>
								</div>
							</div>
						</div>
							
					</div>
					<?php
include_once('include/footer.php');
?>			