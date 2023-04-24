
<?php

if (isset($_POST['submit'])){

  // echo "<script>alert('I am here')</script>";
    require("artisanSignUp-Process.php");
}
?>
<?php
    include('include/head.php');
?>

      <!-- Main Page-Body Content -->
      <section>
        <section><br /><br /></section>

        <!-- <script type="text/javascript">

    function AlertName() {

        //alert('You clicked ' + name + "!");
        $("#divTest").show();
        $("#divTest2").hide();
    }

</script> -->

        <section>
          <div class="block remove-bottom">
            <div class="container">
              
              <div class="row">
                <div class="col-lg-12">
                  <div class="account-popup-area signup-popup-box static">
                    <div class="account-popup">
                      <h3>Artisan - Sign Up</h3>

                      <!-- <form action="Signup.php" method="post"> -->

                        <form action="" method="post" enctype="multipart/form-data">
                          <div class="profile-form-edit">
                            <div class="row">
                            <div class="col-12">
                            <?php if(!empty($error)){ ?>
                                        <div class='alert alert-danger' style="text-align:left;">
                                        <ul>
                                                <?php foreach($error as $err){?>
                                                   <li style="">&bull; <?php echo $err; ?></li>
                                                <?php }?>
                                            </ul>
                                        </div>
                                        <?php }?>
                            </div>
                              <div class="col-lg-6">
                                <span class="pf-title">First Name</span>
                                <div class="pf-field">
                                  <input
                                    class="form-control text-box single-line"
                                    data-val="true"
                                    data-val-required="Firstname is required"
                                    id="firstname"
                                    name="firstname"
                                    placeholder="First Name"
                                    type="text"
                                    value="<?php if (isset($_POST['firstname'])) echo $_POST['firstname'];  ?>"
                                  />
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <span class="pf-title">Last Name</span>
                                <div class="pf-field">
                                  <input
                                    class="form-control text-box single-line"
                                    data-val="true"
                                    data-val-required="Lastname is required"
                                    id="lastname"
                                    name="lastname"
                                    placeholder="Last Name"
                                    type="text"
                                    value="<?php if (isset($_POST['lastname'])) echo $_POST['lastname'];  ?>"
                                  />
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <span class="pf-title">Username</span>
                                <div class="pf-field">
                                  <input
                                    class="form-control text-box single-line"
                                    data-val=""
                                    data-val-required=""
                                    id="username"
                                    name="username"
                                    placeholder="Username"
                                    type="text"
                                    value="<?php if (isset($_POST['username'])) echo $_POST['username'];  ?>"
                                  />
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <span class="pf-title">Phone Number</span>
                                <div class="pf-field">
                                  <input
                                    class="form-control text-box single-line"
                                    data-val=""
                                    data-val-required=""
                                    id="phone"
                                    name="phone"
                                    placeholder="Phone Number"
                                    type="text"
                                    value="<?php if (isset($_POST['phone'])) echo $_POST['phone'];  ?>"
                                  />
                                </div>
                              </div>
  
                              <div class="col-lg-6">
                                <span class="pf-title">Select L.G.A (Lagos)</span>
                                <div class="pf-field">
                                <?php

$locations = array('', 'Agege', 'Ajeromi-Ifelodun', 'Alimosho', 'Amuwo-Odofin', 'Apapa', 'Badagry', 'Epe', 'Eti-Osa', 'Ibeju/Lekki', 'Ifako-Ijaye', 'Ikeja', 'Ikorodu', 'Kosofe',
'Lagos-Island', 'Lagos-Mainland', 'Mushin', 'Ojo', 'Oshodi-Isolo', 'Shomolu', 'Surulere');

?>
                                                <select class="chosen" id="location" name="location">
                                                <?php

foreach($locations as $location){
    if(isset($_POST['location'])){
        $location = $_POST['location'];
        echo "<option value=".$location." selected='selected'>".$location."</option>";
    }
    else{
        echo "<option value=".$location.">".$location."</option>";
    }
    
}

?>
</select>
                                </div>
                              </div>
                              
                              
                              <div class="col-lg-6">
                                <span class="pf-title">Age Range</span>
                                <div class="pf-field">
                                <?php

$ages = array('', '20-25-Years', '26-30-Years', '31-35-Years', '36-40-Years', '41-45-Years', '45-Years-&-Above')

