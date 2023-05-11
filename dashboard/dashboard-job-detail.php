<?php

$title = "Job Details";
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

// $add_del_app = 0;

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

			$postJobIDa = $row['postJobID'];
            $postJobTitlea = $row['postJobTitle'];
            $postJobDesca = $row['postJobDesc'];
            $postJobProfessiona = $row['postJobProfession'];
            $postJobLevela = $row['postJobLevel'];
            $postJobTypea = $row['postJobType'];
            $postJobGendera = $row['postJobGender'];
            $postJobDeadlinea = $row['postJobDeadline'];
            $postJobLocationa = $row['postJobLocation'];
            $postJobAddressa = $row['postJobAddress'];
            $postJobDatea = $row['postJobDate'];
            $postJobStatusa = $row['postJobStatus'];
            $postJobMinBuda = $row['postJobMinBudget'];
            $postJobMaxBuda = $row['postJobMaxBudget'];
            $postJobTokena = $row['postJobToken'];	
			$postJobUserIDa = $row['userID'];	

			$query2 = "SELECT * from art_reg_tbl where userID=$postJobUserIDa";
			$execute2 = mysqli_query($dbc, $query2);

			$row2=mysqli_fetch_array($execute2);

			$postJobUserName = $row2['username'];
			
          
        }else{
            echo "<script>window.location='dashboard-alert-job.php'</script>";
        }
    }else{
        echo "<script>window.location='dashboard-alert-job.php'</script>";
    }
}else{
    echo "<script>window.location='dashboard-alert-job.php'</script>";
}

