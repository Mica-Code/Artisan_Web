
<?php
require('helper.php');
require('../includes/mydatabase2.php');
$error = array();
session_start();

if(isset($_SESSION['userID'])){
    header("location: ../dashboard");
    exit();
}
// When form submitted, check and create user session.
elseif (isset($_POST['login'])) {
    require('login-process.php');
}
else {
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Artisan_hub | login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="../css1/bootstrap-grid.css" />
    <link rel="stylesheet" href="../css1/icons.css">
    <link rel="stylesheet" href="../css1/animate.min.css">
    <link rel="stylesheet" type="text/css" href="../css1/style.css" />
    <link rel="stylesheet" type="text/css" href="../css1/responsive.css" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css1/chosen.css" />
    <link rel="stylesheet" type="text/css" href="../css1/colors/colors.css" />
    <link rel="stylesheet" type="text/css" href="../css1/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../css1/bootstrapmaxcdn.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <link rel="icon" href="../Uploads/General/myhandworkng.png" type="image/x-icon" />




</head>
<body class="newbg">

    <div class="theme-layout" id="scrollup">

        <div class="responsive-header three">
            <div class="responsive-menubar">
                <div class="res-logo"><a title="" href="../index.php"><img src="../Uploads/General/myhandworkng-logo.png" alt="" /></a></div>
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
                        <a class="post-job-btn" href="index.php"><i class="la la-registered"></i>Register now</a>
                        <ul class="account-btns">
                            <li><a href="login.php"><i class="la la-sign-in"></i> Login</a></li>
                        </ul>

                </div>

                <div class="responsivemenu">
                    <!-- <ul>
                        <li>
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
                </div>
            </div>
        </div>

        <header class="stick-top forsticky new-header">
            <div class="menu-sec">
                <div class="container">
                    <div class="logo">
                        <a href="../myhandwork_default.html"><img src="../Uploads/General/myhandworkng-logo.png" alt="" /></a>
                    </div><!-- Logo -->
                    <div class="btn-extars">
                            <a class="post-job-btn" href="index.php"><i class="la la-registered"></i>Register now</a>
                            <ul class="account-btns">
                                <li><a href="login.php"><i class="la la-sign-in"></i> Login</a></li>
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

            <section><br /><br /></section>
            


<script type="text/javascript">

    function AlertName() {

        //alert('You clicked ' + name + "!");
        $("#divTest").show();
        $("#divTest2").hide();
    }

</script>



<section>
    <div class="block remove-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="account-popup-area signup-popup-box static">
                        <div class="account-popup">
                            <h3>Login</h3>

                                <a href="index.php">
                                    <div class="select-user">
                                        <span><b>Register now</b></span>
                                    </div>
                                </a>



<form action="" method="post">           
<?php
    if(isset($_GET['chk'])){
        echo "<h3 style='color:green'>Registration Successful</h3>";
        echo "<small>(Login to Access Your Account)</small></br>";
    }
if(!empty($error)){ ?>
    <div class='alert alert-danger' style="text-align:left;">
    <ul>
            <?php foreach($error as $err){?>
                <li style="">&bull; <?php echo $err; ?></li>
            <?php }?>
        </ul>
    </div>
    <?php }?>
    
<div class="cfield">

                                    <input class="form-control text-box single-line" data-val="true" data-val-required="Email is required" id="email" name="email" placeholder="Enter Email" type="text" value="" />
                                    <i class="la la-envelope-o"></i>

                                </div>
                                <div class="cfield">
                                    <input class="form-control text-box single-line password" data-val="true" data-val-length="Password Incorrect" data-val-length-max="16" data-val-length-min="6" data-val-required="Password is required" id="password" maxlength="16" name="password" placeholder="********" type="password" />
                                    <i class="la la-key"></i>

                                </div>
                                <p class="remember-label">
                                    <input type="checkbox" name="remember_me" id="cb1"><label for="cb1">Remember me</label>
                                </p>
                                <a href="forgotPassword.htm"><b>Forgot Password?</b></a>
                                <div id="divTest2" class="col-lg-12">
                                    <button id="login" name="login" class="btn btn-success" type="submit">Login</button>
                                </div>
                                <div id="divTest" style="display: none;" class="col-lg-12">
                                    <button type="button" class="btn btn-success"><i class="fa fa-spinner fa-spin"></i> Loading, Please wait</button>
                                </div>
                                <br />
                                <br /><br /><br />
                                <div>

                                    <ul>
                                        <li> <br /><br /> <span class="field-validation-valid text-danger" data-valmsg-for="Email" data-valmsg-replace="true"></span></li>
                                        <li> <br /><br /> <span class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></span></li>
                                        <li><b><br /><br />  </b></li>
                                        <li><b><br /><br /> </b></li>

                                    </ul>
                                </div>
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8IxpwAgpJgZKhredemyMRdA35lVsNUWOIkfOavtQwmJdrGucRLZjpw5d0yfoFXFs_iDQBKmI6dOO0u_YoC4vV9b9bb-zwmgJJkaouh-2w5WiirIV6fgsRXs2Cz4McZn2RvQaYSO-49rv6XWQuYad56o" /></form>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


        </section>
        <?php } ?>


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