?>
                                                <select class="chosen" id="age" name="age">
                                                <?php

foreach($ages as $age){
    if(isset($_POST['age'])){
        $age = $_POST['age'];
        echo "<option value=".$age." selected='selected'>".$age."</option>";
    }
    else{
        echo "<option value=".$age.">".$age."</option>";
    }
    
}

?>
</select>
                                </div>
                              </div>
                              
  
                              <div class="col-lg-12">
                                <span class="pf-title">Handwork</span>
                                <div class="pf-field">
                                <?php

$handworks = array('', 'AC-Installation/Repair', 'Aluminium-Windows', 'Appliance-Maintenance', 'Architectural-Design',
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
    if(isset($_POST['handwork'])){
        $handwork = $_POST['handwork'];
        echo "<option value=".$handwork." selected='selected'>".$handwork."</option>";
    }
    else{
        echo "<option value=".$handwork.">".$handwork."</option>";
    }

}

?>
</select>
                                </div>
                              </div>



                              <div class="col-lg-6">
                                <span class="pf-title">Experience Level</span>
                                <div class="pf-field">
                                <?php

$experiences = array('', 'Beginner', 'Intermediate', 'Expert');

?>
                                                <select class="chosen" id="experience" name="experience">
                                                <?php

foreach($experiences as $experience){
    if(isset($_POST['experience'])){
        $experience = $_POST['experience'];
        echo "<option value=".$experience." selected='selected'>".$experience."</option>";
    }
    else{
        echo "<option value=".$experience.">".$experience."</option>";
    }
    
}

?>
</select>
                                </div>
                              </div>
  
                              <div class="col-lg-6">
                                <span class="pf-title">Job Type</span>
                                <div class="pf-field">
                                <?php

$jobtypes = array('', 'Full-Time', 'Part-Time', 'Contract', 'Intern');

?>
                                                <select class="chosen" id="jobtype" name="jobtype">
                                                <?php

foreach($jobtypes as $jobtype){
    if(isset($_POST['jobtype'])){
        $jobtype = $_POST['jobtype'];
        echo "<option value=".$jobtype." selected='selected'>".$jobtype."</option>";
    }
    else{
        echo "<option value=".$jobtype.">".$jobtype."</option>";
    }
    
}

