<?php

$title = "Post Jobs";
$nav='<ul data-submenu-title="Main Navigation">
<li><a href="client-index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
<li class="active"><a href="dashboard-post-job.php"><i class="lni lni-files mr-2"></i>Post New Job</a></li>
<li><a href="dashboard-manage-jobs.php"><i class="lni lni-add-files mr-2"></i>Manage Jobs</a></li>
<li><a href="dashboard-manage-applications.php"><i class="lni lni-briefcase mr-2"></i>Manage Applicants</a></li>
<!-- <li><a href="dashboard-shortlisted-resume.php"><i class="lni lni-bookmark mr-2"></i>BookmarkResumes<span class="count-tag bg-warning">4</span></a></li> -->
<!-- <li><a href="dashboard-packages.html"><i class="lni lni-mastercard mr-2"></i>Packages</a></li>
<li><a href="dashboard-messages.html"><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a></li> -->
</ul>
<ul data-submenu-title="My Accounts">
<li><a href="dashboard-client-profile.php"><i class="lni lni-user mr-2"></i>My Profile </a></li>
<li><a href="dashboard-change-password.php"><i class="lni lni-lock-alt mr-2"></i>Change Password</a></li>
<li><a href="javascript:void(0);"><i class="lni lni-trash-can mr-2"></i>Delete Account</a></li>
<li><a href="index.php"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
</ul>';

include_once('include/client-head.php');


if(isset($_POST['postJob'])){
	require("postJob-Process.php");
}

