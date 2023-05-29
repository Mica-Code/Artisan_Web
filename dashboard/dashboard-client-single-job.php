<?php

$title = "View Job";
$nav='<ul data-submenu-title="Main Navigation">
<li><a href="client-index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
<li><a href="dashboard-post-job.php"><i class="lni lni-files mr-2"></i>Post New Job</a></li>
<li class="active"><a href="dashboard-manage-jobs.php"><i class="lni lni-add-files mr-2"></i>Manage Jobs</a></li>
<li><a href="dashboard-manage-applications.php"><i class="lni lni-briefcase mr-2"></i>Manage Applicants</a></li>
<li ><a href="report-client.php"><i class="lni lni-files mr-2"></i>Generate Report</a></li>
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


if (isset($_GET['JobID']) && isset($_GET['JobToken'])) {

    $jobId = $_GET['JobID'];
    $jobToken = $_GET['JobToken'];

    //echo "<script>alert('".$jobId." and ".$jobToken."');</script>";

    if (($jobId != '') && ($jobToken != '')){
        
        $query = "SELECT * from postjob where postJobID='$jobId' AND postJobToken='$jobToken'";
        $execute = mysqli_query($dbc, $query);
        $num_row=mysqli_num_rows($execute);
        if($num_row > 0){
            $row=mysqli_fetch_array($execute);

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
            $postJobMinBud = $row['postJobMinBudget'];
            $postJobMaxBud = $row['postJobMaxBudget'];
            $postJobToken = $row['postJobToken'];	
			$postJobUserID = $row['userID'];	

			$query2 = "SELECT * from art_reg_tbl where userID=$postJobUserID";
			$execute2 = mysqli_query($dbc, $query2);

			$row2=mysqli_fetch_array($execute2);

			$postJobUserName = $row2['username'];

			
          
        }else{
            echo "<script>window.location='dashboard-manage-jobs.php'</script>";
        }
    }else{
        echo "<script>window.location='dashboard-manage-jobs.php'</script>";
    }
}else{
    echo "<script>window.location='dashboard-manage-jobs.php'</script>";
}


if(isset($_POST['editJob'])){
	require("editJob-Process.php");
}

