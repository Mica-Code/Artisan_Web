<?php

$title = "Edit Job";
$nav='<ul data-submenu-title="Main Navigation">
<li><a href="client-index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
<li><a href="dashboard-post-job.php"><i class="lni lni-files mr-2"></i>Post New Job</a></li>
<li class="active"><a href="dashboard-manage-jobs.php"><i class="lni lni-add-files mr-2"></i>Manage Jobs</a></li>
<li><a href="dashboard-manage-applications.php"><i class="lni lni-briefcase mr-2"></i>Manage Applicants</a></li>
<!-- <li><a href="dashboard-shortlisted-resume.php"><i class="lni lni-bookmark mr-2"></i>BookmarkResumes<span class="count-tag bg-warning">4</span></a></li> -->
<!-- <li><a href="dashboard-packages.html"><i class="lni lni-mastercard mr-2"></i>Packages</a></li>
<li><a href="dashboard-messages.html"><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a></li> -->
</ul>
<ul data-submenu-title="My Accounts">
<li><a href="dashboard-client-profile.php"><i class="lni lni-user mr-2"></i>Edit Profile </a></li>
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
								<h1 class="ft-medium">Edit Job</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="client-index.php">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="dashboard-manage-jobs.php">Manage Job</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="theme-cl">Edit Job</a></li>
                                        
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
											<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>Edit Job</h4>	
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
															<input type="text" id="postJobTitle" name="postJobTitle" class="form-control rounded" value="<?php echo $postJobTitle;?>">
														</div>
													</div>
													
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Description</label>
															<textarea id="postJobDesc" name="postJobDesc" class="form-control rounded"><?php echo $postJobDesc;?></textarea>
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
															<?php

$Trades = array('', 'AC-Installation/Repair', 'Aluminium-Windows', 'Appliance-Maintenance', 'Architectural-Design',
'Artist', 'Auto-Mechanic', 'Bathroom-Renovation', 'Bricklayer/Mason', 'CableTV/CCTV-Installer', 'CableTV-Installation', 'Car-Rewire/Car-tracker', 'Car-Upholstery',
'Car-Wash', 'Carpentry', 'Catering', 'CCTV/Biometric-Access-Control', 'Ceiliing-Repair', 'Ceramic/Tiling', 'Cleaning', 'Cobbler', 'Cosmetologists',
'Craftman', 'Curtain-Hanging', 'Deck-Building', 'Digital-Marketing', 'Door-Installation/Repair', 'Driver/Rider', 'Electrical', 'Electronic-Technician',
'Event-Planner', 'Event-Usher', 'Factory-Worker', 'Farm-worker', 'Fascinators', 'Flooring-installation/Repair', 'Framing', 'Furniture-Refinishing', 'Gadgets-Repairs',
'Gardening', 'Gas-Man', 'Hair-Stylist', 'Heating-Systems', 'Heavy-Duty Machines', 'Horticulturist', 'Hot-Tubs/Spa', 'House-Renovation', 'Housekeeping', 'Insulation-Installation',
'Interior-Decoration', 'Inverter-Technician', 'Janitorial-Services', 'Landscaping', 'Laundry-Service', 'Makeup-Artist', 'Manicure/Pedicure', 'Mini-Generators',
'Motor-mechanic', 'Musical-studio', 'Networking/Access-Control', 'Painting', 'Panel-Beater', 'Patio-Stone-Installation', 'Pest-Control', 'Photography', 'Plumbing',
'POP Ceiling-Services', 'Porches', 'Property-Valuers', 'Refrigerator-Technician', 'Roofing', 'Septic-Systems', 'Solar/Inverter-Technician', 'Solar-Panels',
'Soundproof/Mini-Generators', 'Soundproof-Generators', 'Soundproofing', 'Sprinkler-System', 'Stain-Removal', 'Surveyor', 'Swimming-Pool-Maintenance', 'System-Technici-an',
'Tailoring', 'Tiling', 'Video/Graphics', 'vulcanizer', 'Wall-Building', 'Wallpapering', 'Waste/Junk-Removal', 'Water-Purification', 'Water-Softening', 'Web-Designer',
'Welder', 'Window-Installation');

?>
<select class="form-control rounded" id="postJobProfession" name="postJobProfession">
<?php

