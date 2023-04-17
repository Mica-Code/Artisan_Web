
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
if (isset($_POST['login'])) {
    require('login-process.php');
}
// else {
?>

<?php
    include('include/head.php');
?>





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
                                <a href="forgotPassword.php"><b>Forgot Password?</b></a>
                                <div id="divTest2" class="col-lg-12">
                                    <button id="login" name="login" class="btn btn-success" type="submit">Login</button>
                                </div>
            </br>
            </br>
            </br>


                                <a href="../Home/index.php" style="text-decoration:none;"><p style="color:#50B652;  margin-top:50px;">Back to Home</p></a>
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
        <?php //}?>


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
