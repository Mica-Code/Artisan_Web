<?php



$title = "Create Resume";
$nav='<ul data-submenu-title="Main Navigation">
<li ><a href="index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
<li class="active"><a href="dashboard-add-resume.php"><i class="lni lni-add-files mr-2"></i>Create Resume</a></li>
<li><a href="dashboard-alert-job.php"><i class="ti-bell mr-2"></i>Vacant Jobs</a></li>
<li><a href="dashboard-applied-jobs.php"><i class="lni lni-briefcase mr-2"></i>Applied jobs</a></li>
<li ><a href="report.php"><i class="lni lni-files mr-2"></i>Generate Report</a></li>
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


if(isset($_POST['submitEdu'])){
	require('dashboard-add-edit-resume-process.php');
}

if(isset($_POST['submitExp'])){
	require('dashboard-add-edit-resume-process.php');
}

if(isset($_POST['submitSkill'])){
	require('dashboard-add-edit-resume-process.php');
}

?>			

				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Add Resume</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Add Resume</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						<!-- <div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="_dashboard_content bg-white rounded mb-4">
									<div class="_dashboard_content_header br-bottom py-3 px-3">
										<div class="_dashboard__header_flex">
											<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>Create Resume</h4>	
										</div>
									</div>
									
									<div class="_dashboard_content_body py-3 px-3">
										<form class="row">
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
												<div class="custom-file avater_uploads">
												  <input type="file" class="custom-file-input" id="customFile">
												  <label class="custom-file-label" for="customFile"><i class="fa fa-user"></i></label>
												</div>
											</div>
											
											<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
												<div class="row">
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Your Name</label>
															<input type="text" class="form-control rounded" placeholder="Full Name">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Professional Title</label>
															<input type="text" class="form-control rounded" placeholder="e.g. Web Designer">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Job category</label>
															<select class="form-control rounded">
																<option>Banking</option>
																<option>Hospital</option>
																<option>It Services</option>
															</select>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Email</label>
															<input type="email" class="form-control rounded" value="uppcl@gmail.com">
														</div>
													</div>
													<div class="col-xl-12 col-lg-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Resume Content</label>
															<textarea class="form-control with-light" placeholder="Resume Content"></textarea>
														</div>
													</div>
												</div>
											</div>
											
										</form>
									</div>
								</div>
							</div>
						</div> -->
						

						<!-- pagination -->
						<!-- <div class="tab-pane fade" id="v-tabss" role="tabpanel" aria-labelledby="v-tabss-tab"> -->
							<div class="row">
								
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<ul class="nav nav-tabs b-0 d-flex align-items-center justify-content-center simple_tab_links mb-4" id="myTab" role="tablist">
										<li class="nav-item" role="presentation">
											<a class="nav-link" id="education-tab" href="#education" data-toggle="tab" role="tab" aria-controls="education" aria-selected="true" aria-expanded="true">Add Education</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link" href="#experience" id="experience-tab" data-toggle="tab" role="tab" aria-controls="experience" aria-selected="false" aria-expanded="false">Add Experience</a>
										</li>
										<li class="nav-item" role="presentation">
											<a class="nav-link" href="#skill" id="skill-tab" data-toggle="tab" role="tab" aria-controls="skill" aria-selected="false" aria-expanded="false">Add Skills</a>
										</li>
									</ul>
									
									<div class="tab-content" id="myTabContent">
										
										<!-- Education Tab Section -->
										<div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab" aria-expanded="true">
											<div class="description_info">


												<!-- Add Education -->
													<div class="row">
														<div class="col-lg-12 col-md-12">
															<div class="_dashboard_content bg-white rounded mb-4">
																<div class="_dashboard_content_header br-bottom py-3 px-3">
																	<div class="_dashboard__header_flex">
																		<h4 class="mb-0 ft-medium fs-md" id="clickme"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Education Details</h4>	
																	</div>
																</div>
																
																<div class="_dashboard_content_body py-3 px-3">
																	<form class="row" id="eduform" method="post">

																		<div class="col-xl-12 col-lg-12" id="addEduSec">
																			<div class="gray rounded p-3 mb-3 position-relative">
																				<div class="form-group">
																					<label class="text-dark ft-medium">School Name</label>
																					<input type="text" name="schname" class="form-control rounded" placeholder="School Name" value="<?php if(isset($schnameE)){ echo $schnameE;}?>">
																				</div>
																				<div class="form-group">
																					<label class="text-dark ft-medium">Qualification</label>
																					<input type="text" name="schqtitle" class="form-control rounded" placeholder="Qualification Title" value="<?php if(isset($schqtitleE)){ echo $schqtitleE;}?>">
																				</div>
																				<div class="form-row">
																					<div class="col-6">
																						<div class="form-group">
																							<label class="text-dark ft-medium">Start Date</label>
																							<input type="date" name="schstartdate" class="form-control rounded" placeholder="dd-mm-yyyy" value="<?php if(isset($schstartdateE)){ echo $schstartdateE;}?>">
																						</div>
																					</div>
																					<div class="col-6">
																						<div class="form-group">
																							<label class="text-dark ft-medium">End Date</label>
																							<input type="date" name="schenddate" class="form-control rounded" placeholder="dd-mm-yyyy" value="<?php if(isset($schenddateE)){ echo $schenddateE;}?>">
																						</div>
																					</div>
																				</div>
																				
																			</div>
																		</div>

																	</form>
																	
																</div>

																<!-- Save Education-->
																<div class="row" style="text-align:center; text-align:center;">
																	<div class="col-lg-12 col-md-12">
																		<input form="eduform" type="submit" name="submitEdu" class="btn btn-md ft-medium text-light rounded theme-bg" style="margin-bottom: 20px;" value="Save Education">
																	</div>	
																</div>
																
															</div>
														</div>	

													</div>	

													<!-- End of Add Education -->
											</div>



											<!-- Table To Display Already Saved Education -->
											<div class="mb-4 tbl-lg rounded overflow-hidden">
												<div class="table-responsive bg-white">
													<table class="table">
														<thead class="thead-dark">
															<tr>
															<th scope="col">S/N</th>
															<th scope="col">School Name</th>
															<th scope="col">Qualification</th>
															<th scope="col">Start Date</th>
															<th scope="col">End Date</th>
															<th scope="col">Action</th>
															</tr>
														</thead>
														<tbody>

														<?php

														$sn = 1;
														
														$query = "SELECT * from education WHERE userID = $session_id ";

														$result = mysqli_query($dbc, $query);

														while($row = mysqli_fetch_array($result)){
															$schID = $row['eduID'];
															$schname = $row['eduSchoolName'];
															$schqtitle = $row['eduQualification'];
															$schstartdate = $row['eduStartDate'];
															$schenddate = $row['eduEndDate'];
															$schToken = $row['eduToken'];
														?>
															<tr>
																<td><div class="dash-title">
																		<h4 class="mb-0 ft-medium fs-sm">
																			<?php echo $sn++;?>
																		</h4>
																	</div>
																</td>

																<td><div class="dash-filled">
																	<?php
																		echo $schname;
																	?>

																</td>

																<td>
																<?php
																		echo $schqtitle;
																	?>
																</td>

																<td><?php 
																$phpdate = strtotime( $schstartdate );
																// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );
																// $mysqldate = date( '(D) j M Y <br> h:i A', $phpdate);
																$mysqldate = date( 'j M Y', $phpdate);
																echo $mysqldate;?></td>


																<td><?php 
																$phpdate2 = strtotime( $schenddate );
																// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );
																// $mysqldate = date( '(D) j M Y <br> h:i A', $phpdate);
																$mysqldate2 = date( 'j M Y', $phpdate2);
																echo $mysqldate2;?></td>

																<td>
																	<div class="dash-action">
																		<a href="dashboard-edit-resume.php?rand=<?php echo $schID; ?>&getToken=<?php echo $schToken;?>&type=edu" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
																		<a onclick="return confirm('Are you sure you want to delete this Education? \n This Action cannot be reversed!');" href='dashboard-del-resume.php?rand=<?php echo $schID; ?>&getToken=<?php echo $schToken;?>&type=edu' class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
																		
																	</div>
																</td>
															</tr>

															<?php
															}
															?>
														</tbody>
													</table>
												</div>
											</div>

										</div>

										<!-- End of Education Tab -->


										
										
										<!-- Experience Tab Section -->
										<div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab" aria-expanded="false">
											<div class="additionals">

												<!-- Add Experience -->
													<div class="row">
														<div class="col-lg-12 col-md-12">
															<div class="_dashboard_content bg-white rounded mb-4">
																<div class="_dashboard_content_header br-bottom py-3 px-3">
																	<div class="_dashboard__header_flex">
																		<h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Experience Details</h4>	
																	</div>
																</div>
																
																<div class="_dashboard_content_body py-3 px-3">
																	<form class="row" id="expform" method="post">
																		<div class="col-xl-12 col-lg-12" id="addExpSec">
																			<div class="gray rounded p-3 mb-3 position-relative">
																				<!-- <button class="aps-clone"><i class="fas fa-times"></i></button> -->
																				<div class="form-group">
																					<label class="text-dark ft-medium">Employer</label>
																					<input type="text" name="employername" class="form-control rounded" placeholder="Employer Name">
																				</div>
																				<div class="form-group">
																					<label class="text-dark ft-medium">Job Title</label>
																					<input type="text" name="jobtitle" class="form-control rounded" placeholder="Designation Title">
																				</div>
																				<div class="form-row">
																					<div class="col-6">
																						<div class="form-group">
																							<label class="text-dark ft-medium">Start Date</label>
																							<input type="date" name="jobstartdate" class="form-control rounded" placeholder="dd-mm-yyyy">
																						</div>
																					</div>
																					<div class="col-6">
																						<div class="form-group">
																							<label class="text-dark ft-medium">End Date</label>
																							<input type="date" name="jobenddate" class="form-control rounded" placeholder="dd-mm-yyyy">
																						</div>
																					</div>
																				</div>
																				<div class="form-group">
																					<label class="text-dark ft-medium">Note</label>
																					<textarea class="form-control ht-80" name="jobnote" placeholder="Little Details about your role"></textarea>
																				</div>
																			</div>
																		</div>
																		
																	</form>

																		
																</div>



																<!-- Save Experience-->
																<div class="row" style="text-align:center; text-align:center;">
																	<div class="col-lg-12 col-md-12">
																		<input form="expform" type="submit" name="submitExp" class="btn btn-md ft-medium text-light rounded theme-bg" style="margin-bottom: 20px;" value="Save Experience">
																	</div>	
																</div>

															
															</div>
														</div>	
													</div>

												<!-- End of Add Experience -->

											</div>


											
											<!-- Table To Display Already Saved Experience -->
											<div class="mb-4 tbl-lg rounded overflow-hidden">
												<div class="table-responsive bg-white">
													<table class="table">
														<thead class="thead-dark">
															<tr>
															<th scope="col">S/N</th>
															<th scope="col">Employer Name</th>
															<th scope="col">Job Title</th>
															<th scope="col">Start Date</th>
															<th scope="col">End Date</th>
															<th scope="col">Action</th>
															</tr>
														</thead>
														<tbody>

														<?php

														$sn = 1;
														
														$query = "SELECT * from experience WHERE userID = $session_id ";

														$result = mysqli_query($dbc, $query);

														while($row = mysqli_fetch_array($result)){
															$expID = $row['expID'];
															$expname = $row['expEmployerName'];
															$expqtitle = $row['expJobTitle'];
															$expstartdate = $row['expStartDate'];
															$expenddate = $row['expEndDate'];
															$expdesc = $row['expJobDesc'];
															$expToken = $row['expToken'];

						
														?>
															<tr>
																<td><div class="dash-title">
																		<h4 class="mb-0 ft-medium fs-sm">
																			<?php echo $sn++;?>
																		</h4>
																	</div>
																</td>

																<td><div class="dash-filled">
																	<?php
																		echo $expname;
																	?>

																</td>

																<td>
																<?php
																		echo $expqtitle;
																	?>
																</td>

																<td><?php 
																$phpdate = strtotime( $expstartdate );
																// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );
																// $mysqldate = date( '(D) j M Y <br> h:i A', $phpdate);
																$mysqldate = date( 'j M Y', $phpdate);
																echo $mysqldate;?></td>


																<td><?php 
																$phpdate2 = strtotime( $expenddate );
																// $mysqldate = date( 'Y-m-d H:i:s', $phpdate );
																// $mysqldate = date( '(D) j M Y <br> h:i A', $phpdate);
																$mysqldate2 = date( 'j M Y', $phpdate2);
																echo $mysqldate2;?></td>

																<td>
																	<div class="dash-action">
																		<a href="dashboard-edit-resume.php?rand=<?php echo $expID; ?>&getToken=<?php echo $expToken;?>&type=exp" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
																		<a onclick="return confirm('Are you sure you want to delete this Experience? \n This Action cannot be reversed!');" href='dashboard-del-resume.php?rand=<?php echo $expID; ?>&getToken=<?php echo $expToken;?>&type=exp' class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
																		
																	</div>
																</td>
															</tr>

															<?php
															}
															?>
														</tbody>
													</table>
												</div>
											</div>



										</div>

										<!-- End of Exxperience Section -->



										
										<!-- Skill Tab Section -->
										<div class="tab-pane fade" id="skill" role="tabpanel" aria-labelledby="skill-tab" aria-expanded="false">
											<div class="reviews_info">

												<!-- Add Skills -->
													<div class="row">
														<div class="col-lg-12 col-md-12">
															<div class="_dashboard_content bg-white rounded mb-4">
																<div class="_dashboard_content_header br-bottom py-3 px-3">
																	<div class="_dashboard__header_flex">
																		<h4 class="mb-0 ft-medium fs-md"><i class="fas fa-graduation-cap mr-1 theme-cl fs-sm"></i>Skills Details</h4>	
																	</div>
																</div>
																
																<div class="_dashboard_content_body py-3 px-3">
																	<form class="row" id="skillform" method='post'>
																		<div class="col-xl-12 col-lg-12" id="addSkillSec">
																			<div class="gray rounded p-3 mb-3 position-relative">
																				<!-- <button class="aps-clone"><i class="fas fa-times"></i></button> -->
																				<div class="form-group">
																					<label class="text-dark ft-medium">Skills Name</label>
																					<input type="text" name="skillname" class="form-control rounded" placeholder="Skills Name">
																				</div>
																				<div class="form-group">
																					<label class="text-dark ft-medium">Percentage</label>
																					<input type="number" name="skillper" class="form-control rounded" placeholder="e.x. 80  (Only Numbers are allowed)">
																				</div>
																			</div>
																		</div>
																		
																	</form>
																			
																</div>
																<!-- Save Skill-->
																<div class="row" style="text-align:center; text-align:center;">
																	<div class="col-lg-12 col-md-12">
																		<input form="skillform" type="submit" name="submitSkill" class="btn btn-md ft-medium text-light rounded theme-bg" style="margin-bottom: 20px;" value="Save Skill">
																	</div>	
																</div>
															</div>
														</div>	
													</div>
												<!-- End of add skill -->

											</div>
											
											<!-- Table To Display Already Saved Education -->
											<div class="mb-4 tbl-lg rounded overflow-hidden">
												<div class="table-responsive bg-white">
													<table class="table">
														<thead class="thead-dark">
															<tr>
															<th scope="col">S/N</th>
															<th scope="col">Skill Name</th>
															<th scope="col">Percentage (%)</th>
															<th scope="col">Action</th>
															</tr>
														</thead>
														<tbody>

														<?php

														$sn = 1;
														
														$query = "SELECT * from skill WHERE userID = $session_id ";

														$result = mysqli_query($dbc, $query);

														while($row = mysqli_fetch_array($result)){
															$skillID = $row['skiID'];
															$skillname = $row['skiName'];
															$skillqtitle = $row['skiPercent'];
															$skillToken = $row['skiToken'];
															

														?>
															<tr>
																<td><div class="dash-title">
																		<h4 class="mb-0 ft-medium fs-sm">
																			<?php echo $sn++;?>
																		</h4>
																	</div>
																</td>

																<td><div class="dash-filled">
																	<?php
																		echo $skillname;
																	?>

																</td>

																<td>
																<?php
																		echo $skillqtitle;
																	?>
																</td>

																<td>
																	<div class="dash-action">
																		<a href="dashboard-edit-resume.php?rand=<?php echo $skillID; ?>&getToken=<?php echo $skillToken;?>&type=ski" class="p-2 circle text-success bg-light-success d-inline-flex align-items-center justify-content-center"><i class="lni lni-pencil"></i></a>
																		<a onclick="return confirm('Are you sure you want to delete this Skill? \n This Action cannot be reversed!');" href='dashboard-del-resume.php?rand=<?php echo $skillID; ?>&getToken=<?php echo $skillToken;?>&type=ski' class="p-2 circle text-danger bg-light-danger d-inline-flex align-items-center justify-content-center ml-1"><i class="lni lni-trash-can"></i></a>
																		
																	</div>
																</td>
															</tr>

															<?php
															}
															?>
														</tbody>
													</table>
												</div>
											</div>








										</div>

										<!-- End of Skill Section -->
								</div>

							</div>
						<!-- </div> -->



						
					</div>
					<?php
include_once('include/footer.php');
?>			