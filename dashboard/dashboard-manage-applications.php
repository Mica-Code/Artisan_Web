<?php

$title = "Manage Applicants";
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
?>		
				
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Manage Jobs</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Manage Jobs</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
							
								<!-- <div class="px-3 py-2 br-bottom br-top bg-white rounded mb-3">
									<div class="flixors">
										<div class="row align-items-center justify-content-between">
											<div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
												<h6 class="mb-0 ft-medium fs-sm">07 New Applicants Found</h6>
											</div>
											
											<div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
												<div class="filter_wraps elspo_wrap d-flex align-items-center justify-content-end">
													<div class="single_fitres mr-2">
														<select class="custom-select simple">
														  <option value="1" selected="">Default Sorting</option>
														  <option value="2">Short By Name</option>
														  <option value="3">Short By Rating</option>
														  <option value="4">Short By Trending</option>
														  <option value="5">Shot By Recent</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										
									</div>
								</div> -->
								
								<div class="data-responsive">

								<?php

								$total_app = "SELECT * from appjob WHERE appClientID=$session_id";
								$exec = mysqli_query($dbc, $total_app);

								if(mysqli_num_rows($exec)>0){
								while($row = mysqli_fetch_array($exec)){
									
								$appJobID = $row['appJobID'];
								$appPostJobID = $row['appPostJobID'];
								$appClientID = $row['appClientID'];
								$appArtisanID = $row['appArtisanID'];
								$appStatus = $row['appStatus'];
								$appJobDate = $row['appJobDate'];

								$job_title = "SELECT * from postjob WHERE postJobID=$appPostJobID";
								$exec3 = mysqli_query($dbc, $job_title);
								$row3 = mysqli_fetch_array($exec3);

								$jobTitle = $row3['postJobTitle'];

								$app_info = "SELECT * from art_reg_tbl WHERE userID=$appArtisanID";
								$exec2 = mysqli_query($dbc, $app_info);
								$row2 = mysqli_fetch_array($exec2);

								$fullname = $row2['fullname'];
								$location = $row2['location'];
								$handwork = $row2['handwork'];
								$jobTypeR = $row2['jobType'];
								$experienceR = $row2['experience'];

								?> 
									
									<!-- Single List -->
									<div class="dashed-list-wrap bg-white rounded mb-3">
										<div class="dashed-list-full bg-white rounded p-3 mb-3">
											<div class="dashed-list-short d-flex align-items-center">
												<div class="dashed-list-short-first">
													<div class="dashed-avater"><img src="assets/img/t-3.png" class="img-fluid circle" width="70" alt="" /></div>
												</div>
												<div class="dashed-list-short-last">
													<div class="cats-box-caption px-2">
														<h4 class="fs-lg mb-0 ft-medium theme-cl"><?php echo $fullname;?></h4>
														<br>
														<div class="d-block mb-2 position-relative">
														<span class="text-muted mr-2"><i class="lni lni-map-marker mr-1"></i><?php echo $location?>, Lagos</span>
														<span class="text-muted mr-2"><i class="lni lni-tag mr-1"></i><?php echo $handwork;?></span>
														<span class="text-muted mr-2"><i class="lni lni-briefcase mr-1"></i><?php echo $jobTypeR;?></span>
														<span class="text-muted mr-2"><i class="lni lni-graduation mr-1"></i><?php echo $experienceR;?></span>
															<!-- <span><i class="lni lni-map-marker mr-1"></i><?php //echo $location;?>, Lagos</span>
															<span class="ml-2"><i class="lni lni-briefcase mr-1"></i><?php //echo $handwork;?></span> -->
														</div>
														<div class="ico-content">
															<ul>
																<?php

																	$bgcolor = ['theme-bg-light', 'bg-light-warning', 'bg-light-danger'];
																	$fgcolor = ['theme-cl', 'text-warning', 'text-danger'];

																	// $app_info = "SELECT * from art_reg_tbl WHERE userID=$appArtisanID";
																	// $exec2 = mysqli_query($dbc, $app_info);
																	// $row2 = mysqli_fetch_array($exec2);

																	$skills = "SELECT * from skill WHERE userID=$appArtisanID";
																	$exec4 = mysqli_query($dbc, $skills);

																	$new_rand = 0;
									
																	if(mysqli_num_rows($exec4)>0){
																		while($row = mysqli_fetch_array($exec4)){
																			
																			$skiName = $row['skiName'];	
																			$random = rand(0,2);
		
																			if($new_rand == $random){
																				if($random == 2){
																					if($random != 1){
																						$new_rand = 1;
																					}
																					else{
																						$new_rand = 0;
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
																	<span class="mr-2 mb-2 d-inline-flex px-2 py-1 rounded <?php echo $fgcolor[$new_rand]?> <?php echo $bgcolor[$new_rand]?>"><?php echo $skiName;?></span>
																
																	<?php
																	}}
																	?>
																<!-- <li><a href="#" data-toggle="modal" data-target="#message" class="px-2 py-1 medium bg-light-info rounded text-info"><i class="lni lni-envelope mr-1"></i>Message</a></li> -->
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="dashed-list-last">
												<div class="text-left">
												<a href="candidate-detail.php" class="btn gray ft-medium apply-btn fs-sm rounded mr-1"><i class="lni lni-arrow-right-circle mr-1"></i>View More Information</a>
													<!-- <a href="#" data-toggle="modal" data-target="#edit" class="btn gray ft-medium apply-btn fs-sm rounded mr-1"><i class="lni lni-arrow-right-circle mr-1"></i>Edit</a>
													<a href="#" data-toggle="modal" data-target="#note" class="btn gray ft-medium apply-btn fs-sm rounded mr-1"><i class="lni lni-add-files mr-1"></i>Note</a> -->
													<!-- <a href="javascript:void(0);" class="btn gray ft-medium apply-btn fs-sm rounded"><i class="lni lni-heart mr-1"></i>Save</a> -->
												</div>
											</div>
										</div>
										<div class="dashed-list-footer p-3 br-top">
											<div class="align-items-center d-flex justify-content-left mb-1 p-0">
											<h6 class=" mb-0 ft-medium" style="color:#052a59"><span>Job Title: </span><?php echo $jobTitle;?></h6>
												<!-- <i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i> -->
											</div>
											<div class="ico-content">
												<ul>
													<li><span><i class="lni lni-calendar mr-1"></i><?php 
													$phpdate2 = strtotime( $appJobDate );
													$mysqldate2 = date( 'j M Y', $phpdate2);
													echo $mysqldate2;?></span></li>
													<!-- <li><span><i class="lni lni-add-files mr-1"></i>Recent</span></li> -->
												</ul>
											</div>
										</div>
	
									</div>

									<?php
										}}?>
													
								</div>
							</div>
						</div>
							
					</div>
					
					<!-- footer -->
					<div class="row">
						<div class="col-md-12">
						<div class="py-3">?? 2022 AtificerHub</div>
						</div>
					</div>
		
				</div>
				
			</div>
			<!-- ======================= dashboard Detail End ======================== -->
			
			<!-- Message Modal -->
			<div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="messagemodal" aria-hidden="true">
				<div class="modal-dialog modal-xl login-pop-form" role="document">
					<div class="modal-content" id="messagemodal">
						<div class="modal-headers">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span class="ti-close"></span>
							</button>
						  </div>
					
						<div class="modal-body p-5">
							<div class="text-center mb-4">
								<h2 class="m-0 ft-regular">Drop Your Message</h2>
							</div>
							
							<form>				
								<div class="form-group">
									<textarea class="ht-200 form-control" placeholder="Type Your Message..."></textarea>
								</div>
								
								<div class="form-group">
									<button type="submit" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Send Message</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<!-- Applications Edit Modal -->
			<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="appeditmodal" aria-hidden="true">
				<div class="modal-dialog modal-xl login-pop-form" role="document">
					<div class="modal-content" id="appeditmodal">
						<div class="modal-headers">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span class="ti-close"></span>
							</button>
						  </div>
					
						<div class="modal-body p-5">
							<div class="text-center mb-4">
								<h2 class="m-0 ft-regular">Edit Candidate Status</h2>
							</div>
							
							<form>				
								<div class="form-group">
									<select class="form-control rounded">
										<option>Application Status</option>
										<option>Active New</option>
										<option>Interviewd</option>
										<option>Hires</option>
										<option>Trashed</option>
									</select>
								</div>
								<div class="form-group">
									<input type="number" class="form-control" placeholder="Rate out of 5" />
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Save Status</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<!-- Add Note Modal -->
			<div class="modal fade" id="note" tabindex="-1" role="dialog" aria-labelledby="nonemodal" aria-hidden="true">
				<div class="modal-dialog modal-xl login-pop-form" role="document">
					<div class="modal-content" id="nonemodal">
						<div class="modal-headers">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span class="ti-close"></span>
							</button>
						  </div>
					
						<div class="modal-body p-5">
							<div class="text-center mb-4">
								<h2 class="m-0 ft-regular">Add A note</h2>
							</div>
							
							<form>				
								<div class="form-group">
									<textarea class="ht-200 form-control" placeholder="Type Your Message..."></textarea>
								</div>
								
								<div class="form-group">
									<button type="submit" class="btn btn-md full-width theme-bg text-light fs-md ft-medium">Save Note</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
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