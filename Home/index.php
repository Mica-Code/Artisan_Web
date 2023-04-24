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
                <div class="res-logo"><a title="" href="./index.php"><img src="../Uploads/General/artificer-logo.png" alt="" width="141px;" height="32.7x;""/></a></div>
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
                        <a href="./index.php"><img src="../Uploads/General/artificer-logo.png" alt="" width="141px;" height="32.7x;"/></a>
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





        <!-- Main Page-Body Content -->
        <section>


            




<section>    
    <div class="block no-padding">
        <div class="container fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-featured-sec">
                        <div class="new-slide-3">
                            <img src="../Uploads/General/myhandworkng_home.png" alt="" />
                        </div>
                        <div class="job-search-sec">
                            <div class="job-search">
                                <br /><br />
                                <h4 style="text-align:left;color:#006600">Need to get a fix ?</h4>
                                <span style="color:darkslategray">you are just one calls away from your solution</span>

<form class="job-search" method="post">                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
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
<select class="chosen" id="handwork" name="handwork"><option value="">What service are you looking for?</option>
<?php

foreach($handworks as $handwork){
    echo "<option value=".$handwork.">".$handwork."</option>";
}

?>
</select></b>

                                                <i class="la la-hand-grab-o"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                            <div class="job-field">
                                                <b style="font-weight:600;"> 

                                                <?php

$locations = array('Agege', 'Ajeromi-Ifelodun', 'Alimosho', 'Amuwo-Odofin', 'Apapa', 'Badagry', 'Epe', 'Eti-Osa', 'Ibeju/Lekki', 'Ifako-Ijaye', 'Ikeja', 'Ikorodu', 'Kosofe',
'Lagos-Island', 'Lagos-Mainland', 'Mushin', 'Ojo', 'Oshodi-Isolo', 'Shomolu', 'Surulere');

?>
                                                <select class="chosen" id="location" name="location"><option value="">Select Location L.G.A (Lagos)</option>
                                                <?php

foreach($locations as $location){
    echo "<option value=".$location.">".$location."</option>";
}

?>
</select></b>
                                                <i class="la la-map-marker"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                                            <button type="submit" name="submit" href=""><i class="la la-search"></i></button>
                                        </div>
                                    </div>
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8IxpwAgpJgZKhredemyMRdAbcrwuiHlcyOOXslYaObMH8yihnZ0VAQKt1Yfvu-bXsmbJ2fLj9iH8Hd6tZLwu5M1Gj19z4SKHvbJXJP9o-iojPRYKorgMc4U7RhVyyj1q9zyMUzONz-Po18GjZzgPXG4" /></form>

                            <!-- <div class="or-browser">

                                <span style="color:#006600;"><a href="https://myhandwork.ng/Handworks/handyjobs">Browse tasks</a></span>
                                <a href="https://wa.me/message/S232FZLTJ6PBD1" target="_blank" title="" style="color:#006600;"><i class="la la-whatsapp"></i>Need help? </a>
                            </div> -->
                            </div>
                            
                        </div>
                        <!-- <div class="scroll-to">
                            <a href="Home.html#scroll-here" title=""><i class="la la-arrow-down"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<dialog>
    
</dialog>


<script>
    $(document).ready(function () {
        /* Get iframe src attribute value i.e. YouTube video url
        and store it in a variable */
        var url = $("#cartoonVideo").attr('src');

        /* Assign empty url value to the iframe src attribute when
        modal hide, which stop the video playing */
        $("#myModal").on('hide.bs.modal', function () {
            $("#cartoonVideo").attr('src', '');
        });

        /* Assign the initially stored url back to the iframe src
        attribute when modal is displayed again */
        $("#myModal").on('show.bs.modal', function () {
            $("#cartoonVideo").attr('src', url);
        });
    });
</script>

<script>
    $(document).ready(function () {
        /* Get iframe src attribute value i.e. YouTube video url
        and store it in a variable */
        var url = $("#cartoonVideo3").attr('src');

        /* Assign empty url value to the iframe src attribute when
        modal hide, which stop the video playing */
        $("#myModal3").on('hide.bs.modal', function () {
            $("#cartoonVideo3").attr('src', '');
        });

        /* Assign the initially stored url back to the iframe src
        attribute when modal is displayed again */
        $("#myModal3").on('show.bs.modal', function () {
            $("#cartoonVideo3").attr('src', url);
        });
    });
</script>

<script>
    $(document).ready(function () {
        /* Get iframe src attribute value i.e. YouTube video url
        and store it in a variable */
        var url = $("#cartoonVideo2").attr('src');

        /* Assign empty url value to the iframe src attribute when
        modal hide, which stop the video playing */
        $("#myModal2").on('hide.bs.modal', function () {
            $("#cartoonVideo2").attr('src', '');
        });

        /* Assign the initially stored url back to the iframe src
        attribute when modal is displayed again */
        $("#myModal2").on('show.bs.modal', function () {
            $("#cartoonVideo2").attr('src', url);
        });
    });
</script>


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
