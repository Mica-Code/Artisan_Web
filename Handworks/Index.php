<?php

if(isset($_POST['submit'])){
    // echo "<script>alert('".$_POST['handwork']."')</script>";
    if((isset($_POST['handwork']) && $_POST['handwork'] != '') && (isset($_POST['location']) && $_POST['location'] != '')){
        header('location: ../Handworks/index.php?for='.$_POST['handwork'].'&in='.$_POST['location'].'');
    }else{
        echo "<script>alert('Both fields are required')</script>";
    }
}

?>

<?php

$loc = $_GET['in'];
$hand = $_GET['for'];

// echo "<script>alert('".$loc."". $hand."')</script>";
?>
<!DOCTYPE html>
<html>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Find Artisan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

     
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="../css1/bootstrap-grid.css" />
    <link rel="stylesheet" href="../css1/icons.css">
    <link rel="stylesheet" href="../css1/animate.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css1/style.css" />
    <link rel="stylesheet" type="text/css" href="../css1/responsive.css" />
    <link rel="stylesheet" type="text/css" href="../css1/chosen.css" />
    <link rel="stylesheet" type="text/css" href="../css1/colors/colors.css" />
    <link rel="stylesheet" type="text/css" href="../css1/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../css1/bootstrapmaxcdn.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <!-- <link rel="icon" type="image/x-icon" href="../Uploads/General/myhandworkng.ico" /> -->
    <link rel="icon" href="../Uploads/General/favicon.png" type="image/x-icon">
</head>




<body class="newbg">
    <div class="theme-layout" id="scrollup">

        <div class="responsive-header three">
            <div class="responsive-menubar">
                <div class="res-logo"><a title="" href="../Home/index.php"><img src="../Uploads/General/artificer-logo.png" alt="" width="141px;" height="32.7x;""/></a></div>
                <div class="menu-resaction">
                    <div class="res-openmenu">
                        <img src="../images1/icon.png" alt="" /> Menu <i class="la la-bars"></i>
                    </div>
                    <div class="res-closemenu">
                        <img src="../images1/icon2.png" alt="" /> Close <i class="la la-close"></i>
                    </div>
                </div>
            </div>
            <div class="responsive-opensec ">
                <div class="btn-extars">
                        <a class="post-job-btn" href="../Account/index.php"><i class="la la-registered"></i>Register now</a>
                        <ul class="account-btns">
                            <li><a href="../Account/login.php"><i class="la la-sign-in"></i> Login</a></li>
                        </ul>
                </div>
                <div class="responsivemenu">
                    <ul>
                        <!-- <li>
                                <a class="post-job-btn open-contact" style="background-color:#d42525; border-color:white; color:white">Post a task</a>
                        </li> -->
                        <!-- <li>
                            <a href="../Handworks.htm">Hire handyman</a>
                        </li> -->
                        <!-- <li>
                            <a href="../Handworks/handyJobs.htm">Browse tasks</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>

        <header class="stick-top forsticky new-header">
            <div class="menu-sec">
                <div class="container">
                    <div class="logo">
                        <a href="../Home/index.php"><img src="../Uploads/General/artificer-logo.png" alt="" width="141px;" height="32.7x;"/></a>
                    </div><!-- Logo -->
                    <div class="btn-extars">
                            <a class="post-job-btn" href="../Account/index.php"><i class="la la-registered"></i>Register now</a>
                            <ul class="account-btns">
                                <li><a href="../Account/login.php"><i class="la la-sign-in"></i> Login</a></li>
                            </ul>
                    </div><!-- Btn Extras -->
                    <nav>
                        <ul>
                            <!-- <li>
                                    <a class="post-job-btn open-contact" style="background-color:#d42525; border-color:white; color:white">Post a task</a>

                            </li>
                            <li>
                                <a href="../Handworks.htm">Hire handyman</a>
                            </li>
                            <li>
                                <a href="../Handworks/handyJobs.htm"> Browse tasks</a>
                            </li>
                            <li>
                                <a href="../Affiliates.htm">Affiliate</a>
                            </li> -->
                        </ul>
                    </nav><!-- Menus -->
                </div>
            </div>
        </header>

<section class="overlape">
    <div class="block no-padding">
        <div data-velocity="-.1" style="background: url('/Uploads/Slider/myhandwork_repair.jpg') repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header wform">
                        <div class="job-search-sec">
                            <div class="job-search">
                                <h4>Hire handyman or artisan anywhere in Nigeria...</h4>
<form class="job_filters" method="post">                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="job-field">
                                                <b style="font-weight:600;">
                                                <?php