?>
</select>
                                </div>
                              </div>


                              <div class="col-lg-12">
                                <span class="pf-title">Email</span>
                                <div class="pf-field no-margin">
                                  <input
                                    class="form-control text-box single-line"
                                    data-val=""
                                    data-val-length=""
                                    data-val-length-max=""
                                    data-val-length-min=""
                                    data-val-required=""
                                    id="email"
                                    maxlength="100"
                                    name="email"
                                    placeholder="johndoe@example.com"
                                    type="email"
                                    value="<?php if (isset($_POST['email'])) echo $_POST['email'];  ?>"
                                  />
                                </div>
                              </div>

                              <div class="col-lg-6">
                                <span class="pf-title">Password</span>
                                <div class="pf-field">
                                  <input
                                    class="form-control text-box single-line"
                                    data-val=""
                                    data-val-required=""
                                    id="password"
                                    name="password"
                                    placeholder="***********"
                                    type="password"
                                    value=""
                                  />
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <span class="pf-title">Confirm Password</span>
                                <div class="pf-field">
                                  <input
                                    class="form-control text-box single-line"
                                    data-val=""
                                    data-val-required=""
                                    id="cfm_password"
                                    name="cfm_password"
                                    placeholder="************"
                                    type="password"
                                    value=""
                                  />
                                </div>
                              </div>
  
                              <div class="col-lg-12">
                                <span class="pf-title">Address</span>
                                <div class="pf-field no-margin">
                                  <input
                                    class="form-control text-box single-line"
                                    data-val="true"
                                    data-val-length="Address: must be 10 char min and 100 char max"
                                    data-val-length-max="100"
                                    data-val-length-min="10"
                                    data-val-required="Address is required"
                                    id="address"
                                    maxlength="100"
                                    name="address"
                                    placeholder="Address"
                                    type="text"
                                    value="<?php if (isset($_POST['address'])) echo $_POST['address'];  ?>"
                                  />
                                </div>
                              </div>
                              <div class="col-lg-12">
                                <span class="pf-title"
                                  >Skill Description - Tell us about your
                                  handwork</span
                                >
                                <div class="pf-field">
                                  <textarea
                                    data-val="true"
                                    data-val-length="skill Description: must be 65 char minimum, 300 char maximum"
                                    data-val-length-max="300"
                                    data-val-length-min="61"
                                    data-val-required="Skills is required"
                                    htmlAttributes="{ class = form-control, placeholder = Tell us what kind of work can you do. Are you a carpenter or an electrican, etc. Let people know your core area of specialization }"
                                    id="skill_desc"
                                    maxlength="300"
                                    name="skill_desc"
                                    
                                  ><?php if (isset($_POST['skill_desc'])) echo $_POST['skill_desc'];  ?></textarea>
                                </div>
                              </div>

                              <div class="upload-portfolio">
                                <div class="uploadbox">
                                    <label for="file-upload" class="custom-file-upload">
                                        <i class="la la-cloud-upload"></i> <span style="color:green">Upload Profile picture</span>
                                    </label>
                                    <input id="file-upload" type="file" name="profile_pic" />
                                  </div>
                              </div>
                              <div class="col-lg-12">
                                <button class="btn btn-success" type="submit" name="submit">
                                  Sign up
                                </button>
                              </div>
  
                              <ul>
                                <li>
                                  <span
                                    class="field-validation-valid text-danger"
                                    data-valmsg-for="FirstName"
                                    data-valmsg-replace="true"
                                  ></span>
                                </li>
                                <li>
                                  <span
                                    class="field-validation-valid text-danger"
                                    data-valmsg-for="LastName"
                                    data-valmsg-replace="true"
                                  ></span>
                                </li>
                                <li>
                                  <span
                                    class="field-validation-valid text-danger"
                                    data-valmsg-for="Area"
                                    data-valmsg-replace="true"
                                  ></span>
                                </li>
                                <li>
                                  <span
                                    class="field-validation-valid text-danger"
                                    data-valmsg-for="handwork"
                                    data-valmsg-replace="true"
                                  ></span>
                                </li>
                                <li>
                                  <span
                                    class="field-validation-valid text-danger"
                                    data-valmsg-for="Address"
                                    data-valmsg-replace="true"
                                  ></span>
                                </li>
                                <li>
                                  <span
                                    class="field-validation-valid text-danger"
                                    data-valmsg-for="skilldescription"
                                    data-valmsg-replace="true"
                                  ></span>
                                </li>
                                <li>
                                  <span
                                    class="field-validation-valid text-danger"
                                    data-valmsg-for="state"
                                    data-valmsg-replace="true"
                                  ></span>
                                </li>
                              </ul>
  
                              <div></div>
  
                              <div></div>
                            </div>
                          </div>
                          <br />
                          <input
                            name="__RequestVerificationToken"
                            type="hidden"
                            value="CfDJ8IxpwAgpJgZKhredemyMRdCjgUP_XQMzLfP4FvWVyzmB6MAuHqoOK_bV_by8c0ZG9xgAOzGF0-JAWgYcHdmiIE-ttGPgmRqApMM9m8EpukoEyFZ5LPNfxgFTBb4czq1bp3wGJM2I8NwRDaNO5sDHAPI"
                          />
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>

      <footer class="ft">
        <div class="bottom-line">
          <div class="container">
            <span
              >©
              <!-- <script>
                document.write(new Date().getFullYear());
              </script> -->
              <?php
              echo date("Y");
              ?>
              artisan_hub. All rights reserved.</span>
            <!-- <a href="index.php">Try here</a> -->
          </div>
        </div>
      </footer>
    </div>

    <script src="../js1/jquery.min.js" type="text/javascript"></script>
    <script src="../js1/modernizr.js" type="text/javascript"></script>
    <script src="../js1/script.js" type="text/javascript"></script>
    <script src="../js1/bootstrap.min.js" type="text/javascript"></script>
    <script src="../js1/wow.min.js" type="text/javascript"></script>
    <script src="../js1/slick.min.js" type="text/javascript"></script>
    <script src="../js1/parallax.js" type="text/javascript"></script>
    <script src="../js1/select-chosen.js" type="text/javascript"></script>
    <script
      src="../js1/jquery.scrollbar.min.js"
      type="text/javascript"
    ></script>
    <script src="../js1/counter.js" type="text/javascript"></script>
  </body>
</html>
