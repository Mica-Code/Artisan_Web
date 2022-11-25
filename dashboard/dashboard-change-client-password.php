<?php

$title = "Change Password";
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
<li><a href="dashboard-client-profile.php"><i class="lni lni-user mr-2"></i>Edit Profile </a></li>
<li class="active"><a href="dashboard-change-client-password.php"><i class="lni lni-lock-alt mr-2"></i>Change Password</a></li>
<li><a onclick= "return confirm(\'You are about to Delete your account. \nData(s) related to you will be cleared from the system. \nThis action is irreversible.\')" href="dashboard-delete-acct.php"><i class="lni lni-trash-can mr-2"></i>Delete Account</a></li>
<li><a href="logout.php"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
</ul>';


include_once('include/client-head.php');

if(isset($_POST['submit'])){

	require('./include/helper.php');

	// error variable.
	$error = array();

	$password = validate_input_text($_POST['password']);
	if (empty($password)){
		$error[] = "You forgot to enter your Old Password";
	}

	$new_password = validate_input_text($_POST['new_password']);
	if (empty($new_password)){
		$error[] = "You forgot to enter your New Password";
	}

	$c_new_password = validate_input_email($_POST['c_new_password']);
	if (empty($c_new_password)){
		$error[] = "You forgot to Confirm your password";
	}


	if(empty($error)){
    
		require ('../includes/mydatabase2.php');

		$query = "SELECT * from art_reg_tbl WHERE userID = $session_id";
		$result = mysqli_query($dbc, $query);

		$row = mysqli_fetch_array($result);
		$pass = $row['password'];


		if(md5($password) != $pass){
			$error[] = "Password is Incorrect";
		}
		elseif($new_password != $c_new_password){
			$error[] = "New Password and Confirm Password must match";
		}
		else{
			$hashpassword = md5($new_password);
			$query = "UPDATE art_reg_tbl SET password='$hashpassword' WHERE userID=$session_id" or die(mysqli_error($dbc));;
			$result = mysqli_query($dbc, $query);
			if($result){
		
				echo "<script>alert('Password Updated Successfully')</script>";
					
				echo '<script>window.location="client-index.php"</script>';
				
			}else{
				print "Error while registration...!";
				echo mysqli_error($dbc);
			}
		}
	



		
	}
	

}



?>			
			
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Change Password</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Change Password</a></li>
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
											<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-lock mr-1 theme-cl fs-sm"></i>Change Password</h4>	
										</div>
									</div>
									
									<div class="_dashboard_content_body py-3 px-3">
										<form class="row" method="post">
											<div class="col-xl-8 col-lg-9 col-md-12 col-sm-12">
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
													<label class="text-dark ft-medium">Old Password</label>
													<input type="password" name="password" class="form-control rounded" style="font-size:48px;">
												</div>
											</div>
											<div class="col-xl-8 col-lg-9 col-md-12 col-sm-12">
												<div class="form-group">
													<label class="text-dark ft-medium">New Password</label>
													<input type="password" name="new_password" class="form-control rounded" style="font-size:48px;">
												</div>
											</div>
											<div class="col-xl-8 col-lg-9 col-md-12 col-sm-12">
												<div class="form-group">
													<label class="text-dark ft-medium">Confirm Password</label>
													<input type="password" name="c_new_password" class="form-control rounded" style="font-size:48px;">
												</div>
											</div>
											<div class="col-xl-12 col-lg-12">
												<div class="form-group">
													<button type="submit" name="submit" class="btn btn-md ft-medium text-light rounded theme-bg">Save Changes</button>
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