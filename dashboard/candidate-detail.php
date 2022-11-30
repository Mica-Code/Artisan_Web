<?php

$title = "Client Dashboard";
$nav='<ul data-submenu-title="Main Navigation">
<li class="active"><a href="client-index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
<li><a href="dashboard-post-job.php"><i class="lni lni-files mr-2"></i>Post New Job</a></li>
<li><a href="dashboard-manage-jobs.php"><i class="lni lni-add-files mr-2"></i>Manage Jobs</a></li>
<li><a href="dashboard-manage-applications.php"><i class="lni lni-briefcase mr-2"></i>Manage Applicants</a></li>
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


if (isset($_GET['rand']) && isset($_GET['token'])) {

    $Id = $_GET['rand'];
    $Token = $_GET['token'];

    //echo "<script>alert('".$jobId." and ".$jobToken."');</script>";

    if (($Id != '') && ($Token != '')){
        
        $query = "SELECT * from art_reg_tbl where userID='$Id' AND userToken='$Token'";
        $execute = mysqli_query($dbc, $query);
        $num_row=mysqli_num_rows($execute);
        if($num_row > 0){
            $row=mysqli_fetch_array($execute);

			   	$fullnameI = $row['fullname'];
				$username = $row['username'];
				$handworkI = $row['handwork'];
				$locationI = $row['location'];
				$descI = $row['skill_desc'];



			// $query2 = "SELECT * from art_reg_tbl where userID=$postJobUserIDa";
			// $execute2 = mysqli_query($dbc, $query2);

			// $row2=mysqli_fetch_array($execute2);

			// $postJobUserName = $row2['username'];
			
          
        }else{
            echo "<script>window.location='client-index.php'</script>";
        }
    }else{
        echo "<script>window.location='client-index.php'</script>";
    }
}else{
    echo "<script>window.location='client-index.php'</script>";
}


// $q = "SELECT * from appjob WHERE appPostJobID=$jobId AND appArtisanID=$session_id";
// $r = mysqli_query($dbc, $q);
// $no_row = mysqli_num_rows($r);

