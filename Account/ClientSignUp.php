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
<option value="Abadam">Abadam</option>
<option value="Abaji">Abaji</option>
<option value="Abakaliki">Abakaliki</option>
<option value="Abeokuta">Abeokuta</option>
<option value="Abuja">Abuja</option>
<option value="Abulegba">Abulegba</option>
<option value="Adamawa State">Adamawa State</option>
<option value="Adavi">Adavi</option>
<option value="Ado">Ado</option>
<option value="Ado Ekiti">Ado Ekiti</option>
<option value="Ado-Odo/Ota">Ado-Odo/Ota</option>
<option value="Afigbo">Afigbo</option>
<option value="Afijio">Afijio</option>
<option value="Afikpo North">Afikpo North</option>
<option value="Afikpo South">Afikpo South</option>
<option value="Agale">Agale</option>
<option value="Agatu">Agatu</option>
<option value="Agbara">Agbara</option>
<option value="Agboyi/Ketu">Agboyi/Ketu</option>
<option value="Agege">Agege</option>
<option value="Aguata">Aguata</option>
<option value="Agulu">Agulu</option>
<option value="Agungi">Agungi</option>
<option value="Ajah">Ajah</option>
<option value="Ajao">Ajao</option>
<option value="Ajaokuta">Ajaokuta</option>
<option value="Akure">Akure</option>
<option value="Akwa">Akwa</option>
<option value="Akwa Ibom State">Akwa Ibom State</option>
<option value="Akwanga">Akwanga</option>
<option value="Alaba">Alaba</option>
<option value="Alagbado">Alagbado</option>
<option value="Alakahia">Alakahia</option>
<option value="Alakumosa East">Alakumosa East</option>
<option value="Alakumosa West">Alakumosa West</option>
<option value="Albasu">Albasu</option>
<option value="Aleiro">Aleiro</option>
<option value="Aliba">Aliba</option>
<option value="Alkaleri">Alkaleri</option>
<option value="Amuwo-Odofin">Amuwo-Odofin</option>
<option value="Anambra State">Anambra State</option>
<option value="Andoni">Andoni</option>
<option value="Aninri">Aninri</option>
<option value="Aniocha North">Aniocha North</option>
<option value="Aniocha South">Aniocha South</option>
<option value="Ankpa">Ankpa</option>
<option value="Apa">Apa</option>
<option value="Apapa">Apapa</option>
<option value="Ardo-Kola">Ardo-Kola</option>
<option value="Asaba">Asaba</option>
<option value="Asari-Toru">Asari-Toru</option>
<option value="Askira/Uba">Askira/Uba</option>
<option value="Asokoro">Asokoro</option>
<option value="Auchi">Auchi</option>
<option value="Augie">Augie</option>
<option value="Awka">Awka</option>
<option value="Ayamelum">Ayamelum</option>
<option value="Ayobo">Ayobo</option>
<option value="Babura">Babura</option>
<option value="Badagry">Badagry</option>
<option value="Bade">Bade</option>
<option value="Bagudo">Bagudo</option>
<option value="Bagwai">Bagwai</option>
<option value="Bakassi">Bakassi</option>
<option value="Barkin Ladi">Barkin Ladi</option>
<option value="Bassa">Bassa</option>
<option value="Bassa-Plateau">Bassa-Plateau</option>
<option value="Batagarawa">Batagarawa</option>
<option value="Batsari">Batsari</option>
<option value="Bauchi LGA">Bauchi LGA</option>
<option value="Bauchi State">Bauchi State</option>
<option value="Baure">Baure</option>
<option value="Bayelsa State">Bayelsa State</option>
<option value="Bayo">Bayo</option>
<option value="Bebeji">Bebeji</option>
<option value="Bekwara">Bekwara</option>
<option value="Bende">Bende</option>
<option value="Benin City">Benin City</option>
<option value="Benue State">Benue State</option>
<option value="Berger Lagos">Berger Lagos</option>
<option value="Biase">Biase</option>
<option value="Bichi">Bichi</option>
<option value="Bida">Bida</option>
<option value="Billiri">Billiri</option>
<option value="Bindawa">Bindawa</option>
<option value="Birnin Kebbi">Birnin Kebbi</option>
<option value="Birnin Magaji">Birnin Magaji</option>
<option value="Birnin-Gwari">Birnin-Gwari</option>
<option value="Biu">Biu</option>
<option value="Bodinga">Bodinga</option>
<option value="Bogoro">Bogoro</option>
<option value="Boki">Boki</option>
<option value="Bonny">Bonny</option>
<option value="Budu">Budu</option>
<option value="Burutu">Burutu</option>
<option value="Bwari">Bwari</option>
<option value="Calabar">Calabar</option>
<option value="Chanchaga">Chanchaga</option>
<option value="Charanchi">Charanchi</option>
<option value="Chibok">Chibok</option>
<option value="Chikun">Chikun</option>
<option value="Choba">Choba</option>
<option value="Cross River State">Cross River State</option>
<option value="Dakidiya">Dakidiya</option>
<option value="Dakwo">Dakwo</option>
<option value="Dala">Dala</option>
<option value="Damaturu">Damaturu</option>
<option value="Damban">Damban</option>
<option value="Dambatta">Dambatta</option>
<option value="Damboa">Damboa</option>
<option value="Dan Musa">Dan Musa</option>
<option value="Dandi">Dandi</option>
<option value="Dandume">Dandume</option>
<option value="Dange-Shuni">Dange-Shuni</option>
<option value="Danja">Danja</option>
<option value="Darazo">Darazo</option>
<option value="Dass">Dass</option>
<option value="Daura">Daura</option>
<option value="Degema">Degema</option>
<option value="Dei-Dei">Dei-Dei</option>
<option value="Dekina">Dekina</option>
<option value="Delta State">Delta State</option>
<option value="Demsa">Demsa</option>
<option value="Dikwa">Dikwa</option>
<option value="Diobu">Diobu</option>
<option value="Doguwa">Doguwa</option>
<option value="Doma">Doma</option>
<option value="Dunukofia">Dunukofia</option>
<option value="Durumi">Durumi</option>
<option value="Dutse">Dutse</option>
<option value="Dutse-Jigawa">Dutse-Jigawa</option>
<option value="Dutsin-Ma">Dutsin-Ma</option>
<option value="Eatern Obolo">Eatern Obolo</option>
<option value="Ebonyi">Ebonyi</option>
<option value="Ebonyi State">Ebonyi State</option>
<option value="Edah">Edah</option>
<option value="Ede North">Ede North</option>
<option value="Ede South">Ede South</option>
<option value="Edo State">Edo State</option>
<option value="Edu">Edu</option>
<option value="Effon Alaiye">Effon Alaiye</option>
<option value="Egbe Idimi">Egbe Idimi</option>
<option value="Egbeda">Egbeda</option>
<option value="Egbedore">Egbedore</option>
<option value="Egor">Egor</option>
<option value="Ehime-Mbano">Ehime-Mbano</option>
<option value="Ekenwan">Ekenwan</option>
<option value="Ekeremor">Ekeremor</option>
<option value="Eket">Eket</option>
<option value="Eket">Eket</option>
<option value="Ekiti East">Ekiti East</option>
<option value="Ekiti South West">Ekiti South West</option>
<option value="Ekiti State">Ekiti State</option>
<option value="Ekiti-Kwara">Ekiti-Kwara</option>
<option value="Ekpoma">Ekpoma</option>
<option value="Ekwulobia">Ekwulobia</option>
<option value="Ekwusigo">Ekwusigo</option>
<option value="Eleme">Eleme</option>
<option value="Emohua">Emohua</option>
<option value="Emure">Emure</option>
<option value="Enugu ">Enugu </option>
<option value="Enugu State">Enugu State</option>
<option value="Epe">Epe</option>
<option value="Esan Central">Esan Central</option>
<option value="Esan West">Esan West</option>
<option value="Ese-Odo">Ese-Odo</option>
<option value="Esit-Eket">Esit-Eket</option>
<option value="Essien Udim">Essien Udim</option>
<option value="Etche">Etche</option>
<option value="Ethiope East">Ethiope East</option>
<option value="Ethiope West">Ethiope West</option>
<option value="Etim-Ekpo">Etim-Ekpo</option>
<option value="Etinan">Etinan</option>
<option value="Etsako East">Etsako East</option>
<option value="Etsako West">Etsako West</option>
<option value="Etung">Etung</option>
<option value="Ewekoro">Ewekoro</option>
<option value="Ezeagu">Ezeagu</option>
<option value="Ezinihitte">Ezinihitte</option>
<option value="Ezinihitte Mbaise">Ezinihitte Mbaise</option>
<option value="Fagge">Fagge</option>
<option value="Fakai">Fakai</option>
<option value="Faskari">Faskari</option>
<option value="Festac">Festac</option>
<option value="Fika">Fika</option>
<option value="Fufore">Fufore</option>
<option value="Funakaye">Funakaye</option>
<option value="Fune">Fune</option>
<option value="Funtua">Funtua</option>
<option value="Gabasawa">Gabasawa</option>
<option value="Gada">Gada</option>
<option value="Gaduwa">Gaduwa</option>
<option value="Gagarawa">Gagarawa</option>
<option value="Galadimawa">Galadimawa</option>
<option value="Gamawa">Gamawa</option>
<option value="Ganjuwa">Ganjuwa</option>
<option value="Ganye">Ganye</option>
<option value="Garki">Garki</option>
<option value="Garki I">Garki I</option>
<option value="Garki II">Garki II</option>
<option value="Garum Mallam">Garum Mallam</option>
<option value="Garun Mallam">Garun Mallam</option>
<option value="Gashaka">Gashaka</option>
<option value="Gaya">Gaya</option>
<option value="Gbagada">Gbagada</option>
<option value="Gbako">Gbako</option>
<option value="Gboko">Gboko</option>
<option value="Geidam">Geidam</option>
<option value="Gezawa">Gezawa</option>
<option value="Giade">Giade</option>
<option value="Giwa">Giwa</option>
<option value="Gokana">Gokana</option>
<option value="Gombe State">Gombe State</option>
<option value="Gombi">Gombi</option>
<option value="Goronyo">Goronyo</option>
<option value="Gubio">Gubio</option>
<option value="Gujba">Gujba</option>
<option value="Guma">Guma</option>
<option value="Gummi">Gummi</option>
<option value="Gurara">Gurara</option>
<option value="Gusau">Gusau</option>
<option value="Guyuk">Guyuk</option>
<option value="Guzamala">Guzamala</option>
<option value="Guzape">Guzape</option>
<option value="Gwadabawa">Gwadabawa</option>
<option value="Gwagwalada">Gwagwalada</option>
<option value="Gwale">Gwale</option>
<option value="Gwandu">Gwandu</option>
<option value="Gwarinpa">Gwarinpa</option>
<option value="Gwarinpa">Gwarinpa</option>
<option value="Gwarzo">Gwarzo</option>
<option value="Gwer">Gwer</option>
<option value="Gwoza">Gwoza</option>
<option value="Hadejia">Hadejia</option>
<option value="Hawul">Hawul</option>
<option value="Hong">Hong</option>
<option value="Ibadan North">Ibadan North</option>
<option value="Ibadan South">Ibadan South</option>
<option value="Ibafo">Ibafo</option>
<option value="Ibaji">Ibaji</option>
<option value="Ibarapa Central">Ibarapa Central</option>
<option value="Ibarapa East">Ibarapa East</option>
<option value="Ibarapa North">Ibarapa North</option>
<option value="Ibeju">Ibeju</option>
<option value="Ibeno">Ibeno</option>
<option value="Ibesikpo Asutan">Ibesikpo Asutan</option>
<option value="Ibi">Ibi</option>
<option value="Ibiono Ibom">Ibiono Ibom</option>
<option value="Idah">Idah</option>
<option value="Idanre">Idanre</option>
<option value="Ido">Ido</option>
<option value="Ido-Osi">Ido-Osi</option>
<option value="Ifako-Ijaiye">Ifako-Ijaiye</option>
<option value="Ife">Ife</option>
<option value="Ifedayo">Ifedayo</option>
<option value="Ifedore">Ifedore</option>
<option value="Ifelodun-Kwara">Ifelodun-Kwara</option>
<option value="Ifelodun-Osun">Ifelodun-Osun</option>
<option value="Ifo">Ifo</option>
<option value="Igabi">Igabi</option>
<option value="Igala Mela">Igala Mela</option>
<option value="Igalamela-Odolu">Igalamela-Odolu</option>
<option value="Igbo-Etiti">Igbo-Etiti</option>
<option value="Igbo-Eze">Igbo-Eze</option>
<option value="Igueben">Igueben</option>
<option value="Ihiala">Ihiala</option>
<option value="Ihitte-Uboma">Ihitte-Uboma</option>
<option value="Ijebu">Ijebu</option>
<option value="Ijebu Ode">Ijebu Ode</option>
<option value="Ijero">Ijero</option>
<option value="Ijumu">Ijumu</option>
<option value="Ika">Ika</option>
<option value="Ikara">Ikara</option>
<option value="Ikeduru">Ikeduru</option>
<option value="Ikeja">Ikeja</option>
<option value="Ikenne">Ikenne</option>
<option value="Ikere">Ikere</option>
<option value="Ikole">Ikole</option>
<option value="Ikom">Ikom</option>
<option value="Ikono">Ikono</option>
<option value="Ikorodu">Ikorodu</option>
<option value="Ikosi">Ikosi</option>
<option value="Ikot Abasi">Ikot Abasi</option>
<option value="Ikot Ekpene">Ikot Ekpene</option>
<option value="Ikotun-Igando">Ikotun-Igando</option>
<option value="Ikoyi">Ikoyi</option>
<option value="Ikpoba-Hill">Ikpoba-Hill</option>
<option value="Ikpoba-Okha">Ikpoba-Okha</option>
<option value="Ikwerre">Ikwerre</option>
<option value="Ikwo">Ikwo</option>
<option value="Ikwuano">Ikwuano</option>
<option value="Ilage">Ilage</option>
<option value="Ile-Oluji-Okelgbo">Ile-Oluji-Okelgbo</option>
<option value="Ilesa">Ilesa</option>
<option value="Ilorin">Ilorin</option>
<option value="Ilupeju">Ilupeju</option>
<option value="Imeko Afon">Imeko Afon</option>
<option value="Imo State">Imo State</option>
<option value="Ini">Ini</option>
<option value="Ipaja">Ipaja</option>
<option value="Ipaja">Ipaja</option>
<option value="Ipokia">Ipokia</option>
<option value="Irele">Irele</option>
<option value="Irepo">Irepo</option>
<option value="Irepodun-Ifelodun">Irepodun-Ifelodun</option>
<option value="Irepodun-Kwara">Irepodun-Kwara</option>
<option value="Irepodun-Osun">Irepodun-Osun</option>
<option value="Irewole">Irewole</option>
<option value="Isa">Isa</option>
<option value="Ise-Ekiti">Ise-Ekiti</option>
<option value="Ise-Orun">Ise-Orun</option>
<option value="Iseyin">Iseyin</option>
<option value="Ishielu">Ishielu</option>
<option value="Isiala Mbano">Isiala Mbano</option>
<option value="Isiala-Ngwa">Isiala-Ngwa</option>
<option value="Isin">Isin</option>
<option value="Isi-Uzo">Isi-Uzo</option>
<option value="Isokan">Isokan</option>
<option value="Isoko">Isoko</option>
<option value="Isolo">Isolo</option>
<option value="Isu">Isu</option>
<option value="Isuikwuato">Isuikwuato</option>
<option value="Itas-Gadau">Itas-Gadau</option>
<option value="Itu">Itu</option>
<option value="Ivo">Ivo</option>
<option value="Iwajowa">Iwajowa</option>
<option value="Iwo">Iwo</option>
<option value="Iyana Ipaja">Iyana Ipaja</option>
<option value="Izzi">Izzi</option>
<option value="Jaba">Jaba</option>
<option value="Jabi">Jabi</option>
<option value="Jada">Jada</option>
<option value="Jahi">Jahi</option>
<option value="Jahun">Jahun</option>
<option value="Jakusko">Jakusko</option>
<option value="Jalingo">Jalingo</option>
<option value="Jama&#x27;are">Jama&#x27;are</option>
<option value="Jega">Jega</option>
<option value="Jema&#x27;a">Jema&#x27;a</option>
<option value="Jere">Jere</option>
<option value="Jibia">Jibia</option>
<option value="Jigawa State">Jigawa State</option>
<option value="Jos">Jos</option>
<option value="Jukwoyi">Jukwoyi</option>
<option value="Kabba-Bunu">Kabba-Bunu</option>
<option value="Kabo">Kabo</option>
<option value="Kabusa">Kabusa</option>
<option value="Kachia">Kachia</option>
<option value="Kado">Kado</option>
<option value="Kaduna State">Kaduna State</option>
<option value="Kaga">Kaga</option>
<option value="Kagarko">Kagarko</option>
<option value="Kaita">Kaita</option>
<option value="Kajola">Kajola</option>
<option value="Kajuru">Kajuru</option>
<option value="Kalgo">Kalgo</option>
<option value="Kanam">Kanam</option>
<option value="Kankara">Kankara</option>
<option value="Kano Municipal">Kano Municipal</option>
<option value="Kano State">Kano State</option>
<option value="Karaye">Karaye</option>
<option value="Karim-Lamido">Karim-Lamido</option>
<option value="Karmo">Karmo</option>
<option value="Karu">Karu</option>
<option value="Karu-Nasarawa">Karu-Nasarawa</option>
<option value="Katagum">Katagum</option>
<option value="Katampe">Katampe</option>
<option value="Katcha">Katcha</option>
<option value="Katsina">Katsina</option>
<option value="Katsina State">Katsina State</option>
<option value="Katsina-Ala">Katsina-Ala</option>
<option value="Kaugama">Kaugama</option>
<option value="Kaura">Kaura</option>
<option value="Kaura Namoda">Kaura Namoda</option>
<option value="Kauru">Kauru</option>
<option value="Keana">Keana</option>
<option value="Kebbe">Kebbe</option>
<option value="Kebbi State">Kebbi State</option>
<option value="Keffi">Keffi</option>
<option value="Ketu">Ketu</option>
<option value="Khana">Khana</option>
<option value="Kibiya">Kibiya</option>
<option value="Kirfi">Kirfi</option>
<option value="Kiyawa">Kiyawa</option>
<option value="Kogi State">Kogi State</option>
<option value="Kokona">Kokona</option>
<option value="Kolokuma-Opokuma">Kolokuma-Opokuma</option>
<option value="Konduga">Konduga</option>
<option value="Konshisha">Konshisha</option>
<option value="Kontagora">Kontagora</option>
<option value="Kosofe">Kosofe</option>
<option value="Kubau">Kubau</option>
<option value="Kubwa">Kubwa</option>
<option value="Kudan">Kudan</option>
<option value="Kuje">Kuje</option>
<option value="Kunchi">Kunchi</option>
<option value="Kura">Kura</option>
<option value="Kwali">Kwali</option>
<option value="Kwami">Kwami</option>
<option value="Kwande">Kwande</option>
<option value="Kwara State">Kwara State</option>
<option value="Kware">Kware</option>
<option value="Lafia">Lafia</option>
<option value="Lagelu">Lagelu</option>
<option value="Lagos Island">Lagos Island</option>
<option value="Lagos Mainland">Lagos Mainland</option>
<option value="Lagos State">Lagos State</option>
<option value="Lamurde">Lamurde</option>
<option value="Lau">Lau</option>
<option value="Lavun">Lavun</option>
<option value="Lekki">Lekki</option>
<option value="Lekki Phase 1">Lekki Phase 1</option>
<option value="Lekki Phase2">Lekki Phase2</option>
<option value="Lere">Lere</option>
<option value="Logo">Logo</option>
<option value="Lokogoma">Lokogoma</option>
<option value="Lokoja">Lokoja</option>
<option value="Lugbe">Lugbe</option>
<option value="Machina">Machina</option>
<option value="Madagali">Madagali</option>
<option value="Madobi">Madobi</option>
<option value="Mafa">Mafa</option>
<option value="Magama">Magama</option>
<option value="Magboro">Magboro</option>
<option value="Magodo">Magodo</option>
<option value="Magumeri">Magumeri</option>
<option value="Maiduguri">Maiduguri</option>
<option value="Maitama">Maitama</option>
<option value="Maiyama">Maiyama</option>
<option value="Makarfi">Makarfi</option>
<option value="Makoda">Makoda</option>
<option value="Makurdi">Makurdi</option>
<option value="Malumfashi">Malumfashi</option>
<option value="Mangu">Mangu</option>
<option value="Mani">Mani</option>
<option value="Maradun">Maradun</option>
<option value="Maru">Maru</option>
<option value="Maryland">Maryland</option>
<option value="Mashegu">Mashegu</option>
<option value="Mayo-Belwa">Mayo-Belwa</option>
<option value="Mbaitoli">Mbaitoli</option>
<option value="Mbo">Mbo</option>
<option value="Michika">Michika</option>
<option value="Minna">Minna</option>
<option value="Misau">Misau</option>
<option value="Moba">Moba</option>
<option value="Mokwa">Mokwa</option>
<option value="Monguno">Monguno</option>
<option value="Mopa-Muro">Mopa-Muro</option>
<option value="Moro">Moro</option>
<option value="Mpape">Mpape</option>
<option value="Musawa">Musawa</option>
<option value="Mushin">Mushin</option>
<option value="Nafada">Nafada</option>
<option value="Nangere">Nangere</option>
<option value="Nasarawa">Nasarawa</option>
<option value="Nasarawa State">Nasarawa State</option>
<option value="Nasarawa-Eggon">Nasarawa-Eggon</option>
<option value="Nasarawa-Kano">Nasarawa-Kano</option>
<option value="Nboro">Nboro</option>
<option value="Ndokwa">Ndokwa</option>
<option value="Nembe">Nembe</option>
<option value="Ngaski">Ngaski</option>
<option value="Ngor-Okpala">Ngor-Okpala</option>
<option value="Nguru">Nguru</option>
<option value="Niger State">Niger State</option>
<option value="Ningi">Ningi</option>
<option value="Njaba">Njaba</option>
<option value="Njikoka">Njikoka</option>
<option value="Nkanu">Nkanu</option>
<option value="Nkpor">Nkpor</option>
<option value="Nkwerre">Nkwerre</option>
<option value="Nnewi">Nnewi</option>
<option value="Nsit Ibom">Nsit Ibom</option>
<option value="Nsit Ubium">Nsit Ubium</option>
<option value="Nsukka">Nsukka</option>
<option value="Numan">Numan</option>
<option value="Nwangele">Nwangele</option>
<option value="Nyanya">Nyanya</option>
<option value="Obafemi-Owode">Obafemi-Owode</option>
<option value="Obanliku">Obanliku</option>
<option value="Obi">Obi</option>
<option value="Obi Ngwa">Obi Ngwa</option>
<option value="Obi-Akpor">Obi-Akpor</option>
<option value="Obi-Nasarawa">Obi-Nasarawa</option>
<option value="Obokun">Obokun</option>
<option value="Obol Akara">Obol Akara</option>
<option value="Obowo">Obowo</option>
<option value="Obubra">Obubra</option>
<option value="Odeda">Odeda</option>
<option value="Odigbo">Odigbo</option>
<option value="Odogbolu">Odogbolu</option>
<option value="Odukpani">Odukpani</option>
<option value="Offa">Offa</option>
<option value="Ofu">Ofu</option>
<option value="Ogba">Ogba</option>
<option value="Ogbadibo">Ogbadibo</option>
<option value="Ogba-Egbema-Ndoni">Ogba-Egbema-Ndoni</option>
<option value="Ogbaru">Ogbaru</option>
<option value="Ogbia">Ogbia</option>
<option value="Ogbomosho">Ogbomosho</option>
<option value="Ogo Oluwa">Ogo Oluwa</option>
<option value="Ogoja">Ogoja</option>
<option value="Ogori-Magongo">Ogori-Magongo</option>
<option value="Ogu-Bolo">Ogu-Bolo</option>
<option value="Ogun State">Ogun State</option>
<option value="Ogun Waterside">Ogun Waterside</option>
<option value="Oguta">Oguta</option>
<option value="Ohafia">Ohafia</option>
<option value="Ohaji-Egbema">Ohaji-Egbema</option>
<option value="Ohaozara">Ohaozara</option>
<option value="Ohaukwu">Ohaukwu</option>
<option value="Ohimini">Ohimini</option>
<option value="Oji-River">Oji-River</option>
<option value="Ojo">Ojo</option>
<option value="Ojodu">Ojodu</option>
<option value="Ojota">Ojota</option>
<option value="Oju">Oju</option>
<option value="Oke-Ero">Oke-Ero</option>
<option value="Okene">Okene</option>
<option value="Okigwe">Okigwe</option>
<option value="Okitipupa">Okitipupa</option>
<option value="Okobo">Okobo</option>
<option value="Okoko">Okoko</option>
<option value="Okpe">Okpe</option>
<option value="Okpokwu">Okpokwu</option>
<option value="Okrika">Okrika</option>
<option value="Olamaboro">Olamaboro</option>
<option value="Ola-Oluwa">Ola-Oluwa</option>
<option value="Olorunda-Osun">Olorunda-Osun</option>
<option value="Olorunsogo">Olorunsogo</option>
<option value="Oluyole">Oluyole</option>
<option value="Omala">Omala</option>
<option value="Omuma">Omuma</option>
<option value="Ona-Ara">Ona-Ara</option>
<option value="Ondo State">Ondo State</option>
<option value="Onicha">Onicha</option>
<option value="Oniru">Oniru</option>
<option value="Onitsha">Onitsha</option>
<option value="Onna">Onna</option>
<option value="Onne">Onne</option>
<option value="Onuimo">Onuimo</option>
<option value="Oredo">Oredo</option>
<option value="Orelope">Orelope</option>
<option value="Orile">Orile</option>
<option value="Orlu">Orlu</option>
<option value="Orolu">Orolu</option>
<option value="Oron">Oron</option>
<option value="Orsu">Orsu</option>
<option value="Oru West">Oru West</option>
<option value="Oruk Anam">Oruk Anam</option>
<option value="Orumba North">Orumba North</option>
<option value="Ose">Ose</option>
<option value="Oshimili ">Oshimili </option>
<option value="Oshodi">Oshodi</option>
<option value="Osogbo">Osogbo</option>
<option value="Osun State">Osun State</option>
<option value="Ota">Ota</option>
<option value="Otukpo">Otukpo</option>
<option value="Ovia North East">Ovia North East</option>
<option value="Ovia South West">Ovia South West</option>
<option value="Owan East">Owan East</option>
<option value="Owan West">Owan West</option>
<option value="Owerri">Owerri</option>
<option value="Owerri-Manicipal">Owerri-Manicipal</option>
<option value="Owo">Owo</option>
<option value="Oye">Oye</option>
<option value="Oyi">Oyi</option>
<option value="Oyigbo">Oyigbo</option>
<option value="Oyo State">Oyo State</option>
<option value="Oyun">Oyun</option>
<option value="Pankshin">Pankshin</option>
<option value="Patani">Patani</option>
<option value="Pategi">Pategi</option>
<option value="Plateau State">Plateau State</option>
<option value="PortHarcourt">PortHarcourt</option>
<option value="Potiskum">Potiskum</option>
<option value="Quaan Pan">Quaan Pan</option>
<option value="Rabah">Rabah</option>
<option value="Rafi">Rafi</option>
<option value="Rijau">Rijau</option>
<option value="Ringim">Ringim</option>
<option value="Rivers State">Rivers State</option>
<option value="Riyom">Riyom</option>
<option value="Rogo">Rogo</option>
<option value="Rumuokoro">Rumuokoro</option>
<option value="Rumuola">Rumuola</option>
<option value="Sabuwa">Sabuwa</option>
<option value="Safana">Safana</option>
<option value="Sagamu">Sagamu</option>
<option value="Sapele">Sapele</option>
<option value="Satelite Town">Satelite Town</option>
<option value="Shagari">Shagari</option>
<option value="Shendam">Shendam</option>
<option value="Shinkafi">Shinkafi</option>
<option value="Shomolu">Shomolu</option>
<option value="Silame">Silame</option>
<option value="Soba">Soba</option>
<option value="Sokoto State">Sokoto State</option>
<option value="Suleja">Suleja</option>
<option value="Surulere">Surulere</option>
<option value="Trans Amadi">Trans Amadi</option>
<option value="Tsanyawa">Tsanyawa</option>
<option value="Udenu">Udenu</option>
<option value="Udi">Udi</option>
<option value="Udu">Udu</option>
<option value="Udung Uko">Udung Uko</option>
<option value="Uga">Uga</option>
<option value="Ughelli">Ughelli</option>
<option value="Ugwunagbo">Ugwunagbo</option>
<option value="Uhunmwonde">Uhunmwonde</option>
<option value="Ukanafun">Ukanafun</option>
<option value="Ukum">Ukum</option>
<option value="Ukwa East">Ukwa East</option>
<option value="Ukwa West">Ukwa West</option>
<option value="Ukwuani">Ukwuani</option>
<option value="Umu Nneochi">Umu Nneochi</option>
<option value="Umuahia">Umuahia</option>
<option value="Ungogo">Ungogo</option>
<option value="Uquo-Ibeno">Uquo-Ibeno</option>
<option value="Uromi">Uromi</option>
<option value="Uvwie">Uvwie</option>
<option value="Uyo">Uyo</option>
<option value="Uzo-Uwani">Uzo-Uwani</option>
<option value="Vandeikya">Vandeikya</option>
<option value="Victoria Island">Victoria Island</option>
<option value="Wamako">Wamako</option>
<option value="Wamba">Wamba</option>
<option value="Warawa">Warawa</option>
<option value="Warji">Warji</option>
<option value="Warri">Warri</option>
<option value="Wase">Wase</option>
<option value="Woji">Woji</option>
<option value="Wudi">Wudi</option>
<option value="Wukari">Wukari</option>
<option value="Wurno">Wurno</option>
<option value="Wuse">Wuse</option>
<option value="Wuse">Wuse</option>
<option value="Wushishi">Wushishi</option>
<option value="Wuye">Wuye</option>
<option value="Yaba">Yaba</option>
<option value="Yaba">Yaba</option>
<option value="Yabo">Yabo</option>
<option value="Yagba">Yagba</option>
<option value="Yala">Yala</option>
<option value="Yenogoa">Yenogoa</option>
<option value="Yobe State">Yobe State</option>
<option value="Yola">Yola</option>
<option value="Yorro">Yorro</option>
<option value="Zaki">Zaki</option>
<option value="Zamfara">Zamfara</option>
<option value="Zango">Zango</option>
<option value="Zaria">Zaria</option>
<option value="Zing">Zing</option>
<option value="Zuru">Zuru</option>
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
