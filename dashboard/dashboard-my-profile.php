<?php

$title = "Edit Profile";
$nav='<ul data-submenu-title="Main Navigation">
<li ><a href="index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
<li><a href="dashboard-add-resume.php"><i class="lni lni-add-files mr-2"></i>Create Resume</a></li>
<li ><a href="dashboard-alert-job.php"><i class="ti-bell mr-2"></i>Vacant Jobs</a></li>
<li ><a href="dashboard-applied-jobs.php"><i class="lni lni-briefcase mr-2"></i>Applied jobs</a></li>
<li ><a href="report.php"><i class="lni lni-files mr-2"></i>Generate Report</a></li>
<!-- <li><a href="dashboard-saved-jobs.php"><i class="lni lni-bookmark mr-2"></i>Bookmark Jobs</a></li> -->
<!-- <li><a href="dashboard-packages.php"><i class="lni lni-mastercard mr-2"></i>Packages</a></li> -->
<!-- <li><a href="dashboard-messages.php"><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a></li> -->
</ul>
<ul data-submenu-title="My Accounts">
<li class="active"><a href="dashboard-my-profile.php"><i class="lni lni-user mr-2"></i>My Profile </a></li>
<li><a href="dashboard-change-password.php"><i class="lni lni-lock-alt mr-2"></i>Change Password</a></li>
<li><a onclick= "return confirm(\'You are about to Delete your account. \nData(s) related to you will be cleared from the system. \nThis action is irreversible.\')" href="dashboard-delete-acct.php"><i class="lni lni-trash-can mr-2"></i>Delete Account</a></li>
<li><a href="logout.php"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
</ul>';
// $nav='<ul data-submenu-title="Main Navigation">
// <li><a href="index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
// <!-- S<li><a href="dashboard-manage-resume.php"><i class="lni lni-files mr-2"></i>Manage Resumes</a></li> -->
// <li><a href="dashboard-add-resume.php"><i class="lni lni-add-files mr-2"></i>Create Resume</a></li>
// <li><a href="dashboard-applied-jobs.php"><i class="lni lni-briefcase mr-2"></i>Applied jobs</a></li>
// <li><a href="dashboard-alert-job.php"><i class="ti-bell mr-2"></i>Vacant Jobs</a></li>
// <!-- <li><a href="dashboard-saved-jobs.php"><i class="lni lni-bookmark mr-2"></i>Bookmark Jobs</a></li> -->
// <!-- <li><a href="dashboard-packages.php"><i class="lni lni-mastercard mr-2"></i>Packages</a></li>
// <li><a href="dashboard-messages.php"><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a></li> -->
// </ul>
// <ul data-submenu-title="My Accounts">
// <li class="active"><a href="dashboard-my-profile.php"><i class="lni lni-user mr-2"></i>My Profile </a></li>
// <li><a href="dashboard-change-password.php"><i class="lni lni-lock-alt mr-2"></i>Change Password</a></li>
// <li><a onclick= "return confirm(\'You are about to Delete your account. \nData(s) related to you will be cleared from the system. \nThis action is irreversible.\')" href="dashboard-delete-acct.php"><i class="lni lni-trash-can mr-2"></i>Delete Account</a></li>
// <li><a href="logout.php"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
// </ul>';

include_once('include/head.php');


if(isset($_POST['save'])){

	require('edit-profile-process.php');

}

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
											<h4 class="mb-0 ft-medium fs-md" id="changeAcctText"><i class="fa fa-user mr-1 theme-cl fs-sm"></i>My Account</h4>	
										</div>
									</div>
									
									<div class="_dashboard_content_body py-3 px-3">
										<form class="row" method="post" enctype="multipart/form-data">
											<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12" id="register">
												<div class="custom-file avater_uploads">
												
												  
												  <!-- <label class="custom-file-label" for="customFile"><i class="fa fa-user"></i></label> -->
												  <img src='../Account/<?php  echo $profile_pic;?>' id='image' class='image' width='200px' height='200px'
												style="margin-top:-20px; margin-left:50px; margin-top:20px;">
												<input type="file" class="" id="customFile" style="margin-left:10px; margin-top:20px;" name="profile_pic">
												<span style="color:red; font-size:12px; margin-left:10px; margin-top:10px;"><strong>Note:</strong> Profile picture will be updated once saved.</span>
												</div>
												
											</div>
											
											<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
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
													</div>

													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Full Name</label>
															<input type="text" name="fullName" class="form-control rounded" value="<?php echo $fname;?>">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Username</label>
															<input type="text" name="username" class="form-control rounded" value="<?php echo $uname;?>" disabled>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Phone</label>
															<input type="text" name="phone" class="form-control rounded" value="<?php echo $phone;?>">
														</div>
													</div>


													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Email</label>
															<input type="email"name="email" class="form-control rounded" value="<?php echo $email;?>" disabled>
														</div>
													</div>
													

													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
														<label class="text-dark ft-medium">Select your Location</label>

														

														<?php

$locations = array('', 'Agege', 'Ajeromi-Ifelodun', 'Alimosho', 'Amuwo-Odofin', 'Apapa', 'Badagry', 'Epe', 'Eti-Osa', 'Ibeju/Lekki', 'Ifako-Ijaye', 'Ikeja', 'Ikorodu', 'Kosofe',
'Lagos-Island', 'Lagos-Mainland', 'Mushin', 'Ojo', 'Oshodi-Isolo', 'Shomolu', 'Surulere');

?>
                                                <select class="form-control rounded" id="location" name="location">
                                                <?php

foreach($locations as $location2){
    if($location2 == $location){
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
																										
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Date of Birth</label>
															<input type="date" name="dob" class="form-control rounded" value="<?php if(isset($dob) && $dob != ""){echo $dob;} else {echo "";} ?>">
														</div>
													</div>




													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
														<label class="text-dark ft-medium">Experience Level</label>

														

														<?php

$experiences = array('', 'Beginner', 'Intermediate', 'Expert');

?>
                                                <select class="form-control rounded" id="experience" name="experience">
                                                <?php

foreach($experiences as $experience2){
    if($experience2 == $experience){
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


													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
														<label class="text-dark ft-medium">Job Type</label>

														

														<?php

$jobtypes = array('', 'Full-Time', 'Part-Time', 'Contract', 'Intern');

?>
                                                <select class="form-control rounded" id="jobtype" name="jobtype">
                                                <?php

foreach($jobtypes as $jobtype2){
    if($jobtype2 == $jobtype){
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




													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Full Address</label>
															<input type="text" name="address" class="form-control rounded" value="<?php echo $address;?>">
														</div>
													</div>
													<div class="col-xl-6 col-lg-6 col-md-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Trade</label>
															<input type="text" name="address" class="form-control rounded" value="<?php echo $handwork;?>" disabled>
														</div>
													</div>
													<div class="col-xl-12 col-lg-12">
														<div class="form-group">
															<label class="text-dark ft-medium">Skill Description</label>
															<textarea class="form-control with-light" name="skill_desc"><?php echo $skill_desc;?></textarea>
														</div>
													</div>
													<div class="col-xl-12 col-lg-12">
														<div class="form-group">
															<label class="text-dark ft-medium">About Yourself</label>
															<textarea class="form-control with-light" name="about"><?php echo $about;?></textarea>
														</div>
													</div>
													
													<div class="col-xl-12 col-lg-12">
														<div class="form-group">
															<button type="submit" name="save" id="save" class="btn btn-md ft-medium text-light rounded theme-bg">Save Changes</button>
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