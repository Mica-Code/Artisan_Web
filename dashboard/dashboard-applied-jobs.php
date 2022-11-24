<?php

$title = "Applied Jobs";
$nav='<ul data-submenu-title="Main Navigation">
<li><a href="index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
<!-- S<li><a href="dashboard-manage-resume.php"><i class="lni lni-files mr-2"></i>Manage Resumes</a></li> -->
<li><a href="dashboard-add-resume.php"><i class="lni lni-add-files mr-2"></i>Create Resume</a></li>
<li class="active"><a href="dashboard-applied-jobs.php"><i class="lni lni-briefcase mr-2"></i>Applied jobs</a></li>
<li><a href="dashboard-alert-job.php"><i class="ti-bell mr-2"></i>Alert Jobs</li>
<!-- <li><a href="dashboard-saved-jobs.php"><i class="lni lni-bookmark mr-2"></i>Bookmark Jobs</a></li> -->
<!-- <li><a href="dashboard-packages.php"><i class="lni lni-mastercard mr-2"></i>Packages</a></li>
<li><a href="dashboard-messages.php"><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a></li> -->
</ul>
<ul data-submenu-title="My Accounts">
<li><a href="dashboard-my-profile.php"><i class="lni lni-user mr-2"></i>My Profile </a></li>
<li><a href="dashboard-change-password.php"><i class="lni lni-lock-alt mr-2"></i>Change Password</a></li>
<li><a href="javascript:void(0);"><i class="lni lni-trash-can mr-2"></i>Delete Account</a></li>
<li><a href="logout.php"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
</ul>';

include_once('include/head.php');



// echo "<script>alert('".$appJobCount."')</script>";
?>			
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">My Applied Jobs</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Applied Jobs</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						<div class="row">
							<div class="col-xl-12 col-md-12 col-sm-12">
								<div class="cl-justify">
									
									<div class="cl-justify-first">
										<p class="m-0 p-0 ft-sm">You have applied <span class="text-dark ft-medium"><?php echo $n_row;?></span> jobs</p>
									</div>
									
									<!-- <div class="cl-justify-last">
										<div class="d-flex align-items-center justify-content-left">
											<div class="dlc-list">
												<select class="form-control sm rounded">
													<option>All Jobs</option>
													<option>Full Time</option>
													<option>Part Time</option>
													<option>Freelancing</option>
													<option>Internship</option>
													<option>Contract</option>
												</select>
											</div>
											<div class="dlc-list ml-2">
												<select class="form-control sm rounded">
													<option>Show 20</option>
													<option>Show 30</option>
													<option>Show 40</option>
													<option>Show 50</option>
													<option>Show 100</option>
													<option>Show 250</option>
												</select>
											</div>
										</div>
									</div> -->
									
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="mb-4 tbl-lg rounded overflow-hidden">
									<div class="table-responsive bg-white">
										<table class="table">
											<thead class="thead-dark">
												<tr>
												  <th scope="col">Job Title</th>
												  <th scope="col">Status</th>
												  <th scope="col">Applied Date</th>
												  <th scope="col">Action</th>
												</tr>
											</thead>
											<tbody>
											<?php
												
												//Getting all data from the Post Job Table
												$query = "SELECT * from appjob WHERE appArtisanID = $session_id";
												
												$result = mysqli_query($dbc, $query);
												$num_row = mysqli_num_rows($result);
												if($num_row > 0){
													// echo "<script>alert('Query executed and no of row is".$num_row."')</script>";
													while($row = mysqli_fetch_array($result)){

														$appJobID = $row['appJobID'];					
														$appPostJobID = $row['appPostJobID'];
														$appClientID = $row['appClientID'];
														$appArtisanID = $row['appArtisanID'];
														$appStatus = $row['appStatus'];
														$appJobDate = $row['appJobDate'];
													

														$query2 = "SELECT * from postjob WHERE postJobID = $appPostJobID";
														$result2 = mysqli_query($dbc, $query2);
														$row = mysqli_fetch_array($result2);


														$postJobTitle = $row['postJobTitle'];
														$postJobType = $row['postJobType'];
														$postJobLocation = $row['postJobLocation'];		
														$postJobToken =	$row['postJobToken'];					
												?>
												<tr>
													<td>
														<div class="cats-box rounded bg-white d-flex align-items-center">
															<div class="text-center"><img src="assets/img/c-1.png" class="img-fluid" width="55" alt=""></div>
															<div class="cats-box-caption px-2">
																<h4 class="fs-md mb-0 ft-medium"><?php echo $postJobTitle;?></h4>
																<div class="d-block mb-2 position-relative">
																	<span class="text-muted medium"><i class="lni lni-map-marker mr-1"></i><?php echo $postJobLocation;?>, Lagos</span>
																	<span class="muted medium ml-2 theme-cl"><i class="lni lni-briefcase mr-1"></i><?php echo $postJobType;?></span>
																</div>
															</div>
														</div>
													</td>
													<td>

													<?php
														if($appStatus == 'Pending'){
															echo '<span style="color:#f3c621">'.$appStatus.'</span>';
														}
														elseif($appStatus == 'Active'){
															echo '<span style="color:#2158f3">'.$appStatus.'</span>';
														}
														elseif($appStatus == 'Completed'){
															echo '<span style="color:#21f327">'.$appStatus.'</span>';
														}
														else{
															echo '<span style="color:#f32121">'.$appStatus.'</span>';
														}
													?>
										

													</td>
													<td>
													<?php 
													$phpdate2 = strtotime( $appJobDate );
													$mysqldate2 = date( 'j M Y', $phpdate2);
													echo $mysqldate2;?>
													</td>
													<td>
														<div class="dash-action">
															<a href="dashboard-job-detail.php?JobID=<?php echo $appPostJobID; ?>&JobToken=<?php echo $postJobToken;?>" class="p-2 circle text-info bg-light-info d-inline-flex align-items-center justify-content-center mr-1"><i class="lni lni-eye"></i></a>
															<a onclick="return confirm('You are about to cancel you application \nfor this Job.');" href="dashboard-delete-apply-job.php?JobID=<?php echo $appPostJobID; ?>&JobToken=<?php echo $postJobToken;?>" class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
														</div>
													</td>
												</tr>
												<?php
												}}else{
													?>
													<tr>
														<td></td>
														<td></td>
														<td>You have not Applied for any job</td>
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
						
						<!-- <div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<ul class="pagination">
									<li class="page-item">
									  <a class="page-link" href="#" aria-label="Previous">
										<span class="fas fa-arrow-circle-right"></span>
										<span class="sr-only">Previous</span>
									  </a>
									</li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item active"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">...</a></li>
									<li class="page-item"><a class="page-link" href="#">18</a></li>
									<li class="page-item">
									  <a class="page-link" href="#" aria-label="Next">
										<span class="fas fa-arrow-circle-right"></span>
										<span class="sr-only">Next</span>
									  </a>
									</li>
								</ul>
							</div>
						</div> -->
							
					</div>
					
					<?php
include_once('include/footer.php');
?>			