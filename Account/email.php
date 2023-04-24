<?php

$mydate=date('Y');
// 		$message = str_replace(
// 		array('%fullname%','%e%','%un%', '%mydate%'),
// 		array($fullname, $email, $uname, $mydate),
// 		file_get_contents('email-template2.php')
// 		);
        //$message2 = "This is a Message";
        
        $message = '<table class="wrapper" style="border-collapse: collapse;table-layout: fixed;min-width: 320px;width: 100%;background-color: #fff;" cellpadding="0" cellspacing="0" role="presentation"><tbody><tr><td>
      <div role="banner">
        <div class="header" style="Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);" id="emb-email-header-container">
          <!--[if (mso)|(IE)]><table align="center" class="header" cellpadding="0" cellspacing="0" role="presentation"><tr><td style="width: 600px"><![endif]-->
         <div class="logo emb-logo-margin-box" style="font-size: 26px;line-height: 32px;Margin-top: 12px;Margin-bottom: 22px;color: #c3ced9;font-family: Roboto,Tahoma,sans-serif;Margin-left: 20px;Margin-right: 20px;" align="center">
            <div class="logo-center" align="center" id="emb-email-header"><a style="text-decoration: none;transition: opacity 0.1s ease-in;color: #c3ced9;" href="https://www.kipx.ng"><img style="display: block;height: auto;width: 100%;border: 0;max-width: 200px;" src="https://lekkilersa.org/Artisan_Web/Uploads/General/artificer-logo.png" alt="Artificer_hub logo" width="86" /></a></div>
          </div>
        <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
      </div>
      </div>
      <div>
      <div style="background-color:#512DA8; background-image: linear-gradient(135deg, rgb(118, 69, 224) 0%, rgb(43, 216, 145) 100%)">
        <div class="layout one-col" style="Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;">
          <div class="layout__inner" style="border-collapse: collapse;display: table;width: 100%;">
          <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" role="presentation"><tr class="layout-full-width" style="background-color: #3291d6;"><td class="layout__edges">&nbsp;</td><td style="width: 600px" class="w560"><![endif]-->
            <div class="column" style="max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;">
            
              <div style="Margin-left: 20px;Margin-right: 20px;">
      <div style="mso-line-height-rule: exactly;line-height: 20px;font-size: 1px;">&nbsp;</div>
    </div>
            
              <div style="Margin-left: 20px;Margin-right: 20px;">
      <div style="mso-line-height-rule: exactly;mso-text-raise: 4px;">
        <h2 class="size-36" style="Margin-top: 0;Margin-bottom: 16px;font-style: normal;font-weight: normal;color: #e31212;font-size: 30px;line-height: 38px;font-family: pt serif,georgia,serif;text-align: center;" lang="x-size-36"><span class="font-pt-serif"><span style="color:#fff">ARTIFICER HUB</span></span></h2>
      </div>
    </div>
            
              <div style="Margin-left: 20px;Margin-right: 20px;">
      <div style="mso-line-height-rule: exactly;line-height: 1px;font-size: 1px;">&nbsp;</div>
    </div>
            
              <div style="Margin-left: 20px;Margin-right: 20px;">
      <div style="mso-line-height-rule: exactly;line-height: 10px;font-size: 1px;">&nbsp;</div>
    </div>
            
            </div>
          <!--[if (mso)|(IE)]></td><td class="layout__edges">&nbsp;</td></tr></table><![endif]-->
          </div>
        </div>
      </div>
  
      <div class="layout one-col fixed-width" style="Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;">
        <div class="layout__inner" style="border-collapse: collapse;display: table;width: 100%;background-color: #ffffff;">
        <!--[if (mso)|(IE)]><table align="center" cellpadding="0" cellspacing="0" role="presentation"><tr class="layout-fixed-width" style="background-color: #ffffff;"><td style="width: 600px" class="w560"><![endif]-->
          <div class="column" style="text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);">
        
            <div style="Margin-left: 20px;Margin-right: 20px;">
      <div style="mso-line-height-rule: exactly;mso-text-raise: 4px;">
        <p style="text-align:center;">
<span style="color:#000000">&nbsp;Hello <strong> '.$fullname.' </strong>,<br />
You have been registered as an Artisan on <b>Artificer Hub</b><br/>'. $update = mysqli_query($dbc, "UPDATE art_reg_tbl SET acct_code = '$acct_code' WHERE email = '$email'").'

&nbsp; Login into your dashboard using your registered<br> E-mail Address and Password by clicking on this <a style="text-decoration: underline;transition: opacity 0.1s ease-in;color: #18527c;" href="https://lekkilersa.org/Artisan_Web/Account/verify.php?vkey='.$acct_code.'" target="_blank">Link</a> </span></span>      </p>
      </div>
            </div>
            <div style="Margin-left: 20px;Margin-right: 20px;">
              <div style="mso-line-height-rule: exactly;line-height: 26px;font-size: 1px;">&nbsp;</div>
  </div>
        
        
          </div>
        <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
        </div>
      </div>
  
      <div style="line-height:20px;font-size:20px;">&nbsp;</div>
  
     
  
      <div style="line-height:25px;font-size:25px;">&nbsp;</div>
  
      
      <div style="line-height:23px;font-size:23px;">&nbsp;</div>
  
     
      <div style="line-height:37px;font-size:37px;">&nbsp;</div>
  
      <div class="layout one-col fixed-width" style="Margin: 0 auto;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;">
        <div class="layout__inner" style="border-collapse: collapse;display: table;width: 100%;background-color: #ffffff;">
        <!--[if (mso)|(IE)]><table align="center" cellpadding="0" cellspacing="0" role="presentation"><tr class="layout-fixed-width" style="background-color: #ffffff;"><td style="width: 600px" class="w560"><![endif]-->
          <div class="column" style="text-align: left;color: #8e959c;font-size: 14px;line-height: 21px;font-family: sans-serif;max-width: 600px;min-width: 320px; width: 320px;width: calc(28000% - 167400px);">
        
            <div style="Margin-left: 20px;Margin-right: 20px;">
      <div style="mso-line-height-rule: exactly;mso-text-raise: 4px;">
        <p style="Margin-top: 0;Margin-bottom: 0;font-family: raleway,trebuchet ms,avenir,segoe ui,sans-serif;text-align: center;"><span class="font-raleway"><span style="color:#8e959c">&copy; '.$mydate.' <a href="https://lekkilersa.org/Artisan_Web" style="color:#512DA8; text-decoration:none;">Artificer Hub</a>. All Rights Reserved </span></span></p>
      </div>
    </div>
        
          </div>
        <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
        </div>
      </div>
  
      <div style="line-height:27px;font-size:27px;">&nbsp;</div>
      <div style="line-height:40px;font-size:40px;"></div>
    </div></td></tr></tbody></table>';
        
        
        
        
		$to=$email;
		$subject='Artisan Registation Successful';
		$from='support@artificerhub.com';
		$headers = "From: $from\n";
		$headers .= "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		
		if(mail($to, $subject, $message, $headers)){
		    echo "<script>alert('Registration Successful')</script>";
            header('location: login.php?chk=unverified');
            mysqli_close($dbc);
            exit();
		};

?>