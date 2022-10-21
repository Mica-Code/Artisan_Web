<?
if(isset($_POST['save'])){
	//include database connection file
	include('includes/mydatabase2.php');

	//Trrim all the incoming data
	$trimmed=array_map('trim', $_POST);
	
	//Assumed invalid values
	$fname=$lname=$uname=$country=$tel=$email=FALSE;
	
	/* Initiate the error array */
	$errors=array();
    $postData = $_POST; 
	
	if(empty($trimmed['fname'])){
	 $errors[] = "Please fill in your Fullname.";
 }
 elseif(!preg_match('/^[a-zA-Z][a-zA-Z ]*$/',$trimmed['fname'])){
	$errors[]='The Full name field allow alphabets only.';
}
 else{
	$fname = mysqli_real_escape_string($dbc, $trimmed['fname']); 
 }

 /*validate email_address field*/
  if(!empty($trimmed['email'])){
	 if(preg_match('/^[\w.-]+@[\w.-]+\.[A-Za-z]{2,6}$/',$trimmed['email'])){
	 $email=mysqli_real_escape_string($dbc, $trimmed['email']);
 }else
 {
	$errors[]='Invalid Email Address Format.';
}
}
else
{
	$errors[]='Please fill in your Email Address.';
}
 
 /*validate tel field*/
 if(empty($trimmed['tel'])){
	 $errors[] = "Please fill in your Telephone Number.";
 }
	 else{
		$tel = mysqli_real_escape_string($dbc, $trimmed['tel']);
	 }
 

if(empty($trimmed['country'])){
	$errors[]='Please select your country.';
}
else
{
	$country=mysqli_real_escape_string($dbc,$trimmed['country']);

}
if(empty($trimmed['uname'])){
	$errors[]='Please fill in your username.';
}
else
{
	$uname=mysqli_real_escape_string($dbc,$trimmed['uname']);
}

if(empty($trimmed['pass'])){
	$errors[]='Please fill in your password.';
}
elseif(strlen($trimmed['pass']) < 8){
    $errors[] = 'Password must be at least 8 characters.';
}
elseif(empty($trimmed['pass2'])){
    $errors[] = 'Please fill in your confirmation password.';
}
elseif($trimmed['pass'] != $trimmed['pass2']){
    $errors[] = 'Password mismatch.';
}
else
{
	$pass=mysqli_real_escape_string($dbc,$trimmed['pass']);
}


//Make sure the email is available
$q="SELECT email_address FROM chain_users_digital WHERE email_address='$email'";
$r=@mysqli_query($dbc,$q);

$sql="SELECT tel FROM chain_users_digital WHERE tel='$tel'";
$query=@mysqli_query($dbc,$sql);

$q2="SELECT username FROM chain_users_digital WHERE username='$uname'";
$query2=@mysqli_query($dbc,$q2);
if(mysqli_num_rows($r)>0){
$errors[]='The provided email address is currently in use by another user.';
}

elseif(mysqli_num_rows($query)>0){
$errors[]='The provided telephone no is currently in use by another user.';
}
elseif(mysqli_num_rows($query2)>0){
$errors[]='The provided username is currently in use by another user.';
}
else{
	echo'';	
}

if(empty($errors)){//If everything's OK.
  $referral_code = substr(md5(uniqid(rand(),true)),3,10); 
$token=sha1(uniqid(rand(),true));
$code=rand(100000,999999);
$q="INSERT INTO chain_users_digital(fname,username,pass,email_address,country,tel,token,date_registered,referral_code,activation_code,isActivated, with_otp,plan_expire, profit_email)
VALUES('$fname','$uname',sha1('$pass'),'$email','$country','$tel','$token',NOW(),'$referral_code','$code',DEFAULT, DEFAULT, DEFAULT, DEFAULT)";
$r=@mysqli_query($dbc,$q);
if(mysqli_affected_rows($dbc)==1){//If it 
	$to = "$email";			 
    $from="support@chainsius.com";
    $subject='Verify Email Address';
    $mydate=date('Y');
    $message = str_replace(
        array('%token%', '%email%', '%code%', '%mydate%'),
        array( $token, $email, $code, $mydate),
        file_get_contents('email-verify.php')
		);
		
    $headers = "From: $from\n";
    $headers .= "MIME-Version: 1.0\n";  
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
		mail($to, $subject, $message, $headers);
        

        $q = "SELECT * FROM chain_users_digital WHERE email_address='$email' AND pass=SHA1('$pass') LIMIT 1";
        $r = mysqli_query($dbc, $q);
        if(!$r){

        echo'Query failed while fetching data';
        exit();
        }
		if(mysqli_num_rows($r) == 1){//if a result could be returned
            //fetch values from database
            $row = mysqli_fetch_array($r, MYSQLI_ASSOC);
            $user_id = $row['user_id'];
            $token = $row['token'];
            
            //store the values in a session
            $_SESSION['user_id'] = $user_id;
            $_SESSION['token'] = $token;
            $_SESSION['user_agent'] = md5($_SERVER['HTTP_USER_AGENT']);

                    ob_end_clean();
                header('Location:verify-email.php');
        

                
        }//end of mysqli_num_rows($r)
        else{
       
         
         echo'<div class="alert alert-danger">
    <button type="button" class="text-white close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <ul>
 <li>The details you provided does not match any account in our system.</li>
                                    </ul>

                                    </div>
         ';
    
    }
exit();//Stop the page';


}
else{
	echo'<div class="alert alert-danger">
    <button type="button" class="text-white close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <ul>
 <li>Your registration could not be successful due to some system errors,kindly try again later.</li>
                                    </ul>

                                    </div>';
   

}

}
else{		


echo' <div class="alert alert-danger">
<button type="button" class="text-white close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
<p style="font-size:16px; color:black;">The following error(s) occurred:<br/></p><p style="font-size:16px;">';
foreach($errors as $msg){
echo'<ul>
 <li>'. $msg.'</li>
                                    </ul>';

}
echo'</div>';
}
}//End of the main submit conditional
?>	