<?php

$title = "Edit Profile";
$nav='<ul data-submenu-title="Main Navigation">
<li><a href="client-index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
<li><a href="dashboard-post-job.php"><i class="lni lni-files mr-2"></i>Post New Job</a></li>
<li><a href="dashboard-manage-jobs.php"><i class="lni lni-add-files mr-2"></i>Manage Jobs</a></li>
<li><a href="dashboard-manage-applications.php"><i class="lni lni-briefcase mr-2"></i>Manage Applicants</a></li>
<!-- <li><a href="dashboard-shortlisted-resume.php"><i class="lni lni-bookmark mr-2"></i>BookmarkResumes<span class="count-tag bg-warning">4</span></a></li> -->
<!-- <li><a href="dashboard-packages.html"><i class="lni lni-mastercard mr-2"></i>Packages</a></li>
<li><a href="dashboard-messages.html"><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a></li> -->
</ul>
<ul data-submenu-title="My Accounts">
<li class="active"><a href="dashboard-client-profile.php"><i class="lni lni-user mr-2"></i>Edit Profile </a></li>
<li><a href="dashboard-change-password.php"><i class="lni lni-lock-alt mr-2"></i>Change Password</a></li>
<li><a href="javascript:void(0);"><i class="lni lni-trash-can mr-2"></i>Delete Account</a></li>
<li><a href="index.php"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
</ul>';

include_once('include/client-head.php');
?>			
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">My Profile</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">My Profile</a></li>
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
											<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-user mr-1 theme-cl fs-sm"></i>My Account</h4>	
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
															<label class="text-dark ft-medium">Full Name</label>
															<input type="text" class="form-control rounded" value="<?php echo $fname;?>">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Username</label>
															<input type="text" class="form-control rounded" value="<?php echo $uname;?>">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Phone</label>
															<input type="text" class="form-control rounded" value="<?php echo $phone;?>">
														</div>
													</div>


													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Email</label>
															<input type="email" class="form-control rounded" value="<?php echo $fname;?>">
														</div>
													</div>
													

													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
														<label class="text-dark ft-medium">Select your Location</label>
															<select class="form-control rounded" id="postJobLocation" name="postJobLocation">
																<optgroup label="Your Location">
																	<option value="">--- Select Location ---</option>
																	<option value="Agege">Agege</option>
																	<option value="Ajeromi-Ifelodun">Ajeromi-Ifelodun</option>
																	<option value="Alimosho">Alimosho</option>
																	<option value="Amuwo-Odofin">Amuwo-Odofin</option>
																	<option value="Apapa">Apapa</option>
																	<option value="Badagry">Badagry</option>
																	<option value="Epe">Epe</option>
																	<option value="Eti-Osa">Eti-Osa</option>
																	<option value="Ibeju/Lekki">Ibeju/Lekki</option>
																	<option value="Ifako-Ijaye">Ifako-Ijaye</option>
																	<option value="Ikeja">Ikeja</option>
																	<option value="Ikorodu">Ikorodu</option>
																	<option value="Kosofe">Kosofe</option>
																	<option value="Lagos Island">Lagos Island</option>
																	<option value="Lagos Mainland">Lagos Mainland</option>
																	<option value="Mushin">Mushin</option>
																	<option value="Ojo">Ojo</option>
																	<option value="Oshodi-Isolo">Oshodi-Isolo</option>
																	<option value="Shomolu">Shomolu</option>
																	<option value="Surulere">Surulere</option>
																</optgroup>
															</select>
														</div>	
													</div>
													
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Age</label>
															<select class="custom-select rounded">
															<option>20-25 Years</option>
                                    <option>26-30 Years</option>
                                    <option>31-35 Years</option>
                                    <option>36-40 Years</option>
                                    <option>41-45 Years</option>
                                    <option>45 Years and Above</option>
															</select>
														</div>
													</div>
													<div class="col-xl-12 col-lg-12">
														<div class="form-group">
															<label class="text-dark ft-medium">About Info</label>
															<textarea class="form-control with-light" placeholder="A little about yourself"></textarea>
														</div>
													</div>
													
													<div class="col-xl-12 col-lg-12">
														<div class="form-group">
															<button type="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save Changes</button>
														</div>
													</div>
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