$handworks = array('AC-Installation/Repair', 'Aluminium-Windows', 'Appliance-Maintenance', 'Architectural-Design',
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
<select class="chosen" id="handwork" name="handwork">
<?php

foreach($handworks as $handwork){
    if($handwork == $hand){
        echo "<option value=".$handwork." selected='selected'>".$handwork."</option>";
    }
    else{
        echo "<option value=".$handwork.">".$handwork."</option>";
    }

}

?>
</select>
                                                </b>
                                                <i class="la la-hand-grab-o"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="job-field">

                                                <b style="font-weight:600;">
                                                <?php

$locations = array('Agege', 'Ajeromi-Ifelodun', 'Alimosho', 'Amuwo-Odofin', 'Apapa', 'Badagry', 'Epe', 'Eti-Osa', 'Ibeju/Lekki', 'Ifako-Ijaye', 'Ikeja', 'Ikorodu', 'Kosofe',
'Lagos-Island', 'Lagos-Mainland', 'Mushin', 'Ojo', 'Oshodi-Isolo', 'Shomolu', 'Surulere');

?>
                                                <select class="chosen" id="location" name="location">
                                                <?php

foreach($locations as $location){
    if($location == $loc){
        echo "<option value=".$location." selected='selected'>".$location."</option>";
    }
    else{
        echo "<option value=".$location.">".$location."</option>";
    }
    
}

?>
</select>
                                                </b>
                                                <i class="la la-map-marker"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-1">
                                            <button type="submit" name="submit"><i class="la la-search"></i></button>
                                        </div>
                                    </div>
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8IxpwAgpJgZKhredemyMRdDAnloZKODt90yshsgXFElXQIDcYpmvLUKZneZQnAI4qifRI7_RtkM8LUGUqSZQR6AX1q6sRTAf9hbs8r7qbMiYU78omTORdc24ateTlZ9MJ8Lf_KEoKMMAyld49eH9hZA" /></form>                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>

    <div class="block less-top">
        <div class="container">
            <div class="row no-gape">


                <!-- <aside class="col-lg-3 column margin_widget">




                    <div class="widget d-none d-sm-block">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1406041599897915"
                                crossorigin="anonymous"></script> -->
                        <!-- side ads -->
                        <!-- <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-1406041599897915"
                             data-ad-slot="1377908115"
                             data-ad-format="auto"
                             data-full-width-responsive="true"></ins>

                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div> -->

                    <!-- <div class="widget d-none d-sm-block">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1406041599897915"
                                crossorigin="anonymous"></script> -->
                        <!-- side ads -->
                        <!-- <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-1406041599897915"
                             data-ad-slot="1377908115"
                             data-ad-format="auto"
                             data-full-width-responsive="true"></ins>

                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div> -->

                    <!-- <div class="widget d-none d-sm-block">
                        <a href="../Account/Login.htm">
                            <img src="https://d19620mnk6hjug.cloudfront.net/newads.gif" class="animated" width="270" height="600" />
                        </a>

                    </div> -->


                <!-- </aside> -->



                <div class="col-lg-9 column">
                    <div class="padding-left">


                            <!-- <div class="alert alert-danger alert-dismissible fade show" role="alert" style="color:black;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                                <strong>Save more by Posting a task.</strong> Sign up and Get free <strong>₦500</strong> Naira wallet top up. &nbsp; <a class="btn btn-sm btn-dark" href="../Account/Login.htm">Post a task</a>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div> -->
                                <div class="emply-list-sec style2">

                                <?php

                                include('../includes/mydatabase2.php');
                                
                                $query = "SELECT * from art_reg_tbl WHERE location='$loc' AND handwork='$hand'";
                                $res = mysqli_query($dbc, $query);

                                $num_r = mysqli_num_rows($res);

                                if($num_r > 0){

                                while($row = mysqli_fetch_array($res)){
                                    $art_id = $row['userID'];
                                    $fullnameD = $row['fullname'];
                                    $handworkD = $row['handwork'];
                                    $locationD = $row['location'];
                                    $descD = $row['skill_desc'];     
                                    $art_token = $row['userToken'];                         
                                ?>


                                    <div class="emply-list">
                                        <div class="emply-list-thumb">
                                            <a href="" title=""><img src="https://d19620mnk6hjug.cloudfront.net/Oluebube collins.jpg" width="120" height="100" alt="" /></a>
                                            <br /><br /><br /><br /><br />
                                        </div>

                                        <div class="emply-list-info">
                                            <div class="emply-pstn btn btn-success" style="border-radius: 15px;background-color:#28B661; border-color:white">
                                            <!-- <a href="Detail/Oluebubecollins.htm"> -->
                                            <a href="../dashboard/candidate-detail.php?rand=<?php echo $art_id?>&token=<?php echo $art_token?>">
                                                <i class="las la-phone-volume"></i> Hire me</a></div>

                                            <h3>
                                                <a href=""><b><?php echo $fullnameD?></b></a>
                                                <!-- <a href="Detail/Oluebubecollins.htm"><b>Oluebube Collins</b></a> -->
                                            </h3>

                                            <span style="font-size:small; color:#28B661"><b><?php echo $handworkD?></b></span>

                                            <h6><i class="la la-map-marker"></i><?php echo $locationD?>, Lagos</h6>

                                            <p style="color:#545454"><?php echo $descD?></p>                                        </div>
                                        </div>

                                    </div>

                                    <?php
                                }}
                                else{
                                    echo "<center><h5><strong>No Record found for ".$hand." (Artisan) in ".$loc.", Lagos</strong></h5></center>";
                                }
                                    ?>



                                        <div class="pagination">
                                            <ul>
                                                        <!-- <li>   <a class="prev btn-success" href="Index_3.htm"><b>1</b></a></li>
                                                        <li> <a class="prev btn-success" href="Index_2.htm"><b>Previous</b></a> </li> -->
                                                        <a class="prev btn-success" href=""><b>1</b></a></li>
                                                        <a class="prev btn-success" href=""><b>Next</b></a>
                                            </ul>
                                        </div>
                                </div>
                </div>
            </div>
        </div>
    </div>
</section>



        </section>

    <script src="../js1/jquery.min.js" type="text/javascript"></script>
    <script src="../js1/modernizr.js" type="text/javascript"></script>
    <script src="../js1/script.js" type="text/javascript"></script>
    <script src="../js1/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js1/wow.min.js" type="text/javascript"></script>
    <script src="../js1/slick.min.js" type="text/javascript"></script>
    <script src="../js1/parallax.js" type="text/javascript"></script>
    <script src="../js1/select-chosen.js" type="text/javascript"></script>
    <script src="../js1/jquery.scrollbar.min.js" type="text/javascript"></script>
    <script src="../js1/counter.js" type="text/javascript"></script>
</body>
</html>
