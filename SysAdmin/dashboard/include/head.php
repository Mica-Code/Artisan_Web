<?php
require ('session.php');


//Getting all data from the Registration Table
$A_query = "SELECT * from admin_user WHERE admin_id = $session_id ";
$A_result = mysqli_query($dbc, $A_query);
$A_row = mysqli_fetch_array($A_result);

$fname = $A_row['admin_username'];



//Getting all data from the Registration Table
$reg_user_query = "SELECT * from art_reg_tbl";

$reg_user_result = mysqli_query($dbc, $reg_user_query);
$num_reg_user = mysqli_num_rows($reg_user_result);


//Getting all Client data from the Registration Table
$reg_client_query = "SELECT * from art_reg_tbl WHERE status = 'client'";

$reg_client_result = mysqli_query($dbc, $reg_client_query);
$num_reg_client = mysqli_num_rows($reg_client_result);


//Getting all Artisan data from the Registration Table
$reg_artisan_query = "SELECT * from art_reg_tbl WHERE status = 'artisan'";

$reg_artisan_result = mysqli_query($dbc, $reg_artisan_query);
$num_reg_artisan = mysqli_num_rows($reg_artisan_result);




// //Getting Number of Applied Jobs
// $qry = "SELECT * from appjob WHERE appArtisanID = $session_id";
												
// $rest = mysqli_query($dbc, $qry);
// $n_row = mysqli_num_rows($rest);

// //Getting number of Job alerts
// $qry2 = "SELECT * from postjob WHERE (postJobProfession = '$handwork' AND postJobStatus = 'Pending')";
													
// $rest2 = mysqli_query($dbc, $qry2);
// $n_row2 = mysqli_num_rows($rest2);


#28B661
//Getting all data from the Post Job Table
// $query = "SELECT * from postjob WHERE postJobLocation = $location ";

// $result = mysqli_query($dbc, $query);
// $row = mysqli_fetch_array($result);

// if ($row == 0){
// 	$justsave = "Do Nothing";
// }
// else{
// 	$postJobTitle = $row['postJobTitle'];
// 	$postJobDesc = $row['postJobDesc'];
// 	$postJobProfession = $row['postJobProfession'];
// 	$postJobLevel = $row['postJobLevel'];
// 	$postJobType = $row['postJobType'];
// 	$postJobGender = $row['postJobGender'];
// 	$postJobDeadline = $row['postJobDeadline'];
// 	$postJobLocation = $row['postJobLocation'];
// 	$postJobAddress = $row['postJobAddress'];
// 	$postJobDate = $row['postJobDate'];
// 	$postJobStatus = $row['postJobStatus'];
// 	$postJobToken = $row['postJobToken'];	
// }



?>

<!DOCTYPE html>
<html lang="eng">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>artisan_hub - <?php echo $title; ?></title>
		 
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		<link rel="icon" href="../Uploads/General/favicon.png" type="image/x-icon">
		
    </head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	
    <body>
	
		 <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
       <div class="preloader"></div>
		
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
		
            <!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <!-- Start Navigation -->
			<div class="header header-light dark-text head-shadow">
				<div class="container">
					<nav id="navigation" class="navigation navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand" href="index.php">
								<img src="assets/img/logo.png" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
								<li>
									<a href="logout.php" class="crs_yuo12 w-auto text-dark gray">
										<span class="embos_45"><i class="lni lni-power-switch mr-1 mr-1"></i>Logout</span>
									</a>
								</li>
								</ul>
							</div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<!-- <ul class="nav-menu">
							
								<li><a href="#">Home</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="index.html">Home 1</a></li>
										<li><a href="home-2.html">Home 2</a></li>
										<li><a href="home-3.html">Home 3</a></li>
										<li><a href="home-4.html">Home 4</a></li>
										<li><a href="home-5.html">Home 5</a></li>
										<li><a href="home-6.html">Home 6</a></li>
										<li><a href="home-7.html">Home 7</a></li>
										<li><a href="home-8.html">Home 8</a></li>
									</ul>
								</li>
								
								<li><a href="javascript:void(0);">Find Job</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="job-search-v1.html">Job Search V1</a></li>
										<li><a href="job-search-v2.html">Job Search V2</a></li>
										<li><a href="job-search-v3.html">Job Search V3</a></li>
										<li><a href="job-list-v1.html">Job Search V4</a></li>
										<li><a href="job-list-v2.html">Job Search V5</a></li>
										<li><a href="job-list-v3.html">Job Search V6</a></li>
										<li><a href="javascript:void(0);">Map Styles</a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="job-half-map.html">Search On Map V1</a></li>
												<li><a href="job-half-map-v2.html">Search On Map V2</a></li>
												<li><a href="job-search-map-v1.html">Search On Map V3</a></li>
												<li><a href="job-search-map-v2.html">Search On Map V4</a></li>
											</ul>
										</li>
										<li><a href="javascript:void(0);">Single Job</a>
											<ul class="nav-dropdown nav-submenu">
												<li><a href="single-job-1.html">Single Job V1</a></li>
												<li><a href="single-job-2.html">Single Job V2</a></li>
												<li><a href="single-job-3.html">Single Job V3</a></li>
												<li><a href="single-job-4.html">Single Job V4</a></li>
											</ul>
										</li>
									</ul>
								</li>
								
								<li><a href="javascript:void(0);">Candidates</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="browse-jobs.html">Browse Jobs</a></li>
										<li><a href="browse-resumes.html">Browse Resumes</a></li>
										<li><a href="browse-category.html">Browse Categories</a></li>
										<li><a href="candidate-detail.html">Candidate Detail</a></li>
										<li><a href="candidate-dashboard.html">Candidate Dashboard</a></li>
									</ul>
								</li>
								
								<li><a href="javascript:void(0);">Employers</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="browse-employers.html">Browse Employers V1</a></li>
										<li><a href="browse-employers-list.html">Browse Employers V2</a></li>
										<li><a href="employer-detail.html">Employer Detail</a></li>
										<li><a href="employer-dashboard.html">Employer Dashboard</a></li>
									</ul>
								</li>
								
								<li><a href="javascript:void(0);">Pages</a>
									<ul class="nav-dropdown nav-submenu">
										<li><a href="blog.html">Blog Style</a></li>
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="contact.html">Contact</a></li>
										<li><a href="404.html">404 Page</a></li>
										<li><a href="privacy.html">Privacy Policy</a></li>
										<li><a href="faq.html">FAQs</a></li>
										<li><a href="docs.html">Docs</a></li>
									</ul>
								</li>
								 
							</ul> -->
							
							<ul class="nav-menu nav-menu-social align-to-right">
								<li class="add-listing gray">
									<a href="logout.php" >
										<i class="lni lni-power-switch mr-1"></i> Logout
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<!-- End Navigation -->
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
			
			<!-- ======================= dashboard Detail ======================== -->
			
			<div class="dashboard-wrap bg-light">
			<a class="mobNavigation" data-toggle="collapse" href="#MobNav" role="button" aria-expanded="false" aria-controls="MobNav">
				<i class="fas fa-bars mr-2"></i>Dashboard Navigation
			</a>
				 <div class="collapse" id="MobNav">
					<div class="dashboard-nav">
						<div class="dashboard-inner">
							<?php echo $nav; ?>
						</div>					
					</div>
				</div>