// if($no_row >  0){
// 	$add_del_app = 1;
// }
?>	
				
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Job Details</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="../Home/index.php">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="../Handworks/index.php?for=<?php echo $handworkI?>&in=<?php echo $locationI?>">Search</a></li>
										<li class="breadcrumb-item"><a href="#">Candidate Details</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<!-- ============================ Candidate Details Start ================================== -->
					<section class="middle" style="background-color:white;">
				<div class="container">
					<div class="row align-items-start justify-content-between">
					
						<div class="col-12 col-md-12 col-lg-4 col-xl-4 text-center miliods">
							<div class="d-block border rounded mfliud-bot mb-4">
								<div class="cdt_author px-2 pt-5 pb-4">
									<div class="dash_auth_thumb circle p-1 border d-inline-flex mx-auto mb-2">
										<img src="assets/img/team-1.jpg" class="img-fluid circle" width="100" alt="" />
									</div>
									<div class="dash_caption mb-3">
										<h4 class="fs-lg ft-medium mb-0 lh-1">Robert V. Ledet</h4>
										<p class="m-0 p-0">Web Designer</p>
										<span class="text-muted smalls"><i class="lni lni-map-marker mr-1"></i>Denver, USA</span>
									</div>
									<div class="jb-list-01-title px-2">
										<span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded theme-cl theme-bg-light">Photoshop</span>
										<span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-warning bg-light-warning">WordPress</span>
										<span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-danger bg-light-danger">Magento</span>
										<span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded text-info bg-light-info">CSS3</span>
										<span class="px-2 mb-2 d-inline-flex py-1 rounded text-purple bg-light-purple">HTML5</span>
									</div>
								</div>
								
								<div class="cdt_caps">
									<div class="job_grid_footer pb-3 px-3 d-flex align-items-center justify-content-between">
										<div class="df-1 text-muted"><i class="lni lni-briefcase mr-1"></i>Full Time</div>
										<div class="df-1 text-muted"><i class="lni lni-laptop-phone mr-1"></i>Web Designer</div>
									</div>	
									<div class="job_grid_footer px-3 d-flex align-items-center justify-content-between">
										<div class="df-1 text-muted"><i class="lni lni-envelope mr-1"></i>themezhub@gmail.com</div>
										<div class="df-1 text-muted"><i class="lni lni-graduation mr-1"></i>3 Year Exp.</div>
									</div>
								</div>
								
								<div class="cdt_caps py-5 px-3">
									<a href="#" class="btn btn-md theme-bg text-light rounded full-width">Download Resume</a>
								</div>
								
							</div>
						</div>
						
						<div class="col-12 col-md-12 col-lg-8 col-xl-8">
						
							<!-- row -->
							<div class="row align-items-start">
								
								<!-- About -->
								<div class="abt-cdt d-block full-width mb-4">
									<h4 class="ft-medium mb-1 fs-md">About Carolyn C. Weldon</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
								</div>
								
								<!-- Hobbies -->
								<div class="abt-cdt d-block full-width mb-4">
									<h4 class="ft-medium mb-1 fs-md">Carolyn C. Weldon Hobbies</h4>
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
								
								<!-- Qualification -->
								<div class="abt-cdt d-block full-width mb-4">
									<h4 class="ft-medium mb-1 fs-md">Qualification</h4>
									<div class="exslio-list mt-3">
										<ul>
											<li>
												<div class="esclio-110 bg-light rounded px-3 py-3">
													<h4 class="mb-0 ft-medium fs-md">High School</h4>
													<div class="esclio-110-info full-width mb-2">
														<span class="text-muted mr-2"><i class="lni lni-graduation mr-1"></i>LBS Academy</span>
														<span class="text-muted mr-2"><i class="lni lni-calendar mr-1"></i>2010</span>
													</div>
													<div class="esclio-110-decs full-width">
														<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam <a href="javascript:void(0);" class="theme-cl">Read More..</a></p>
													</div>
												</div>
											</li>
											
											<li>
												<div class="esclio-110 bg-light rounded px-3 py-3">
													<h4 class="mb-0 ft-medium fs-md">Inter Medium</h4>
													<div class="esclio-110-info full-width mb-2">
														<span class="text-muted mr-2"><i class="lni lni-graduation mr-1"></i>International Inter College</span>
														<span class="text-muted mr-2"><i class="lni lni-calendar mr-1"></i>2012</span>
													</div>
													<div class="esclio-110-decs full-width">
														<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam <a href="javascript:void(0);" class="theme-cl">Read More..</a></p>
													</div>
												</div>
											</li>
											
											<li>
												<div class="esclio-110 bg-light rounded px-3 py-3">
													<h4 class="mb-0 ft-medium fs-md">Gradutation</h4>
													<div class="esclio-110-info full-width mb-2">
														<span class="text-muted mr-2"><i class="lni lni-graduation mr-1"></i>Nandani College</span>
														<span class="text-muted mr-2"><i class="lni lni-calendar mr-1"></i>2015</span>
													</div>
													<div class="esclio-110-decs full-width">
														<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam <a href="javascript:void(0);" class="theme-cl">Read More..</a></p>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								
								<!-- Experience -->
								<div class="abt-cdt d-block full-width mb-4">
									<h4 class="ft-medium mb-1 fs-md">Experience</h4>
									<div class="exslio-list mt-3">
										<ul>
											<li>
												<div class="esclio-110 bg-light rounded px-3 py-3">
													<h4 class="mb-0 ft-medium fs-md">Themezhub Limited</h4>
													<div class="esclio-110-info full-width mb-2">
														<span class="text-muted mr-2"><i class="lni lni-map-marker mr-1"></i>Liverpool, UK</span>
														<span class="text-muted mr-2"><i class="lni lni-laptop-phone mr-1"></i>Web Designer</span>
														<span class="text-muted mr-2"><i class="lni lni-calendar mr-1"></i>2010 - 2012</span>
													</div>
													<div class="esclio-110-decs full-width">
														<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam <a href="javascript:void(0);" class="theme-cl">Read More..</a></p>
													</div>
												</div>
											</li>
											
											<li>
												<div class="esclio-110 bg-light rounded px-3 py-3">
													<h4 class="mb-0 ft-medium fs-md">Waft Technology</h4>
													<div class="esclio-110-info full-width mb-2">
														<span class="text-muted mr-2"><i class="lni lni-map-marker mr-1"></i>Liverpool, UK</span>
														<span class="text-muted mr-2"><i class="lni lni-laptop-phone mr-1"></i>Product Designer</span>
														<span class="text-muted mr-2"><i class="lni lni-calendar mr-1"></i>2012 - 2014</span>
													</div>
													<div class="esclio-110-decs full-width">
														<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam <a href="javascript:void(0);" class="theme-cl">Read More..</a></p>
													</div>
												</div>
											</li>
											
											<li>
												<div class="esclio-110 bg-light rounded px-3 py-3">
													<h4 class="mb-0 ft-medium fs-md">Swap Designd</h4>
													<div class="esclio-110-info full-width mb-2">
														<span class="text-muted mr-2"><i class="lni lni-map-marker mr-1"></i>Liverpool, UK</span>
														<span class="text-muted mr-2"><i class="lni lni-laptop-phone mr-1"></i>UI/UX Designer</span>
														<span class="text-muted mr-2"><i class="lni lni-calendar mr-1"></i>2015 - 2021</span>
													</div>
													<div class="esclio-110-decs full-width">
														<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam <a href="javascript:void(0);" class="theme-cl">Read More..</a></p>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
								
								<!-- Skills -->
								<div class="abt-cdt d-block full-width">
									<h4 class="ft-medium mb-1 fs-md">Skills</h4>
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
							<!-- row -->
							
						</div>
						
					</div>
				</div>
			</section>
			<!-- ======================= Dashboard Detail End ======================== -->
			
			
					
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