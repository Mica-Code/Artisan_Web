<?php

$title = "Create Resume";
$nav='<ul data-submenu-title="Main Navigation">
<li><a href="index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
<!-- S<li><a href="dashboard-manage-resume.php"><i class="lni lni-files mr-2"></i>Manage Resumes</a></li> -->
<li class="active"><a href="dashboard-add-resume.php"><i class="lni lni-add-files mr-2"></i>Create Resume</a></li>
<li><a href="dashboard-applied-jobs.php"><i class="lni lni-briefcase mr-2"></i>Applied jobs</a></li>
<li><a href="dashboard-alert-job.php"><i class="ti-bell mr-2"></i>Alert Jobs</a></li>
<!-- <li><a href="dashboard-saved-jobs.php"><i class="lni lni-bookmark mr-2"></i>Bookmark Jobs</a></li> -->
<!-- <li><a href="dashboard-packages.php"><i class="lni lni-mastercard mr-2"></i>Packages</a></li>
<li><a href="dashboard-messages.php"><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a></li> -->
</ul>
<ul data-submenu-title="My Accounts">
<li><a href="dashboard-my-profile.php"><i class="lni lni-user mr-2"></i>My Profile </a></li>
<li><a href="dashboard-change-password.php"><i class="lni lni-lock-alt mr-2"></i>Change Password</a></li>
<li><a onclick= "return confirm(\'You are about to Delete your account. \nData(s) related to you will be cleared from the system. \nThis action is irreversible.\')" href="dashboard-delete-acct.php"><i class="lni lni-trash-can mr-2"></i>Delete Account</a></li>
<li><a href="logout.php"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
</ul>';

include_once('include/head.php');

if(isset($_POST['submit'])){
	require('dashboard-add-resume-process.php');
}
?>			

<script>
	$(document).ready(() => {		
		
		var edu = '<div class="col-xl-12 col-lg-12" id="addEduSec">\
		<div class="gray rounded p-3 mb-3 position-relative">\
		<button type="button" class="aps-clone" id="removeEdu"><i class="fas fa-times"></i></button>\
				<div class="form-group">\
					<label class="text-dark ft-medium">School Name</label>\
					<input type="text" name="schname[]" class="form-control rounded" placeholder="School Name">\
				</div>\
				<div class="form-group">\
					<label class="text-dark ft-medium">Qualification</label>\
					<input type="text" name="schqtitle[]" class="form-control rounded" placeholder="Qualification Title">\
				</div>\
				<div class="form-row">\
					<div class="col-6">\
						<div class="form-group">\
							<label class="text-dark ft-medium">Start Date</label>\
							<input type="date" name="schstartdate[]" class="form-control rounded" placeholder="dd-mm-yyyy">\
						</div>\
					</div>\
					<div class="col-6">\
						<div class="form-group">\
							<label class="text-dark ft-medium">End Date</label>\
							<input type="date" name="schenddate[]" class="form-control rounded" placeholder="dd-mm-yyyy">\
						</div>\
					</div>\
				</div>\
			</div>\
		</div>';


		var exp = '<div class="col-xl-12 col-lg-12" id="addExpSec">\
					<div class="gray rounded p-3 mb-3 position-relative">\
						<button type="button" class="aps-clone" id="removeExp"><i class="fas fa-times"></i></button>\
						<div class="form-group">\
							<label class="text-dark ft-medium">Employer</label>\
							<input type="text" name="employername[]" class="form-control rounded" placeholder="Employer Name">\
						</div>\
						<div class="form-group">\
							<label class="text-dark ft-medium">Job Title</label>\
							<input type="text" name="jobtitle[]" class="form-control rounded" placeholder="Designation Title">\
						</div>\
						<div class="form-row">\
							<div class="col-6">\
								<div class="form-group">\
									<label class="text-dark ft-medium">Start Date</label>\
									<input type="date" name="jobstartdate[]" class="form-control rounded" placeholder="dd-mm-yyyy">\
								</div>\
							</div>\
							<div class="col-6">\
								<div class="form-group">\
									<label class="text-dark ft-medium">End Date</label>\
									<input type="date" name="jobenddate[]" class="form-control rounded" placeholder="dd-mm-yyyy">\
								</div>\
							</div>\
						</div>\
						<div class="form-group">\
							<label class="text-dark ft-medium">Note</label>\
							<textarea class="form-control ht-80" name="jobnote[]" placeholder="Little Details about your role"></textarea>\
						</div>\
					</div>\
				</div>';

			var skill = '<div class="col-xl-12 col-lg-12" id="addSkillSec">\
							<div class="gray rounded p-3 mb-3 position-relative">\
								<button  type="button" class="aps-clone" id="removeSkill"><i class="fas fa-times"></i></button>\
								<div class="form-group">\
									<label class="text-dark ft-medium">Skills Name</label>\
									<input type="text" name="skillname[]" class="form-control rounded" placeholder="Skills Name">\
								</div>\
								<div class="form-group">\
									<label class="text-dark ft-medium">Percentage</label>\
									<input type="text" name="skillper[]" class="form-control rounded" placeholder="e.x. 80%">\
								</div>\
							</div>\
						</div>';



		var maxedu = 3, maxexp = 3, maxskill = 5;
		var satedu = 1,  satexp = 1, satskill = 1;

		//Adding Education, Experience and Skill
		$('#addEduBtn').on('click', ()=>{
			if(satedu < maxedu){
				$(edu).insertAfter('#addEduSec');
				satedu++;
			}
		});

		$('#addExpBtn').on('click', ()=>{
			if(satexp < maxexp){
				$(exp).insertAfter('#addExpSec');
				satexp++;
			}
			
		});
		$('#addSkillBtn').on('click', ()=>{
			if(satskill < maxskill){
				$(skill).insertAfter('#addSkillSec');
				satskill++;
			}
			
		});


		//Removing Education, Experience and Skill
		$('#eduform').on('click', '#removeEdu', ()=>{
			$('#addEduSec').first().remove();
			satedu--;
			
		});
		$('#expform').on('click', '#removeExp', ()=>{
			$('#addExpSec').first().remove();
			satexp--;
		});
		$('#skillform').on('click', '#removeSkill', ()=>{
			$('#addSkillSec').first().remove();
			satskill--;
		});
	});