?>	
				
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Job Details</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="index.php">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="dashboard-alert-job.php">Vacant Jobs</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Job Details</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<!-- ============================ Job Details Start ================================== -->
			<section class="bg-light py-5 position-relative">
				<div class="container">
					<div class="row">
						
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
						
							<div class="bg-white rounded px-3 py-4 mb-4">
								<div class="jbd-01 d-flex align-items-center justify-content-between">
									<div class="jbd-flex d-flex align-items-center justify-content-start">
										<div class="jbd-01-thumb">
											<img src="assets/img/c-1.png" class="img-fluid" width="90" alt="" />
										</div>
										<div class="jbd-01-caption pl-3">
											<div class="tbd-title"><h4 class="mb-0 ft-medium fs-md"><?php echo $postJobTitlea;?></h4></div>
											<div class="jbl_location mb-3"><span><i class="lni lni-map-marker mr-1"></i><?php echo $postJobLocationa;?>, Lagos</span><span class="medium ft-medium text-warning ml-3"><?php echo $postJobLevela;?></span></div>
											<div class="jbl_info01">
												<span class="px-2 py-1 ft-medium medium rounded theme-cl theme-bg-light mr-2"><?php echo $postJobTypea;?></span>
												<span class="rounded ml-2"><i class="lni lni-money-protection mr-1"></i>&#x20A6;<?php echo $postJobMinBuda;?> - &#x20A6;<?php echo $postJobMaxBuda;?></span>											
											</div>
										</div>
									</div>
									<div class="jbd-01-right text-right hide-1023">

									<?php
										// echo "<script>alert('Before')</script>";
										// $q1 = "SELECT * from appjob WHERE appPostJobID=$postJobIDa AND appStatus='Completed'";
										$q1 = "SELECT * from appjob WHERE (appPostJobID = $postJobIDa AND appStatus = 'Active') OR (appPostJobID = $postJobIDa AND appStatus = 'Completed')";
										// echo "<script>alert('After1')</script>";
										$r1 = mysqli_query($dbc, $q1); 


										// echo "<script>alert('After')</script>";
										$no_row1 = mysqli_num_rows($r1);

										


										// echo "<script>alert('". $postJobIDa."')</script>";
										// echo "<script>alert('".$no_row1."')</script>";

										if($no_row1 < 1){

											$q = "SELECT * from appjob WHERE appPostJobID=$postJobIDa AND appArtisanID=$session_id";
											$r = mysqli_query($dbc, $q);
											$no_row = mysqli_num_rows($r);

											if($no_row <  1){
											?>
											<div class="jbl_button mb-2"><a onclick="return confirm('You are about to apply for this Job, \nYour Resume will be Provided to the Employer. \nIt is adviced to keep your resume up to date \nto increase your chances');" href="dashboard-apply-job.php?JobID=<?php echo $jobId; ?>&JobToken=<?php echo $jobToken;?>" class="btn rounded theme-bg-light theme-cl fs-sm ft-medium">Apply This Job</a></div>

										<?php
										}
										else{?>
											<div class="jbl_button mb-2"><a onclick="return confirm('You are about to cancel you application \nfor this Job.');" href="dashboard-delete-apply-job.php?JobID=<?php echo $jobId; ?>&JobToken=<?php echo $jobToken;?>" class="btn rounded fs-sm ft-medium" style="color:#b62828; background-color:#b628281c;">Delete Application</a></div>

										<?php
										}
									}else{?>
										<div class="jbl_button mb-2"><a class="btn rounded fs-sm ft-medium" style="color:#868E96; background-color:#EDEDED;">Application Closed</a></div>
									<?php
									}
										?>

										<div class="jbl_button"><a href="index.php" class="btn rounded bg-white border fs-sm ft-medium">Return Home</a></div>
									</div>
								</div>
							</div>
							
							<div class="bg-white rounded mb-4">
								<div class="jbd-01 px-3 py-4">
									<div class="jbd-details mb-4">
										<h5 class="ft-medium fs-md">Job description</h5>
										<p><?php echo $postJobDesca;?></p>
									</div>



								
														
														


									<div class="jbd-details mb-4">
										<h5 class="ft-medium fs-md">Other Information</h5>
										<div class="other-details">
										<div class="details ft-medium"><label class="text-muted">Client Usename</label><span class="text-dark"><?php echo $postJobUserName;?></span></div>
											<div class="details ft-medium"><label class="text-muted">Profession Needed</label><span class="text-dark"><?php echo $postJobProfessiona;?></span></div>
											<div class="details ft-medium"><label class="text-muted">Experience</label><span class="text-dark"><?php echo $postJobLevela;?></span></div>
											<div class="details ft-medium"><label class="text-muted">Employment Type</label><span class="text-dark"><?php echo $postJobTypea;?></span></div>
											<div class="details ft-medium"><label class="text-muted">Gender</label><span class="text-dark"><?php echo $postJobGendera;?></span></div>
											<div class="details ft-medium"><label class="text-muted">Posted Date</label><span class="text-dark"><?php 
													$phpdate = strtotime( $postJobDatea );
													$mysqldate = date( 'j M Y', $phpdate);
													echo $mysqldate;?></span></div>
											<div class="details ft-medium"><label class="text-muted">Expiration Date</label><span class="text-dark"><?php 
													$phpdate = strtotime( $postJobDeadlinea );
													$mysqldate = date( 'j M Y', $phpdate);
													echo $mysqldate;?></span></div>
											<div class="details ft-medium"><label class="text-muted">Address</label><span class="text-dark"><?php echo $postJobAddressa;?></span></div>
										</div>
									</div>
								

								
								<div class="jbd-02 px-3 py-3 br-top">
									<div class="jbd-02-flex d-flex align-items-center justify-content-between">
		
										<div class="jbd-02-aply">
											<div class="jbl_button mb-2">
												<a href="index.php" class="btn btn-md rounded gray fs-sm ft-medium mr-2">Return Home</a>
												
												<?php
												// echo "<script>alert('Before')</script>";
										// $q1 = "SELECT * from appjob WHERE appPostJobID=$postJobIDa AND appStatus='Completed'";
										$q1 = "SELECT * from appjob WHERE (appPostJobID = $postJobIDa AND appStatus = 'Active') OR (appPostJobID = $postJobIDa AND appStatus = 'Completed')";
										// echo "<script>alert('After1')</script>";
										$r1 = mysqli_query($dbc, $q1); 


										// echo "<script>alert('After')</script>";
										$no_row1 = mysqli_num_rows($r1);

										


										// echo "<script>alert('". $postJobIDa."')</script>";
										// echo "<script>alert('".$no_row1."')</script>";

										if($no_row1 < 1){

											$q = "SELECT * from appjob WHERE appPostJobID=$postJobIDa AND appArtisanID=$session_id";
											$r = mysqli_query($dbc, $q);
											$no_row = mysqli_num_rows($r);

											if($no_row < 1){
											?>
											<a onclick="return confirm('You are about to apply for this Job, \nYour Resume will be Provided to the Employer. \nIt is adviced to keep your resume up to date \nto increase your chances');" href="dashboard-apply-job.php?JobID=<?php echo $jobId; ?>&JobToken=<?php echo $jobToken;?>" class="btn btn-md rounded theme-bg text-light fs-sm ft-medium">Apply Job</a>

										<?php
										}
										else{?>
											<a onclick="return confirm('You are about to cancel you application \nfor this Job.');" href="dashboard-delete-apply-job.php?JobID=<?php echo $jobId; ?>&JobToken=<?php echo $jobToken;?>" class="btn btn-md rounded text-light fs-sm ft-medium" style="background-color:#b62828;">Delete Application</a>
										
										<?php
										}
									}else{?>
										<a class="btn btn-md rounded fs-sm ft-medium" style="color:#868E96; background-color:#EDEDED;">Application Closed</a>
										<?php
									}
										?>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>
											
					</div>
				</div>
			</section>
			<!-- ============================ Job Details End ================================== -->
			
					
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