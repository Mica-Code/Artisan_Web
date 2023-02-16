<?php

$title = "Client Dashboard";
$nav='<ul data-submenu-title="Main Navigation">
<li><a href="client-index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
<li><a href="dashboard-post-job.php"><i class="lni lni-files mr-2"></i>Post New Job</a></li>
<li><a href="dashboard-manage-jobs.php"><i class="lni lni-add-files mr-2"></i>Manage Jobs</a></li>
<li class="active"><a href="dashboard-manage-applications.php"><i class="lni lni-briefcase mr-2"></i>Manage Applicants</a></li>
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
        
		//Selecting all data about the artisan from the registration table
        $query = "SELECT * from art_reg_tbl where userID='$Id' AND userToken='$Token'";
        $execute = mysqli_query($dbc, $query);
        $num_row=mysqli_num_rows($execute);
        if($num_row > 0){
            $row=mysqli_fetch_array($execute);

			$fullnameI = $row['fullname'];
			$usernameI = $row['username'];
			$handworkI = $row['handwork'];
			$locationI = $row['location'];
			$descI = $row['skill_desc'];
			$aboutI = $row['about'];
			$jobTypeI = $row['jobType'];
			$experienceI = $row['experience'];
			$emailI = $row['email'];
			$phoneI = $row['phone'];
			$addressI = $row['address'];
			$ageI = $row['age'];
			$pro_picI = $row['profile_pic'];

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
								<h1 class="ft-medium">Candidate Details</h1>
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
					<div class="row align-items-start justify-content-between" style="padding-right:20px;">
					
						<div class="col-12 col-md-12 col-lg-4 col-xl-4 text-center miliods">
							<div class="d-block border rounded mfliud-bot mb-4">
								<div class="cdt_author px-2 pt-5 pb-4">
									<div class="dash_auth_thumb circle p-1 border d-inline-flex mx-auto mb-2">
										<img src="../Account/<?php echo $pro_picI?>" class="img-fluid circle" width="100" alt="" />
									</div>
									<div class="dash_caption mb-3">
										<h4 class="fs-lg ft-medium mb-0 lh-1"><?php echo $fullnameI;?></h4>
										<p class="m-0 p-0"><?php echo $handworkI;?></p>
										<span class="text-muted smalls"><i class="lni lni-map-marker mr-1"></i><?php echo $locationI;?>, Lagos</span>
									</div>
									<div class="jb-list-01-title px-2">
									<?php

										$bgcolor = ['theme-bg-light', 'bg-light-warning', 'bg-light-danger', 'bg-light-info', 'bg-light-purple'];
										$fgcolor = ['theme-cl', 'text-warning', 'text-danger', 'text-info', 'text-purple'];

										$new_rand = 0;

										$ski = "SELECT * from skill WHERE userID=$Id";
										$exec_ski = mysqli_query($dbc, $ski);

										if(mysqli_num_rows($exec_ski) > 0){
											while($row_ski = mysqli_fetch_array($exec_ski)){

											$skiIDI = $row_ski['skiID'];
											$skinameI = $row_ski['skiName'];
											$skipercentI = $row_ski['skiPercent'];
											$skitokenI = $row_ski['skiToken'];
											
											$random = rand(0,4);

											if($new_rand == $random){
												if($random == 4){
													if($random != 1){
														$new_rand = 1;
													}
													else{
														$new_rand = 3;
													}
														
												}else{
													$new_rand = $random + 1;
												}
												
											}
											else{
												$new_rand = $random;
											}
											
											// echo "<script>alert('Random is ".$random." and New random is ".$new_rand."')</script>";
											
											
										?>
										<span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded <?php echo $fgcolor[$new_rand]?> <?php echo $bgcolor[$new_rand]?>"><?php echo $skinameI;?></span>

										<?php
										}}
										?>
									</div>
								</div>
								
								<div class="cdt_caps">
									<div class="job_grid_footer pb-3 px-3 d-flex align-items-center justify-content-between">
										<div class="df-1 text-muted"><i class="lni lni-briefcase mr-1"></i><?php echo $jobTypeI;?></div>
										<div class="df-1 text-muted"><i class="lni lni-laptop-phone mr-1"></i><?php echo $handworkI;?></div>
									</div>	
									<div class="job_grid_footer px-3 d-flex align-items-center justify-content-between">
										<div class="df-1 text-muted"><i class="lni lni-envelope mr-1"></i><?php echo $emailI;?></div>
										<div class="df-1 text-muted"><i class="lni lni-graduation mr-1"></i><?php echo $experienceI;?></div>
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
									<h4 class="ft-medium mb-1 fs-md">About <?php echo $fullnameI;?></h4>
									<p><?php echo $aboutI;?></p>
									
								</div>
								
								<!-- Skill Description -->
								<div class="abt-cdt d-block full-width mb-4">
									<h4 class="ft-medium mb-1 fs-md">Skill Description</h4>
									<p><?php echo $descI;?></p>
									
								</div>
								
								<!-- Qualification -->
								<div class="abt-cdt d-block full-width mb-4">
									<h4 class="ft-medium mb-1 fs-md">Qualification</h4>
									<div class="exslio-list mt-3">
										<ul>
											<?php
											
												//Selecting all data about the artisan from the education table
												$edu = "SELECT * from education WHERE userID=$Id";
												$exec_edu = mysqli_query($dbc, $edu);

												if(mysqli_num_rows($exec_edu) > 0){
													while($row_edu = mysqli_fetch_array($exec_edu)){

													$eduIDI = $row_edu['eduID'];
													$edunameI = $row_edu['eduSchoolName'];
													$eduqtitleI = $row_edu['eduQualification'];
													$edustartdateI = $row_edu['eduStartDate'];
													$eduenddateI = $row_edu['eduEndDate'];
													$eduTokenI = $row_edu['eduToken'];
											
											?>
											<li>
												<div class="esclio-110 bg-light rounded px-3 py-3">
													<h4 class="mb-0 ft-medium fs-md"><?php echo $eduqtitleI;?></h4>
													<div class="esclio-110-info full-width mb-2">
														<span class="text-muted mr-2"><i class="lni lni-graduation mr-1"></i><?php echo $edunameI;?></span>
														<span class="text-muted mr-2"><i class="lni lni-calendar mr-1"></i><?php 
													$phpdate2 = strtotime( $edustartdateI );
													$mysqldate2 = date( 'Y', $phpdate2);
													echo $mysqldate2;?></span> 
													<span class="text-muted mr-2"> ---- </span> 
													<span class="text-muted mr-2"><i class="lni lni-calendar mr-1"></i><?php 
													$phpdate2 = strtotime( $eduenddateI );
													$mysqldate2 = date( 'Y', $phpdate2);
													echo $mysqldate2;?></span> 
													</div>
													
												</div>
											</li>
											<?php
											}}
											?>
											
										</ul>
									</div>
								</div>
								
								<!-- Experience -->
								<div class="abt-cdt d-block full-width mb-4">
									<h4 class="ft-medium mb-1 fs-md">Experience</h4>
									<div class="exslio-list mt-3">
										<ul>
										<?php

											//Selecting all data about the artisan from the experience table
											$exp = "SELECT * from experience WHERE userID=$Id";
											$exec_exp = mysqli_query($dbc, $exp);

											if(mysqli_num_rows($exec_exp) > 0){
												while($row_exp = mysqli_fetch_array($exec_exp)){

												$expIDI = $row_exp['expID'];
												$expnameI = $row_exp['expEmployerName'];
												$expqtitleI = $row_exp['expJobTitle'];
												$expstartdateI = $row_exp['expStartDate'];
												$expenddateI = $row_exp['expEndDate'];
												$expnoteI = $row_exp['expJobDesc'];
												$expTokenI = $row_exp['expToken'];
			

										?>
											<li>
												<div class="esclio-110 bg-light rounded px-3 py-3">
													<h4 class="mb-0 ft-medium fs-md"><?php echo $expqtitleI?></h4>
													<div class="esclio-110-info full-width mb-2">
														<span class="text-muted mr-2"><i class="lni lni-laptop-phone mr-1"></i><?php echo $expnameI?></span>
														<span class="text-muted mr-2"><i class="lni lni-calendar mr-1"></i><?php 
													$phpdate2 = strtotime( $expstartdateI );
													$mysqldate2 = date( 'Y', $phpdate2);
													echo $mysqldate2;?></span> 
													<span class="text-muted mr-2"> ---- </span> 
													<span class="text-muted mr-2"><i class="lni lni-calendar mr-1"></i><?php 
													$phpdate2 = strtotime( $expenddateI );
													$mysqldate2 = date( 'Y', $phpdate2);
													echo $mysqldate2;?></span> 
													</div>
													<div class="esclio-110-decs full-width">
														<p><?php echo $expnoteI?></p>
													</div>
												</div>
											</li>
											<?php 
										}}
										?>
										</ul>
									</div>
								</div>
								
								<!-- Skills -->
								<div class="abt-cdt d-block full-width">
									<h4 class="ft-medium mb-1 fs-md">Skills</h4>
									<ul class="p-0 skills_tag text-left">
									<?php

										$bgcolor = ['theme-bg-light', 'bg-light-warning', 'bg-light-danger', 'bg-light-info', 'bg-light-purple'];
										$fgcolor = ['theme-cl', 'text-warning', 'text-danger', 'text-info', 'text-purple'];

										$new_rand = 0;

										$ski = "SELECT * from skill WHERE userID=$Id";
										$exec_ski = mysqli_query($dbc, $ski);

										if(mysqli_num_rows($exec_ski) > 0){
											while($row_ski = mysqli_fetch_array($exec_ski)){

											$skiIDI = $row_ski['skiID'];
											$skinameI = $row_ski['skiName'];
											$skipercentI = $row_ski['skiPercent'];
											$skitokenI = $row_ski['skiToken'];
											
											$random = rand(0,4);

											if($new_rand == $random){
												if($random == 4){
													if($random != 1){
														$new_rand = 1;
													}
													else{
														$new_rand = 3;
													}
														
												}else{
													$new_rand = $random + 1;
												}
												
											}
											else{
												$new_rand = $random;
											}
											
											// echo "<script>alert('Random is ".$random." and New random is ".$new_rand."')</script>";
											
											
										?>
										<span class="px-2 py-1 medium skill-bg rounded text-dark"><?php echo $skinameI;?></span>

										<?php
										}}
										?>
										
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