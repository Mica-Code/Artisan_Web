<?php



$title = "Generate Report";
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


// if(isset($_POST['gen_rep'])){
//     $q = $_POST['selReport'];
//     echo "<script>alert('".$q."')</script>";
// 	require('print.php?q='.$q.'');
    
// }

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
                            <span style="color:red;">No Report has been Generated so far</span>
								<h1 class="ft-medium">Generate Report</h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item text-muted"><a href="#">Dashboard</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Generate Report</a></li>
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
											<h4 class="mb-0 ft-medium fs-md"><i class="fa fa-file mr-1 theme-cl fs-sm"></i>Generate Report</h4>	
										</div>
									</div>
									
									<div class="_dashboard_content_body py-3 px-3">
										<form action="print.php" id="report" class="row" method="post">
											
											<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
												<div class="row">
                                                    <div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">Report to Generate</label>
															<select class="form-control rounded" name="selReport" style="height: 52px;">
                                                                <option value="">-- Select Report to be Generated --</option>
																<option value="app">List of Applied Jobs</option>
																<option value="aprv">List of Approved Jobs</option>
																<option value="rej">List of Rejected Jobs</option>
                                                                <option value="com">List of Completed Jobs</option>
															</select>
														</div>
													</div>
													<div class="col-xl-6 col-lg-6">
														<div class="form-group">
															<label class="text-dark ft-medium">&nbsp;</label>
															<input type="submit" class="btn-success form-control rounded" name="gen_rep" style="width:150px;" value="Generate Report">
														</div>
													</div>
												</div>
											</div>
											
										</form>
									</div>

                                    <!-- <div class="mb-4 tbl-lg rounded overflow-hidden">
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

                                        <center>
                                        <a href="report.php?q=Green">
                                        <input type="button" class="btn-success form-control rounded" style="width:100px; font-size:12px; padding: auto 2px; height:40px; margin-bottom:20px;" value="Print Preview">
                                        </a>
                                    </center>
                                    </div> -->
								</div>
							</div>
						</div>						
					</div>
					<?php
include_once('include/footer.php');
?>			