</script>


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
										<form class="row" id="eduform">

											<div class="col-xl-12 col-lg-12" id="addEduSec">
												<div class="gray rounded p-3 mb-3 position-relative">
													<!-- <button class="aps-clone"><i class="fas fa-times"></i></button> -->
													<div class="form-group">
														<label class="text-dark ft-medium">School Name</label>
														<input type="text" name="schname[]" class="form-control rounded" placeholder="School Name">
													</div>
													<div class="form-group">
														<label class="text-dark ft-medium">Qualification</label>
														<input type="text" name="schqtitle[]" class="form-control rounded" placeholder="Qualification Title">
													</div>
													<div class="form-row">
														<div class="col-6">
															<div class="form-group">
																<label class="text-dark ft-medium">Start Date</label>
																<input type="date" name="schstartdate[]" class="form-control rounded" placeholder="dd-mm-yyyy">
															</div>
														</div>
														<div class="col-6">
															<div class="form-group">
																<label class="text-dark ft-medium">End Date</label>
																<input type="date" name="schenddate[]" class="form-control rounded" placeholder="dd-mm-yyyy">
															</div>
														</div>
													</div>
													
												</div>
											</div>

											<span></span>
											
										</form>
										<button name="addEduBtn" id="addEduBtn" class="btn gray ft-medium apply-btn fs-sm rounded"><i class="fas fa-plus mr-1"></i>Add Education</button>
									</div>


					



								</div>
							</div>	
						</div>	
						<hr style="background-color:darkgray; margin-top:0px;">
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
										<form class="row" id="expform">
											<div class="col-xl-12 col-lg-12" id="addExpSec">
												<div class="gray rounded p-3 mb-3 position-relative">
													<!-- <button class="aps-clone"><i class="fas fa-times"></i></button> -->
													<div class="form-group">
														<label class="text-dark ft-medium">Employer</label>
														<input type="text" name="employername[]" class="form-control rounded" placeholder="Employer Name">
													</div>
													<div class="form-group">
														<label class="text-dark ft-medium">Job Title</label>
														<input type="text" name="jobtitle[]" class="form-control rounded" placeholder="Designation Title">
													</div>
													<div class="form-row">
														<div class="col-6">
															<div class="form-group">
																<label class="text-dark ft-medium">Start Date</label>
																<input type="date" name="jobstartdate[]" class="form-control rounded" placeholder="dd-mm-yyyy">
															</div>
														</div>
														<div class="col-6">
															<div class="form-group">
																<label class="text-dark ft-medium">End Date</label>
																<input type="date" name="jobenddate[]" class="form-control rounded" placeholder="dd-mm-yyyy">
															</div>
														</div>
													</div>
													<div class="form-group">
														<label class="text-dark ft-medium">Note</label>
														<textarea class="form-control ht-80" name="jobnote[]" placeholder="Little Details about your role"></textarea>
													</div>
												</div>
											</div>
											
										</form>

										<button id="addExpBtn" class="btn gray ft-medium apply-btn fs-sm rounded"><i class="fas fa-plus mr-1"></i>Add Experience</button>
												
									</div>
								</div>
							</div>	
						</div>

						<hr style="background-color:darkgray; margin-top:0px;">
						
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
										<form class="row" id="skillform">
											<div class="col-xl-12 col-lg-12" id="addSkillSec">
												<div class="gray rounded p-3 mb-3 position-relative">
													<!-- <button class="aps-clone"><i class="fas fa-times"></i></button> -->
													<div class="form-group">
														<label class="text-dark ft-medium">Skills Name</label>
														<input type="text" name="skillname[]" class="form-control rounded" placeholder="Skills Name">
													</div>
													<div class="form-group">
														<label class="text-dark ft-medium">Percentage</label>
														<input type="text" name="skillper[]" class="form-control rounded" placeholder="e.x. 80%">
													</div>
												</div>
											</div>
											
										</form>

										<button id="addSkillBtn" class="btn gray ft-medium apply-btn fs-sm rounded"><i class="fas fa-plus mr-1"></i>Add Skills</button>
												
									</div>
								</div>
							</div>	
						</div>
						
						<!-- Save All -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<button type="submit" name="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save</button>
							</div>	
						</div>
	
					</div>
					<?php
include_once('include/footer.php');
?>			