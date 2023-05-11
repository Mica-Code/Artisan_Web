<?php
// session_start();
// require('../includes/mydatabase2.php');

if (isset($_POST['save'])){
    require("clientSignUp-Process.php");
}
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
                            <h3>Client Sign-Up</h3>

<form action="" method="post">                                <div class="row">

                                    <div class="col-md-12">
                                    <?php if(!empty($error)){ ?>
                                        <div class='alert alert-danger' style="text-align:left;">
                                        <ul>
                                                <?php foreach($error as $err){?>
                                                   <li style="">&bull; <?php echo $err; ?></li>
                                                <?php }?>
                                            </ul>
                                        </div>
                                        <?php }?>


                                        <div class="cfield">
                                            <input class="form-control text-box single-line" data-val="true" data-val-required="First and Surname is required" id="fullName" name="fullName" placeholder="Enter FullName" type="text" value="<?php echo isset($_POST['fullName']) ? $_POST['fullName'] : '';?>" required/>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="cfield">
                                            <input class="form-control text-box single-line" data-val="true" data-val-required="username is required" id="username" name="username" placeholder="Username" type="text" value=""<?php echo isset($_POST['username']) ? $_POST['username'] : '';?> required/>
                                            <i class="la la-user"></i>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="cfield">
                                            <input class="form-control text-box single-line" data-val="true" data-val-regex="Wrong email address" data-val-regex-pattern="^[\w\.-]&#x2B;@[\w\.-]&#x2B;\.\w{2,4}$" data-val-required="email is required" id="email" name="email" placeholder="Email" type="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '';?>" required/>
                                            <i class="la la-envelope-o"></i>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="cfield">
                                            <input class="form-control text-box single-line password" data-val="true" data-val-required="password is required" id="password" name="password" placeholder="password" type="password" required/>
                                            <i class="la la-key"></i>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="cfield">
                                            <input class="form-control text-box single-line password" data-val="true" data-val-required="password is required" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" type="password" required/>
                                            <i class="la la-key"></i>

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="cfield">
                                            <input class="form-control text-box single-line" data-val="true" data-val-length="The Mobile number incorrect" data-val-length-max="11" data-val-length-min="10" data-val-regex="valid Phone number is required" data-val-regex-pattern="^(\&#x2B;?1?( ?.?-?\(?\d{3}\)?) ?.?-?)?(\d{3})( ?.?-? ?\d{4})$" data-val-required="phone number is required" id="phone" maxlength="11" name="phone" placeholder="08000000000" type="text" value="<?php echo isset($_POST['tel']) ? $_POST['tel'] : '';?>" required/>

                                            <i class="la la-phone"></i>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="cfield">
                                            <select class="chosen" data-val="true" data-val-required="Location is required" id="location" name="location" required>
                                                <option value="">Select Location</option>
                                                <option value="Aba">Aba</option>
                                                </select>
                                        </div>
                                    </div>



                                    <div class="specialism_widget">
                                        <div class="simple-checkbox">
                                            <p>
                                                <input data-val="true" data-val-required="The agreement field is required." id="agreement" name="agreement" type="checkbox" value="true" required/>
                                            <label for="agreement">
                                                I agree with 
                                                <a  target="_blank">
                                                    terms and condition
                                                </a>
                                            </label>
                                        </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div id="divTest">
                                            <button type="submit" class="btn btn-success" name="save" id="save" onclick="AlertName()">Signup</button>
                                        </div>

                                        <!-- <div id="divTest2" style="display: none;">
                                            <button type="button" class="btn btn-success"><i class="fa fa-spinner fa-spin"></i> Please wait</button>
                                        </div> -->
                                    </div>

                                    <div class="col-lg-12">
                                        <p style="margin-top:10px;">I Already have an Account <a href="login.php" style="color:green">Login Here</a></p>
                                        <p><a href="index.php" style="color:green">Back to Home</a></p>
                                    </div>

                                    <div>
                                    </div>

                                    <br />
                                </div>
<!-- <input name="__RequestVerificationToken" type="hidden" value="CfDJ8IxpwAgpJgZKhredemyMRdAZDcTHmrs3uwExnYw_JHSvjND9MP2M5iZ47ujeGA9GFTc04mVChFbtqsFKne1uOTDMBoS4Pge-PmeWCyRJZbO5HvyPvXl_vNK0DBgJBmKC-y89ddIUT541SgfEC9E-rfY" />
<input name="agreement" type="hidden" value="false" /> -->
</form>                        
</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>





        </section>



        
    </div>


    <div class="contactus-popup">
        <div class="contact-popup">
            <i class="la la-close close-contact"></i>
            <img src="../Uploads/General/post_task_working.svg" width="290" height="214" alt="" />

            <h4>Start getting offers in no time</h4>
            <p style="font-size:14px">We're just going to ask a few questions to help you find the right handyman - it'll only take a few minutes!</p>


            <a class="btn btn-success  signup-popup" data-toggle="modal" data-dismiss="modal">continue</a>
        </div>
    </div>


    <div class="account-popup-area signup-popup-box">
        <div class="account-popup">
            <span class="close-popup"><i class="la la-close"></i></span>
            <b>Tell us what you need done?</b>
            <form method="post" action="https://myhandwork.ng/Account/ClientTaskPost">
                
                <div class="cfield">
                    <input type="text" name="handymantask" placeholder="What is the task to be done?" required />
                    <i class="la la-user"></i>
                </div>
                <div class="cfield">
                    <textarea style="height:10px;background-color:white;" placeholder="Describe the task and Be as specific as you can about what needs to be done" id="details" name="details" required></textarea>
                    <i class="la la-tasks"></i>
                </div>
                <div class="cfield">
                    <input type="text" name="taskbudget" placeholder="What is your budget? e.g:1000" class="form-control" required />
                    <i class="la la-envelope-o"></i>
                </div>

                <div class="dropdown-field">
                    <select data-placeholder="Please Select Delivery Timeline" class="chosen" name="Timeline" id="Timeline" required>
                        <option value="Just a day">Select Delivery Timeline</option>
                        <option value="Just a day">Just a day</option>
                        <option value="Less than a week">Less than a week</option>
                        <option value="Less than a month">Less than a month</option>
                        <option value="More than one month">More than one month</option>
                    </select>
                </div>

                <div>
                    <span class="pf-title"><b>Where would this task be done?</b></span>
                </div>
                <div class="cfield">

                    <input type="text" name="taskaddress" placeholder="e.g: Block 34B,arena " class="form-control" required />
                </div>

                <button type="submit">Continue</button>
            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8IxpwAgpJgZKhredemyMRdAZDcTHmrs3uwExnYw_JHSvjND9MP2M5iZ47ujeGA9GFTc04mVChFbtqsFKne1uOTDMBoS4Pge-PmeWCyRJZbO5HvyPvXl_vNK0DBgJBmKC-y89ddIUT541SgfEC9E-rfY" /></form>

        </div>
    </div><!-- SIGNUP POPUP -->

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
