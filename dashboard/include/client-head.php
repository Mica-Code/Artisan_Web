<?php
require ('session-client.php');


//Getting all data from the Registration Table
$query = "SELECT * from art_reg_tbl WHERE userID = $session_id ";

$result = mysqli_query($dbc, $query);
$row = mysqli_fetch_array($result);

$n_row = mysqli_num_rows($result);

$fname = $row['fullname'];
$uname = $row['username'];
$email = $row['email'];
$phone = $row['phone'];
$location = $row['location'];
$age = $row['age'];
$handwork = $row['handwork'];
$address = $row['address'];
$skill_desc = $row['skill_desc'];
$dob = $row['dob'];
$about = $row['about'];
$profile_pic = $row['profile_pic'];




//Getting Number of Posted Jobs
$qry = "SELECT * from postjob WHERE userID = $session_id";
												
$rest = mysqli_query($dbc, $qry);
$n_row = mysqli_num_rows($rest);

//Getting Number of Pending Jobs
$pqry = "SELECT * from postjob WHERE userID = $session_id AND postJobStatus = 'Pending'";
												
$prest = mysqli_query($dbc, $pqry);
$pn_row = mysqli_num_rows($prest);

//Getting Number of Active Jobs
$aqry = "SELECT * from postjob WHERE userID = $session_id AND postJobStatus = 'Active'";
												
$arest = mysqli_query($dbc, $aqry);
$an_row = mysqli_num_rows($arest);

//Getting Number of Completed Jobs
$cqry = "SELECT * from postjob WHERE userID = $session_id AND postJobStatus = 'Completed'";
												
$crest = mysqli_query($dbc, $cqry);
$cn_row = mysqli_num_rows($crest);


//Getting Total Number of Applicants that has applied for jobs posted by this client
$taqry = "SELECT * from appjob WHERE appClientID=$session_id";
$taexec = mysqli_query($dbc, $taqry);
//Assigning Value to the Global Declared variable at the top of this page for All Jobs
$tan_row = mysqli_num_rows($taexec);



//Getting all data from the Post Job Table
// $query = "SELECT * from postjob WHERE userID = $session_id ";

// $result = mysqli_query($dbc, $query);
// $row = mysqli_fetch_array($result);

// if ($row == 0){
// 	$justsave = "This";
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
<html lang="zxx">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Themezhub" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Artificer-Hub | <?php echo $title;?></title>
		 
        <!-- Custom CSS -->
        <link href="assets/css/styles.css" rel="stylesheet">
		<link rel="icon" href="../Uploads/General/favicon.png" type="image/x-icon">

	
		
    </head>
	
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
							<a class="nav-brand" href="client-index.php">
								<img src="assets/img/logo.png" class="logo" alt="" />
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
									<li>
										<a href="dashboard-post-job.php" class="crs_yuo12 w-auto text-dark gray">
											<span class="embos_45"><i class="fas fa-plus-circle mr-1 mr-1"></i>Post Job</span>
										</a>
									</li>
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
										<a href="dashboard-post-job.php">
											<i class="fas fa-plus-circle mr-1 mr-1"></i>Post Job</span>
										</a>
									</li>
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
							<?php echo $nav;?>
						</div>					
					</div>
				</div>