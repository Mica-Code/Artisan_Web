
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
                                  <select class="chosen" data-val="true" data-val-required="Location is required" id="location" name="location" value="<?php if (isset($_POST['area'])) echo $_POST['area'];  ?>">
                                    <optgroup label="Your Location">
                                    <option value="">Select your Location</option>
                                    <option value="Agege">Agege</option>
                                    <option value="Ajeromi-Ifelodun">Ajeromi-Ifelodun</option>
                                    <option value="Alimosho">Alimosho</option>
                                    <option value="Amuwo-Odofin">Amuwo-Odofin</option>
                                    <option value="Apapa">Apapa</option>
                                    <option value="Badagry">Badagry</option>
                                    <option value="Epe">Epe</option>
                                    <option value="Eti-Osa">Eti-Osa</option>
                                    <option value="Ibeju/Lekki">Ibeju/Lekki</option>
                                    <option value="Ifako-Ijaye">Ifako-Ijaye</option>
                                    <option value="Ikeja">Ikeja</option>
                                    <option value="Ikorodu">Ikorodu</option>
                                    <option value="Kosofe">Kosofe</option>
                                    <option value="Lagos Island">Lagos Island</option>
                                    <option value="Lagos Mainland">Lagos Mainland</option>
                                    <option value="Mushin">Mushin</option>
                                    <option value="Ojo">Ojo</option>
                                    <option value="Oshodi-Isolo">Oshodi-Isolo</option>
                                    <option value="Shomolu">Shomolu</option>
                                    <option value="Surulere">Surulere</option>
                                    </optgroup>
                                  </select>
                                </div>
                              </div>
  
                              <div class="col-lg-6">
                                <span class="pf-title">Age</span>
                                <div class="pf-field">
                                  <select
                                    data-placeholder="Your Age Range"
                                    class="chosen"
                                    name="age"
                                    id="age"
                                    value="<?php if (isset($_POST['age'])) echo $_POST['age'];  ?>"
                                  >
                                    <option>20-25 Years</option>
                                    <option>26-30 Years</option>
                                    <option>31-35 Years</option>
                                    <option>36-40 Years</option>
                                    <option>41-45 Years</option>
                                    <option>45 Years and Above</option>
                                  </select>
                                </div>
                              </div>
  
                              <div class="col-lg-12">
                                <span class="pf-title">Handwork</span>
                                <div class="pf-field">
                                  <select class="chosen" data-val="true" data-val-required="handwork is required" id="handwork" name="handwork" value="<?php if (isset($_POST['handwork'])) echo $_POST['handwork'];  ?>">
                                    <option value="">Select handwork</option>
                                    <option value="AC Installation and Repair">
                                      AC Installation and Repair
                                    </option>
                                    <option value="Aluminium Windows">
                                      Aluminium Windows
                                    </option>
                                    <option value="Appliance Maintenance">
                                      Appliance Maintenance
                                    </option>
                                    <option value="Architectural Design">
                                      Architectural Design
                                    </option>
                                    <option value="Artist">Artist</option>
                                    <option value="Auto Mechanic">
                                      Auto Mechanic
                                    </option>
                                    <option value="Bathroom Renovation">
                                      Bathroom Renovation
                                    </option>
                                    <option value="Bricklayer and Mason">
                                      Bricklayer and Mason
                                    </option>
                                    <option value="CableTV and CCTV Installer">
                                      CableTV and CCTV Installer
                                    </option>
                                    <option value="CableTV Installation">
                                      CableTV Installation
                                    </option>
                                    <option value="Car Rewire and Car tracker">
                                      Car Rewire and Car tracker
                                    </option>
                                    <option value="Car Upholstery">
                                      Car Upholstery
                                    </option>
                                    <option value="Car Wash">Car Wash</option>
                                    <option value="Carpentry">Carpentry</option>
                                    <option value="Catering">Catering</option>
                                    <option
                                      value="CCTV / Biometric Access Control"
                                    >
                                      CCTV / Biometric Access Control
                                    </option>
                                    <option value="Ceiliing Repair">
                                      Ceiliing Repair
                                    </option>
                                    <option value="Ceramic and tiling">
                                      Ceramic and tiling
                                    </option>
                                    <option value="Cleaning">Cleaning</option>
                                    <option value="Cobbler">Cobbler</option>
                                    <option value="Cosmetologists">
                                      Cosmetologists
                                    </option>
                                    <option value="Craftman">Craftman</option>
                                    <option value="Curtain Hanging">
                                      Curtain Hanging
                                    </option>
                                    <option value="Deck Building">
                                      Deck Building
                                    </option>
                                    <option value="Digital Marketing">
                                      Digital Marketing
                                    </option>
                                    <option value="Door Installation And Repair">
                                      Door Installation And Repair
                                    </option>
                                    <option value="Driver/Rider">
                                      Driver/Rider
                                    </option>
                                    <option value="Electrical">Electrical</option>
                                    <option value="Electronic Technician">
                                      Electronic Technician
                                    </option>
                                    <option value="Event Planner">
                                      Event Planner
                                    </option>
                                    <option value="Event Usher">
                                      Event Usher
                                    </option>
                                    <option value="Factory Worker">
                                      Factory Worker
                                    </option>
                                    <option value="Farm worker">
                                      Farm worker
                                    </option>
                                    <option value="Fascinators">
                                      Fascinators
                                    </option>
                                    <option
                                      value="Flooring installation and Repair"
                                    >
                                      Flooring installation and Repair
                                    </option>
                                    <option value="Framing">Framing</option>
                                    <option value="Furniture Refinishing">
                                      Furniture Refinishing
                                    </option>
                                    <option value="Gadgets Repairs">
                                      Gadgets Repairs
                                    </option>
                                    <option value="Gardening">Gardening</option>
                                    <option value="Gas Man">Gas Man</option>
                                    <option value="Hair Stylist">
                                      Hair Stylist
                                    </option>
                                    <option value="Heating Systems">
                                      Heating Systems
                                    </option>
                                    <option value="Heavy Duty Machines">
                                      Heavy Duty Machines
                                    </option>
                                    <option value="Horticulturist">
                                      Horticulturist
                                    </option>
                                    <option value="Hot Tubs and Spa">
                                      Hot Tubs and Spa
                                    </option>
                                    <option value="House Renovation">
                                      House Renovation
                                    </option>
                                    <option value="Housekeeping">
                                      Housekeeping
                                    </option>
                                    <option value="Insulation Installation">
                                      Insulation Installation
                                    </option>
                                    <option value="Interior Decoration">
                                      Interior Decoration
                                    </option>
                                    <option value="Inverter Technician">
                                      Inverter Technician
                                    </option>
                                    <option value="Janitorial Services">
                                      Janitorial Services
                                    </option>
                                    <option value="Landscaping">
                                      Landscaping
                                    </option>
                                    <option value="Laundry Service">
                                      Laundry Service
                                    </option>
                                    <option value="Makeup Artist">
                                      Makeup Artist
                                    </option>
                                    <option value="Manicure and Pedicure">
                                      Manicure and Pedicure
                                    </option>
                                    <option value="Mini Generators">
                                      Mini Generators
                                    </option>
                                    <option value="Motor mechanic">
                                      Motor mechanic
                                    </option>
                                    <option value="Musical studio">
                                      Musical studio
                                    </option>
                                    <option value="Networking and Access Control">
                                      Networking and Access Control
                                    </option>
                                    <option value="Painting">Painting</option>
                                    <option value="Panel Beater">
                                      Panel Beater
                                    </option>
                                    <option value="Patio Stone Installation">
                                      Patio Stone Installation
                                    </option>
                                    <option value="Pest Control">
                                      Pest Control
                                    </option>
                                    <option value="Photography">
                                      Photography
                                    </option>
                                    <option value="Plumbing">Plumbing</option>
                                    <option value="POP Ceiling Services">
                                      POP Ceiling Services
                                    </option>
                                    <option value="Porches">Porches</option>
                                    <option value="Property Valuers">
                                      Property Valuers
                                    </option>
                                    <option value="Refrigerator Technician">
                                      Refrigerator Technician
                                    </option>
                                    <option value="Roofing">Roofing</option>
                                    <option value="Septic Systems">
                                      Septic Systems
                                    </option>
                                    <option value="Solar and Inverter Technician">
                                      Solar and Inverter Technician
                                    </option>
                                    <option value="Solar Panels">
                                      Solar Panels
                                    </option>
                                    <option
                                      value="Soundproof and Mini Generators"
                                    >
                                      Soundproof and Mini Generators
                                    </option>
                                    <option value="Soundproof Generators">
                                      Soundproof Generators
                                    </option>
                                    <option value="Soundproofing">
                                      Soundproofing
                                    </option>
                                    <option value="Sprinkler System">
                                      Sprinkler System
                                    </option>
                                    <option value="Stain Removal">
                                      Stain Removal
                                    </option>
                                    <option value="Surveyor">Surveyor</option>
                                    <option value="Swimming Pool Maintenance">
                                      Swimming Pool Maintenance
                                    </option>
                                    <option value="System Technician">
                                      System Technician
                                    </option>
                                    <option value="Tailoring">Tailoring</option>
                                    <option value="Tiling">Tiling</option>
                                    <option value="Video and Graphics">
                                      Video and Graphics
                                    </option>
                                    <option value="vulcanizer">vulcanizer</option>
                                    <option value="Wall Building">
                                      Wall Building
                                    </option>
                                    <option value="Wallpapering">
                                      Wallpapering
                                    </option>
                                    <option value="Waste and Junk Removal">
                                      Waste and Junk Removal
                                    </option>
                                    <option value="Water Purification">
                                      Water Purification
                                    </option>
                                    <option value="Water Softening">
                                      Water Softening
                                    </option>
                                    <option value="Web Designer">
                                      Web Designer
                                    </option>
                                    <option value="Welder">Welder</option>
                                    <option value="Window Installation">
                                      Window Installation
                                    </option>
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
                                    value="<?php if (isset($_POST['skill_desc'])) echo $_POST['skill_desc'];  ?>"
                                  ></textarea>
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