?>	
				
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Post A New Job</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="index.php">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Post Job</a></li>
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
											<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>Post Job</h4>	
										</div>
									</div>
									
									<div class="_dashboard_content_body py-3 px-3">
										<form class="row" method="post">
											<div class="col-xl-12 col-lg-12 col-md-12">
												<div class="row">
												
													<div class="col-xl-12 col-lg-12 col-md-12">
													<?php if(!empty($error)){ ?>
                                        <div class='alert alert-danger' style="text-align:left;">
                                        <ul>
                                                <?php foreach($error as $err){?>
                                                   <li style="">&bull; <?php echo $err; ?></li>
                                                <?php }?>
                                            </ul>
                                        </div>
                                        <?php }?>
														<div class="form-group">
															<label class="text-dark ft-medium">Job Title</label>
															<input type="text" id="postJobTitle" name="postJobTitle" class="form-control rounded" placeholder="Title">
														</div>
													</div>
													
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Description</label>
															<textarea id="postJobDesc" name="postJobDesc" class="form-control rounded" placeholder="Job Description"></textarea>
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Email Address</label>
															<input type="text" class="form-control rounded" value="<?php echo $email;?>" disabled>
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Username</label>
															<input type="text" class="form-control rounded" value="<?php echo $uname;?>" disabled>
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Profession Needed</label>
															<select class="form-control rounded" id="postJobProfession" name="postJobProfession">
                                    <option value="">Select Profession</option>
                                    <option value="AC Installation and Repair">
                                      AC Installation and Repair
                                    </option>
                                    <option value="Aluminium Windows">
                                      Aluminium Windows
                                    </option>
                                    <option value="Appliance Maintenance">
                                      Appliance Maintenance
                                    </option>
                                    <option value="Architectural Design">
                                      Architectural Design
                                    </option>
                                    <option value="Artist">Artist</option>
                                    <option value="Auto Mechanic">
                                      Auto Mechanic
                                    </option>
                                    <option value="Bathroom Renovation">
                                      Bathroom Renovation
                                    </option>
                                    <option value="Bricklayer and Mason">
                                      Bricklayer and Mason
                                    </option>
                                    <option value="CableTV and CCTV Installer">
                                      CableTV and CCTV Installer
                                    </option>
                                    <option value="CableTV Installation">
                                      CableTV Installation
                                    </option>
                                    <option value="Car Rewire and Car tracker">
                                      Car Rewire and Car tracker
                                    </option>
                                    <option value="Car Upholstery">
                                      Car Upholstery
                                    </option>
                                    <option value="Car Wash">Car Wash</option>
                                    <option value="Carpentry">Carpentry</option>
                                    <option value="Catering">Catering</option>
                                    <option
                                      value="CCTV / Biometric Access Control"
                                    >
                                      CCTV / Biometric Access Control
                                    </option>
                                    <option value="Ceiliing Repair">
                                      Ceiliing Repair
                                    </option>
                                    <option value="Ceramic and tiling">
                                      Ceramic and tiling
                                    </option>
                                    <option value="Cleaning">Cleaning</option>
                                    <option value="Cobbler">Cobbler</option>
                                    <option value="Cosmetologists">
                                      Cosmetologists
                                    </option>
                                    <option value="Craftman">Craftman</option>
                                    <option value="Curtain Hanging">
                                      Curtain Hanging
                                    </option>
                                    <option value="Deck Building">
                                      Deck Building
                                    </option>
                                    <option value="Digital Marketing">
                                      Digital Marketing
                                    </option>
                                    <option value="Door Installation And Repair">
                                      Door Installation And Repair
                                    </option>
                                    <option value="Driver/Rider">
                                      Driver/Rider
                                    </option>
                                    <option value="Electrical">Electrical</option>
                                    <option value="Electronic Technician">
                                      Electronic Technician
                                    </option>
                                    <option value="Event Planner">
                                      Event Planner
                                    </option>
                                    <option value="Event Usher">
                                      Event Usher
                                    </option>
                                    <option value="Factory Worker">
                                      Factory Worker
                                    </option>
                                    <option value="Farm worker">
                                      Farm worker
                                    </option>
                                    <option value="Fascinators">
                                      Fascinators
                                    </option>
                                    <option
                                      value="Flooring installation and Repair"
                                    >
                                      Flooring installation and Repair
                                    </option>
                                    <option value="Framing">Framing</option>
                                    <option value="Furniture Refinishing">
                                      Furniture Refinishing
                                    </option>
                                    <option value="Gadgets Repairs">
                                      Gadgets Repairs
                                    </option>
                                    <option value="Gardening">Gardening</option>
                                    <option value="Gas Man">Gas Man</option>
                                    <option value="Hair Stylist">
                                      Hair Stylist
                                    </option>
                                    <option value="Heating Systems">
                                      Heating Systems
                                    </option>
                                    <option value="Heavy Duty Machines">
                                      Heavy Duty Machines
                                    </option>
                                    <option value="Horticulturist">
                                      Horticulturist
                                    </option>
                                    <option value="Hot Tubs and Spa">
                                      Hot Tubs and Spa
                                    </option>
                                    <option value="House Renovation">
                                      House Renovation
                                    </option>
                                    <option value="Housekeeping">
                                      Housekeeping
                                    </option>
                                    <option value="Insulation Installation">
                                      Insulation Installation
                                    </option>
                                    <option value="Interior Decoration">
                                      Interior Decoration
                                    </option>
                                    <option value="Inverter Technician">
                                      Inverter Technician
                                    </option>
                                    <option value="Janitorial Services">
                                      Janitorial Services
                                    </option>
                                    <option value="Landscaping">
                                      Landscaping
                                    </option>
                                    <option value="Laundry Service">
                                      Laundry Service
                                    </option>
                                    <option value="Makeup Artist">
                                      Makeup Artist
                                    </option>
                                    <option value="Manicure and Pedicure">
                                      Manicure and Pedicure
                                    </option>
                                    <option value="Mini Generators">
                                      Mini Generators
                                    </option>
                                    <option value="Motor mechanic">
                                      Motor mechanic
                                    </option>
                                    <option value="Musical studio">
                                      Musical studio
                                    </option>
                                    <option value="Networking and Access Control">
                                      Networking and Access Control
                                    </option>
                                    <option value="Painting">Painting</option>
                                    <option value="Panel Beater">
                                      Panel Beater
                                    </option>
                                    <option value="Patio Stone Installation">
                                      Patio Stone Installation
                                    </option>
                                    <option value="Pest Control">
                                      Pest Control
                                    </option>
                                    <option value="Photography">
                                      Photography
                                    </option>
                                    <option value="Plumbing">Plumbing</option>
                                    <option value="POP Ceiling Services">
                                      POP Ceiling Services
                                    </option>
                                    <option value="Porches">Porches</option>
                                    <option value="Property Valuers">
                                      Property Valuers
                                    </option>
                                    <option value="Refrigerator Technician">
                                      Refrigerator Technician
                                    </option>
                                    <option value="Roofing">Roofing</option>
                                    <option value="Septic Systems">
                                      Septic Systems
                                    </option>
                                    <option value="Solar and Inverter Technician">
                                      Solar and Inverter Technician
                                    </option>
                                    <option value="Solar Panels">
                                      Solar Panels
                                    </option>
                                    <option
                                      value="Soundproof and Mini Generators"
                                    >
                                      Soundproof and Mini Generators
                                    </option>
                                    <option value="Soundproof Generators">
                                      Soundproof Generators
                                    </option>
                                    <option value="Soundproofing">
                                      Soundproofing
                                    </option>
                                    <option value="Sprinkler System">
                                      Sprinkler System
                                    </option>
                                    <option value="Stain Removal">
                                      Stain Removal
                                    </option>
                                    <option value="Surveyor">Surveyor</option>
                                    <option value="Swimming Pool Maintenance">
                                      Swimming Pool Maintenance
                                    </option>
                                    <option value="System Technician">
                                      System Technician
                                    </option>
                                    <option value="Tailoring">Tailoring</option>
                                    <option value="Tiling">Tiling</option>
                                    <option value="Video and Graphics">
                                      Video and Graphics
                                    </option>
                                    <option value="vulcanizer">vulcanizer</option>
                                    <option value="Wall Building">
                                      Wall Building
                                    </option>
                                    <option value="Wallpapering">
                                      Wallpapering
                                    </option>
                                    <option value="Waste and Junk Removal">
                                      Waste and Junk Removal
                                    </option>
                                    <option value="Water Purification">
                                      Water Purification
                                    </option>
                                    <option value="Water Softening">
                                      Water Softening
                                    </option>
                                    <option value="Web Designer">
                                      Web Designer
                                    </option>
                                    <option value="Welder">Welder</option>
                                    <option value="Window Installation">
                                      Window Installation
                                    </option>
                                  </select>
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
													<div class="form-group">
															<label class="text-dark ft-medium">Career/Experience Level</label>
															<select class="form-control rounded" id="postJobLevel" name="postJobLevel">
															<option value="">Select Level</option>
																<option value="Beginner">Beginner</option>
																<option value="Intermediate">Intermediate</option>
																<option value="Expert">Expert</option>
															</select>
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Type</label>
															<select class="form-control rounded" id="postJobType" name="postJobType">
															<option value="">Select Job Type</option>
																<option value="Full Time">Full Time</option>
																<option value="Part Time">Part Time</option>
																<option value="Internship">Internship</option>
																<option value="Contract">Contract</option>
																<option value="Freelancing">Freelancing</option>
															</select>
														</div>
													</div>
													
													<!-- <div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Career Level</label>
															<select class="form-control rounded">
																<option>Begginer</option>
																<option>Junior</option>
																<option>Manager</option>
																<option>Team leader</option>
															</select>
														</div>
													</div> -->
													
													<!-- <div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Specialisms</label>
															<select class="form-control rounded">
																<option>Web Designing</option>
																<option>JAVA Advance</option>
																<option>PHP Developer</option>
																<option>IOS Developer</option>
																<option>App Developer</option>
																<option>Fashion Designing</option>
																<option>Bank Services</option>
															</select>
														</div>
													</div> -->
													
													<!-- <div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Experience</label>
															<select class="form-control rounded">
																<option>Begginer</option>
																<option>0 To 6 Month</option>
																<option>1 Years</option>
																<option>2 Years</option>
																<option>3 Years</option>
																<option>4 Years</option>
																<option>5+ Years</option>
															</select>
														</div>
													</div> -->
													
													<!-- <div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Qualification</label>
															<select class="form-control rounded">
																<option>Graduation</option>
																<option>Master Degree</option>
																<option>BPharma</option>
																<option>P.H.D.</option>
																<option>Other</option>
															</select>
														</div>
													</div> -->
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Gender</label>
															<select class="form-control rounded" id="postJobGender" name="postJobGender">
															<option value="">--- Select Gender ---</option>
																<option value="Male">Male</option>
																<option value="Female">Female</option>
																<option value="Other">Other</option>
															</select>
														</div>
													</div>
													
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Application Deadline</label>
															<input type="date" id="postJobDeadline" name="postJobDeadline" class="form-control rounded" placeholder="dd-mm-yyyy">
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Wanted Local Government Area (Lagos)</label>
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

													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Phone Number</label>
															<input type="text" class="form-control" value="<?php echo $phone;?>" disabled />
														</div>
													</div>
													
													<!-- <div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">City</label>
															<input type="text" class="form-control" placeholder="City" />
														</div>
													</div> -->
													
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Full Address</label>
															<input type="text" id="postJobAddress" name="postJobAddress" class="form-control" placeholder="10, Marke Juger, SBI Road" />
														</div>
													</div>
													
													<!-- <div class="col-xl-4 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Zip Code</label>
															<input type="text" class="form-control" placeholder="Zip" />
														</div>
													</div>
													
													<div class="col-xl-4 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Latitude</label>
															<input type="text" class="form-control" placeholder="Liverpool" />
														</div>
													</div>
													
													<div class="col-xl-4 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Longitude</label>
															<input type="text" class="form-control" placeholder="Liverpool" />
														</div>
													</div> -->													
													<div class="col-12">
														<div class="form-group">
															<button type="submit" id="postJob" name="postJob"class="btn btn-md ft-medium text-light rounded theme-bg">Publish Job</button>
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



				<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Great!</h4>	
				<p>Your account has been created successfully.</p>
				<button class="btn btn-success" data-dismiss="modal"><span>Start Exploring</span> <i class="material-icons">&#xE5C8;</i></button>
			</div>
		</div>
	</div>
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