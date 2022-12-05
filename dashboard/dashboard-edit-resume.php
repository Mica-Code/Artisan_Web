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


//$_GET

if (isset($_GET['rand']) && isset($_GET['getToken'])) {
    
    $rand = $_GET['rand'];
    $getToken = $_GET['getToken'];
	$type = $_GET['type'];

    // echo "<script>alert('".$rand." and ".$getToken."');</script>";

    if (($rand != '') && ($getToken != '') && ($type == 'edu')){
        // echo "<script>alert('Editing Education');</script>";
        $query = "SELECT * from education where eduID='$rand' AND eduToken='$getToken'";
        $execute = mysqli_query($dbc, $query);
        $num_row=mysqli_num_rows($execute);
        if($num_row > 0){
            $row=mysqli_fetch_array($execute);

			$schnameE = $row['eduSchoolName'];
			$schqtitleE = $row['eduQualification'];
			$schstartdateE = $row['eduStartDate'];
			$schenddateE = $row['eduEndDate'];
			$schTokenE = $row['eduToken'];

        }else{
            echo "<script>window.location='dashboard-add-resume.php'</script>";
        }
    }
    elseif(($rand != '') && ($getToken != '') && ($type == 'exp')){
        // echo "<script>alert('Editing Education');</script>";
        $query = "SELECT * from experience where expID='$rand' AND expToken='$getToken'";
        $execute = mysqli_query($dbc, $query);
        $num_row=mysqli_num_rows($execute);
        if($num_row > 0){
            $row=mysqli_fetch_array($execute);

			$expIDE = $row['expID'];
            $expnameE = $row['expEmployerName'];
            $expqtitleE = $row['expJobTitle'];
            $expstartdateE = $row['expStartDate'];
            $expenddateE = $row['expEndDate'];
            $expdescE = $row['expJobDesc'];
            $expTokenE = $row['expToken'];

        }else{
            echo "<script>window.location='dashboard-add-resume.php'</script>";
        }
    }
}




//$_POST

if(isset($_POST['editEdu'])){
    // echo "<script>alert('The save edit button is clicked');</script>";
	require('dashboard-add-edit-resume-process.php');
}

if(isset($_POST['editExp'])){
	require('dashboard-add-edit-resume-process.php');
}






?>			

				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Edit Resume</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Edit Resume</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>

                    <?php
                    if ($type == 'edu'){
                    ?>
					
					<div class="dashboard-widg-bar d-block">
	
                        <!-- Edit Education -->
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
                                                        <input type="text" name="schname" class="form-control rounded" placeholder="School Name" value="<?php echo $schnameE;?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-dark ft-medium">Qualification</label>
                                                        <input type="text" name="schqtitle" class="form-control rounded" placeholder="Qualification Title" value="<?php echo $schqtitleE;?>">
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="text-dark ft-medium">Start Date</label>
                                                                <input type="date" name="schstartdate" class="form-control rounded" placeholder="dd-mm-yyyy" value="<?php echo $schstartdateE;?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label class="text-dark ft-medium">End Date</label>
                                                                <input type="date" name="schenddate" class="form-control rounded" placeholder="dd-mm-yyyy" value="<?php echo $schenddateE;?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>

                                        </form>
                                        
                                    </div>

                                    <!-- Save Edit Education-->
                                    <div class="row" style="text-align:center; text-align:center;">
                                        <div class="col-lg-12 col-md-12">
                                            <input form="eduform" type="submit" name="editEdu" class="btn btn-md ft-medium text-light rounded theme-bg" style="margin-bottom: 20px;" value="Save Edit">
                                        </div>	
                                    </div>
                                    
                                </div>
                            </div>	

                        </div>	

                        <!-- End of Edit Education -->
                    </div>


                    <?php
                    }

                    elseif($type == 'exp'){
                    ?>

                        <div class="additionals">

                            <!-- edit Experience -->
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
                                                                <input type="text" name="employername" class="form-control rounded" value="<?php echo $expnameE;?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="text-dark ft-medium">Job Title</label>
                                                                <input type="text" name="jobtitle" class="form-control rounded" value="<?php echo $expqtitleE;?>">
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label class="text-dark ft-medium">Start Date</label>
                                                                        <input type="date" name="jobstartdate" class="form-control rounded" value="<?php echo $expstartdateE;?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label class="text-dark ft-medium">End Date</label>
                                                                        <input type="date" name="jobenddate" class="form-control rounded" value="<?php echo $expenddateE;?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="text-dark ft-medium">Note</label>
                                                                <textarea class="form-control ht-80" name="jobnote" ><?php echo $expdescE;?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </form>

                                            </div>



                                            <!-- Save Experience-->
                                            <div class="row" style="text-align:center; text-align:center;">
                                                <div class="col-lg-12 col-md-12">
                                                    <input form="expform" type="submit" name="editExp" class="btn btn-md ft-medium text-light rounded theme-bg" style="margin-bottom: 20px;" value="Save Experience">
                                                </div>	
                                            </div>

                                        
                                        </div>
                                    </div>	
                                </div>

                            <!-- End of Edit Experience -->

                        </div>


                        <?php
                        }?>


					<?php
include_once('include/footer.php');
?>			