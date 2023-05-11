<?php


$title = "System Administrator Dashboard";
$nav='<ul>
<li class="active"><a href="index.php"><i class="lni lni-dashboard mr-2"></i>Dashboard</a></li>
</ul>

<ul data-submenu-title="Registered Users">
<li><a href="all_users.php"><i class="lni lni-user mr-2"></i>Manage Users </a></li>

</ul>

<ul data-submenu-title="Posted Jobs">
<li><a href="dashboard-post-job.php"><i class="lni lni-files mr-2"></i>Manage Job</a></li>
<!-- <li><a href="dashboard-shortlisted-resume.php"><i class="lni lni-bookmark mr-2"></i>BookmarkResumes<span class="count-tag bg-warning">4</span></a></li> -->
<!-- <li><a href="dashboard-packages.html"><i class="lni lni-mastercard mr-2"></i>Packages</a></li>
<li><a href="dashboard-messages.html"><i class="lni lni-envelope mr-2"></i>Messages<span class="count-tag">4</span></a></li> -->
</ul>

<ul data-submenu-title="My Accounts">
<li><a href="profile.php"><i class="lni lni-user mr-2"></i>Edit Profile </a></li>
<li><a href="change-password.php"><i class="lni lni-lock-alt mr-2"></i>Change Password</a></li>
<li><a onclick= "return confirm(\'You are about to Delete your account. \nData(s) related to you will be cleared from the system. \nThis action is irreversible.\')" href="delete-acct.php"><i class="lni lni-trash-can mr-2"></i>Delete Account</a></li>
<li><a href="logout.php"><i class="lni lni-power-switch mr-2"></i>Log Out</a></li>
</ul>';

include_once('./include/head.php');



$query = "SELECT * from postjob WHERE userID = $session_id ";

$result = mysqli_query($dbc, $query);

$postJobCount = 0;