?>	
				
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">View Job</h1>
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
					
					<section class="middle" style="background-color:white;">
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
											<div class="ft-medium medium"><span><?php echo $postJobUserName;?></span></div>
											<h4 class="mb-3 ft-medium fs-lg"><?php echo $postJobTitle;?><img src="assets/img/verify.svg" class="ml-1" width="12" alt=""></h4>
										</div>
										<div class="jbd-list mb-2">
											<span class="px-2 py-1 rounded theme-cl theme-bg-light mr-2"><i class="lni lni-briefcase mr-1"></i><?php echo $postJobType;?></span>
											<span><i class="lni lni-map-marker mr-1"></i><?php echo $postJobLocation;?>, Lagos</span>
											<!-- <span class="px-2 py-1 rounded text-warning bg-light-warning ml-2"><i class="lni lni-star mr-1"></i>Featured</span> -->
											<span class="rounded ml-2"><i class="lni lni-money-protection mr-1"></i>&#x20A6;<?php echo $postJobMinBud;?> - &#x20A6;<?php echo $postJobMaxBud;?></span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="rounded mb-4">
								<div class="jbd-01">

									<div class="jbd-details mb-4">
										<h5 class="ft-medium fs-md">Job description</h5>
										<p><?php echo $postJobDesc;?></p>
									</div>

									<div class="jbd-details mb-4">
										<h5 class="ft-medium fs-md">Other Information</h5>
										<div class="other-details">
											<div class="details ft-medium"><label class="text-muted">Profession Needed</label><span class="text-dark"><?php echo $postJobProfession;?></span></div>
											<div class="details ft-medium"><label class="text-muted">Experience</label><span class="text-dark"><?php echo $postJobLevel;?></span></div>
											<div class="details ft-medium"><label class="text-muted">Employment Type</label><span class="text-dark"><?php echo $postJobType;?></span></div>
											<div class="details ft-medium"><label class="text-muted">Gender</label><span class="text-dark"><?php echo $postJobGender;?></span></div>
											<div class="details ft-medium"><label class="text-muted">Posted Date</label><span class="text-dark"><?php 
													$phpdate = strtotime( $postJobDate );
													$mysqldate = date( 'j M Y', $phpdate);
													echo $mysqldate;?></span></div>
											<div class="details ft-medium"><label class="text-muted">Expiration Date</label><span class="text-dark"><?php 
													$phpdate = strtotime( $postJobDeadline );
													$mysqldate = date( 'j M Y', $phpdate);
													echo $mysqldate;?></span></div>
											<div class="details ft-medium"><label class="text-muted">Address</label><span class="text-dark"><?php echo $postJobAddress;?></span></div>
										</div>


										<!-- The Job status -->

										<br><h5 class="ft-medium fs-md">Job Status: 
											<?php 
										
												//Getting Applicants for the Job
												$query3 = "SELECT * from appjob where appPostJobID=$postJobID and (appStatus='Active' OR appStatus='Completed')";
												$execute3 = mysqli_query($dbc, $query3);

												if(mysqli_num_rows($execute3) > 0){
													$row3=mysqli_fetch_array($execute3);
													$appPostJobStatus = $row3['appStatus'];
													$appArtisanID = $row3['appArtisanID'];
													$appActiveDate = $row3['activeJobDate'];
													$appCompleteDate = $row3['completedJobDate'];

													$query3b = "SELECT * from art_reg_tbl where userID=$appArtisanID";
													$execute3b = mysqli_query($dbc, $query3b);

													$row3b=mysqli_fetch_array($execute3b);

													$applicantName = $row3b["fullname"];
													$passToken = $row3b['userToken'];

													if($appPostJobStatus == 'Completed'){
	
													$phpdate2 = strtotime( $appCompleteDate );
													$mysqldate2 = date( 'j M Y', $phpdate2);


														echo "<span class='btn text-success' style='font-size:20px;'>Completed on </span><span><i class='lni lni-calendar mr-1'></i>".$mysqldate2."</span>";

														echo "<br>";

														echo "<span style='color:#821700;'>".$applicantName."</span> Completed this Job - <a href='candidate-detail.php?rand=".$appArtisanID."&token=".$passToken."&JobID=".$postJobID."&JobToken=".$postJobToken."'><span class='btn bg-light-info text-info'>View Info</span></a>";
													}
													elseif($appPostJobStatus == 'Active'){
														$phpdate2 = strtotime( $appActiveDate );
														$mysqldate2 = date( 'j M Y', $phpdate2);


														echo "<span class='btn text-info' style='font-size:20px;'>Active on </span><span><i class='lni lni-calendar mr-1'></i>".$mysqldate2."</span>";

														echo "<br>";

														echo "<span style='color:#821700;'>".$applicantName."</span> is Currently Active on this Job - <a href='candidate-detail.php?rand=".$appArtisanID."&token=".$passToken."&JobID=".$postJobID."&JobToken=".$postJobToken."'><span class='btn bg-light-info text-info'>View Info</span></a>";
													}
												}else{
													$query4 = "SELECT * from appjob where appPostJobID=$postJobID and appStatus='Pending'";
													$execute4 = mysqli_query($dbc, $query4);

													if(mysqli_num_rows($execute4) > 0){
														$sn = 1;
														while($row4=mysqli_fetch_array($execute4)){
														$appPostJobStatus = $row4['appStatus'];
														$appArtisanID = $row4['appArtisanID'];

														$query4b = "SELECT * from art_reg_tbl where userID=$appArtisanID";
														$execute4b = mysqli_query($dbc, $query4b);

														$row4b=mysqli_fetch_array($execute4b);

														$applicantName = $row4b["fullname"];
														$passToken = $row4b['userToken'];

														echo "<span class='text-warning' style='font-size:20px;'>Pending</span>";

														echo "<br><br>";

														echo "<h5 class='ft-medium fs-md'>List of Applicant(s) for this Job</h5>";

														echo "".$sn.".<span style='color:#821700; font-size:16px; font-weight:bold;'> ".$applicantName."</span> - <a href='candidate-detail.php?rand=".$appArtisanID."&token=".$passToken."&JobID=".$postJobID."&JobToken=".$postJobToken."'><span class='btn bg-light-info text-info' style='font-size:14px; padding:5px;'>View Info</span></a>";
														$sn++;
														}
														// echo "<span class='text-warning' style='font-size:24px;'>Pending</span>";
													}else{
														echo "<span class='text-warning' style='font-size:24px;'>Pending</span>";
														// echo "No One has Applied for this Job";
													}
												}

												
											?>
											</h5>
									</div>
									
									<!-- <div class="jbd-details mb-3">
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
									</div> -->
									
								</div>
								
								<div class="jbd-02 mt-4">
									<div class="jbd-02-flex d-flex align-items-center justify-content-between">
										<div class="jbl_button mb-2">
											<?php
											if ($postJobStatus == 'Pending'){?>
											<a href="dashboard-edit-job.php?JobID=<?php echo $postJobID;?>&JobToken=<?php echo $postJobToken;?>" class="btn btn-md btn-warning rounded fs-sm ft-medium mr-2">Edit Job</a>
											<a onclick="return confirm('Are you sure you want to delete this Job? \n This Action cannot be reversed!');" href='dashboard-delete-job.php?JobID=<?php echo $postJobID; ?>&JobToken=<?php echo $postJobToken;?>' class="btn btn-md btn-danger rounded text-light fs-sm ft-medium">Delete Job</a>
											<?php
											}else{
												?>
											<a class="btn btn-md rounded fs-sm ft-medium mr-2" style="color:#868E96; background-color:#EDEDED;">Edit Job</a>
											<a class="btn btn-md rounded fs-sm ft-medium" style="color:#868E96; background-color:#EDEDED;">Delete Job</a>

											<!-- <h5 class="text-danger" style="margin-top:20px;">This Job is <?php echo $postJobStatus; ?></h5> -->
											<?php } ?>
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