foreach($Trades as $Trade2){
    if($Trade2 == $postJobProfession){
        echo "<option value=".$Trade2." selected='selected'>".$Trade2."</option>";
    }
    else{
        echo "<option value=".$Trade2.">".$Trade2."</option>";
    }

}

?>
</select>
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
													<div class="form-group">
															<label class="text-dark ft-medium">Career/Experience Level</label>
															<?php

$experiences = array('', 'Beginner', 'Intermediate', 'Expert');

?>
                                                <select class="form-control rounded" id="postJobLevel" name="postJobLevel">
                                                <?php

foreach($experiences as $experience2){
    if($experience2 == $postJobLevel){
        echo "<option value=".$experience2." selected='selected'>".$experience2."</option>";
    }
    else{
        echo "<option value=".$experience2.">".$experience2."</option>";
    }
    
}

?>
</select>
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Job Type</label>
															<?php

$jobtypes = array('', 'Full-Time', 'Part-Time', 'Contract', 'Intern');

?>
                                                <select class="form-control rounded" id="postJobType" name="postJobType">
                                                <?php

foreach($jobtypes as $jobtype2){
    if($jobtype2 == $postJobType){
        echo "<option value=".$jobtype2." selected='selected'>".$jobtype2."</option>";
    }
    else{
        echo "<option value=".$jobtype2.">".$jobtype2."</option>";
    }
    
}

?>
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
															<input type="date" id="postJobDeadline" name="postJobDeadline" class="form-control rounded" value="<?php echo $postJobDeadline;?>">
														</div>
													</div>
													
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Wanted Local Government Area (Lagos)</label>
															<?php

$locations = array('', 'Agege', 'Ajeromi-Ifelodun', 'Alimosho', 'Amuwo-Odofin', 'Apapa', 'Badagry', 'Epe', 'Eti-Osa', 'Ibeju/Lekki', 'Ifako-Ijaye', 'Ikeja', 'Ikorodu', 'Kosofe',
'Lagos-Island', 'Lagos-Mainland', 'Mushin', 'Ojo', 'Oshodi-Isolo', 'Shomolu', 'Surulere');

?>
                                                <select class="form-control rounded" id="postJobLocation" name="postJobLocation">
                                                <?php

foreach($locations as $location2){
    if($location2 == $postJobLocation){
        echo "<option value=".$location2." selected='selected'>".$location2."</option>";
    }
    else{
        echo "<option value=".$location2.">".$location2."</option>";
    }
    
}

?> 
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
														<div class="form-group" style="margin-bottom: 0px;">
                              <label class="text-dark ft-medium" style="margin-top: 5px; margin-bottom: 0px;"><h5>Budget (&#x20A6;)</h5></label>
														</div>
                          </div>                 

                          <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="form-group">
                              <label class="text-dark ft-medium">Minimum Budget</label>
                              <div class="input-group">
                                <span class="input-group-addon">
                                <span class="arrow"></span>
                                &#x20A6;
                                </span>
                                <input type="number" class="form-control" name="postJobMinBud" value="<?php echo $postJobMinBud?>" required>
                                <span class="input-group-addon">
                                <span class="arrow"></span>
                                .00
                                </span>
                              </div>
                              <!-- <input type="text" class="form-control"/> -->
                            </div>
                          </div>

                          <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="form-group">
                              <label class="text-dark ft-medium">Maximum Budget</label>
                              <div class="input-group">
                                <span class="input-group-addon">
                                <span class="arrow"></span>
                                &#x20A6;
                                </span>
                                <input type="number" class="form-control" name="postJobMaxBud" value="<?php echo $postJobMaxBud?>" required>
                                <span class="input-group-addon">
                                <span class="arrow"></span>
                                .00
                                </span>
                              </div>
                              <!-- <input type="text" class="form-control"/> -->
                            </div>
                          </div>
													
													<div class="col-xl-12 col-lg-12 col-md-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Full Address</label>
															<input type="text" id="postJobAddress" name="postJobAddress" class="form-control" value="<?php echo $postJobAddress;?>"/>
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
															<button type="submit" id="editJob" name="editJob"class="btn btn-md ft-medium text-light rounded theme-bg">Publish Job</button>
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