<?php

//require('helper.php');
require('../includes/mydatabase2.php');
$error = array();

// When form submitted, check and create user session.
if (isset($_POST['forgotPass'])) {
    echo "<script>window.location='retrievePassword.php';</script>";
    //require('retrievePassword.php');
}
// else {
?>

<?php
    include('./include/head.php');
?>



        <!-- Main Page-Body Content -->
        <section>

            <section><br /><br /></section>
            





<section>
    <div class="block remove-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="account-popup-area signup-popup-box static">
                        <div class="account-popup">
                            <br />
                            <h3>forgot password</h3>

<form method="post">                                    <div class="cfield">
                                        <input type="text" name="Email" id="Email" placeholder="Enter your Email address" class="form-control" />
                                        <i class="la la-codepen"></i>

                                    </div>
                                    <a href="login.php"><b>Back to Login</b></a>
                                    <button type="submit" name="forgotPass">Submit</button>
                                    <br /> <br /> <br /> <br /> <br /> <br /> <br />
                                    <br /> <br />
<input name="__RequestVerificationToken" type="hidden" value="CfDJ8IxpwAgpJgZKhredemyMRdCapK11S-W6bSRrM_C5Llm5D2UqE1MctkLNvQpoHcZ6AJb9WV6clHr3tKnsnYRYr0k6pwHOeXIJPIElamw0w230LaIvZ4t22xouSJhr-y62fAVvAPhyH6gT2yhmV3nPJ74" /></form>

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