while(mysqli_fetch_array($result)){
	$postJobCount += 1;
}
?>	
				
				<div class="dashboard-content">
					<div class="dashboard-tlbar d-block mb-5">
						<div class="row">
							<div class="colxl-12 col-lg-12 col-md-12">
								<h1 class="ft-medium">Hello, <?php echo $fname;?></h1>
								<nav aria-label="breadcrumb">
									<ol class="breadcrumb">
										<li class="breadcrumb-item text-muted"><a href="#">Home</a></li>
										<li class="breadcrumb-item"><a href="#" class="theme-cl">Dashboard</a></li>
									</ol>
								</nav>
							</div>
						</div>
					</div>
					
					<div class="dashboard-widg-bar d-block">
						<div class="row">
							
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <a href="all_users.php">
                                    <div class="dash-widgets py-5 px-4 bg-success rounded">
                                        <h2 class="ft-medium mb-1 fs-xl text-light"><?php echo $num_reg_user;?></h2>
                                        <p class="p-0 m-0 text-light fs-md">Resgistered Users</p>
                                        <i class="lni lni-empty-file"></i>
                                    </div>
                                </a>
                            </div>
                            
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <a href="all_artisans.php">
                                    <div class="dash-widgets py-5 px-4 bg-purple rounded">
                                        <h2 class="ft-medium mb-1 fs-xl text-light"><?php echo $num_reg_artisan;?></h2>
                                        <p class="p-0 m-0 text-light fs-md">Registered Artisans</p>
                                        <i class="lni lni-users"></i>
                                    </div>
                                </a>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                <a href="all_clients.php">
                                    <div class="dash-widgets py-5 px-4 bg-danger rounded">
                                        <h2 class="ft-medium mb-1 fs-xl text-light"><?php echo $num_reg_client;?></h2>
                                        <p class="p-0 m-0 text-light fs-md">Registered Clients</p>
                                        <i class="lni lni-bar-chart"></i>
                                    </div>
                                </a>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
								<div class="dash-widgets py-5 px-4 bg-blue rounded">
									<h2 class="ft-medium mb-1 fs-xl text-light"><?php echo $num_reg_client;?></h2>
									<p class="p-0 m-0 text-light fs-md">Verified Artisans</p>
									<i class="lni lni-heart"></i>
								</div>
							</div>
						</div>

						
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="dashboard-gravity-list with-icons">
									<h4 class="mb-0 ft-medium">Recent Activities</h4>
									<ul>
										<li>
											<i class="dash-icon-box ti-layers text-purple bg-light-purple"></i> Your job for <strong class="ft-medium text-dark"><a href="#">IOS Developer</a></strong> has been approved!
											<a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
										</li>

										<li>
											<i class="dash-icon-box ti-star text-success bg-light-success"></i> Jodie Farrell left a review <div class="numerical-rating high" data-rating="5.0"></div> for<strong class="ft-medium text-dark"><a href="#"> Real Estate Logo</a></strong>
											<a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
										</li>

										<li>
											<i class="dash-icon-box ti-heart text-warning bg-light-warning"></i> Someone bookmarked your <strong class="ft-medium text-dark"><a href="#">SEO Expert Job</a></strong> listing!
											<a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
										</li>

										<li>
											<i class="dash-icon-box ti-star text-info bg-light-info"></i> Gracie Mahmood left a review <div class="numerical-rating mid" data-rating="3.8"></div> on <strong class="ft-medium text-dark"><a href="#">Product Design</a></strong>
											<a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
										</li>

										<li>
											<i class="dash-icon-box ti-heart text-danger bg-light-danger"></i> Your Magento Developer job expire<strong class="ft-medium text-dark"><a href="#">Renew</a></strong> now it!
											<a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
										</li>

										<li>
											<i class="dash-icon-box ti-star text-success bg-light-success"></i> Ethan Barrett left a review <div class="numerical-rating high" data-rating="4.7"></div> on <strong class="ft-medium text-dark"><a href="#">New Logo</a></strong>
											<a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
										</li>

										<li>
											<i class="dash-icon-box ti-star text-purple bg-light-purple"></i> Your Magento Developer job expire <strong class="ft-medium text-dark"><a href="#">Renew</a></strong> now it.
											<a href="#" class="close-list-item"><i class="fas fa-times"></i></a>
										</li>
									</ul>
								</div>
							</div>
							
							<div class="col-lg-6 col-md-12">
								<div class="dashboard-gravity-list invoices with-icons">
									<h4 class="mb-0 ft-medium">Invoices</h4>
									<ul>
										
										<li><i class="dash-icon-box ti-files text-warning bg-light-warning"></i>
											<strong class="ft-medium text-dark">Starter Plan</strong>
											<ul>
												<li class="unpaid">Unpaid</li>
												<li>Order: #20551</li>
												<li>Date: 01/08/2019</li>
											</ul>
											<div class="buttons-to-right">
												<a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
											</div>
										</li>
										
										<li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
											<strong class="ft-medium text-dark">Basic Plan</strong>
											<ul>
												<li class="paid">Paid</li>
												<li>Order: #20550</li>
												<li>Date: 01/07/2019</li>
											</ul>
											<div class="buttons-to-right">
												<a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
											</div>
										</li>

										<li><i class="dash-icon-box ti-files text-danger bg-light-danger"></i>
											<strong class="ft-medium text-dark">Extended Plan</strong>
											<ul>
												<li class="paid">Paid</li>
												<li>Order: #20549</li>
												<li>Date: 01/06/2019</li>
											</ul>
											<div class="buttons-to-right">
												<a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
											</div>
										</li>
										
										<li><i class="dash-icon-box ti-files text-success bg-light-success"></i>
											<strong class="ft-medium text-dark">Platinum Plan</strong>
											<ul>
												<li class="paid">Paid</li>
												<li>Order: #20548</li>
												<li>Date: 01/05/2019</li>
											</ul>
											<div class="buttons-to-right">
												<a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
											</div>
										</li>
										
										<li><i class="dash-icon-box ti-files text-warning bg-light-warning"></i>
											<strong class="ft-medium text-dark">Extended Plan</strong>
											<ul>
												<li class="paid">Paid</li>
												<li>Order: #20547</li>
												<li>Date: 01/04/2019</li>
											</ul>
											<div class="buttons-to-right">
												<a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
											</div>
										</li>
										
										<li><i class="dash-icon-box ti-files text-info bg-light-info"></i>
											<strong class="ft-medium text-dark">Platinum Plan</strong>
											<ul>
												<li class="paid">Paid</li>
												<li>Order: #20546</li>
												<li>Date: 01/03/2019</li>
											</ul>
											<div class="buttons-to-right">
												<a href="javascript:void(0);" class="button text-light bg-warning">View Invoice</a>
											</div>
										</li>

									</ul>
								</div>
							</div>	
						</div>	
							
					</div>
					
					<!-- footer -->
					<div class="row">
						<div class="col-md-12">
							<div class="py-3">© <?php echo date("Y");?> ArtificerHub.</div>
						</div>
					</div>
		
				</div>
				
			</div>
			<!-- ======================= dashboard Detail End ======================== -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
			

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