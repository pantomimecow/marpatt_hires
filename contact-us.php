
<?php $a = NULL;?>
<?php if (isset($_POST['send'])){
  require_once('recaptchalib.php');
  $privatekey = "6LdBnd4SAAAAALPVw2aPE2eMVc2NZSq4j95aiXP7";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    $a = '<div id="thankyouHolder" style="width:290px; float:left; padding-top:10px;"><h4>Sorry</h4><p id="thanks" style="margin-top:0px">Something went wrong with your verification.  Either try again or call 0116 2743943.</p></div>';
  } else {
/*$email_to = 'graham@justg.co.uk';*/
$email_to = 'graham@justg.co.uk, enquiries@marpatt.co.uk, mark.koeberle@googlemail.com, stef@marpatt.co.uk';
$email = $_POST['email'];
$name =$_POST['name'];
$coname =$_POST['coname'];
$streetname =$_POST['streetname'];
$address2 =$_POST['address2'];
$city =$_POST['city'];
$postcode =$_POST['postcode'];
$hear =$_POST['hear'];
$phone =$_POST['phone'];
$fax =$_POST['fax'];
$message =$_POST['message'];
if (isset($_POST['visit']) && $_POST['visit'] == 'A')
{$rep = 'I/we would like a visit from a Marpatt Representative';}
else
{$rep = 'We are ok for now and do not need a visit from a Marpatt Representative';}

if (isset($_POST['brochure']) && $_POST['brochure'] == 'B')
{$brochure = 'I/we would like to order some copies of the Marpatt Brochure.';}
else
{$brochure = 'We are ok for brochures and do not need any for now.';}

if (isset($_POST['marpattPrice']) && $_POST['marpattPrice'] == 'G')
{$marpattPrice = 'I/we would like to order some copies of the Marpatt Price Lists.';}
else
{$marpattPrice = 'We are ok for Price Lists and do not need any for now.';}	  
	  
if (isset($_POST['foundation']) && $_POST['foundation'] == 'E')
{$foundationBrochure = 'I/we would like to order some copies of the Foundation Brochure.';}
else
{$foundationBrochure = 'We are ok for brochures and do not need any for now.';}

if (isset($_POST['foundationPrice']) && $_POST['foundationPrice'] == 'F')
{$foundationPrice = 'I/we would like to order some copies of the Foundation Price List.';}
else
{$foundationPrice = 'We are ok for Foundation Price Lists and do not need any for now.';}	  
	  
/*if (isset($_POST['dvd']) && $_POST['dvd'] == 'C')
{$dvd = 'I/we would like a copy of the DVD.';}
else
{$dvd = 'We are ok for now and do not need a DVD.';}*/

if (isset($_POST['public']) && $_POST['public'] == 'D')
{$public = 'We are a member of the public and would like to be recomended a kitchen installer';}
else
{$public = 'We are a Trade Customer';}


$email_subject ="Enquiry from the website";

// Additional headers
$headers .= 'To: Graham <graham@justg.co.uk>' . "\r\n";
$headers .= 'From: Marpatt Website <website@marpatt.co.uk>' . "\r\n";

/* Next, lets build the message to add to the email */
$message= "Name: ". $name . 
"\nCompany Name: ". $coname   .
"\nStreet Name: ". $streetname   .
"\n". $address2   .
"\nCity: ". $city   .
"\nWe heard about you from: ". $hear  .
"\nPhone: ". $phone  . 
"\nFax: ". $fax  . 
"\nMessage: ". $message .
"\nVisit: ". $rep .
"\nMarpatt Brochure: ". $brochure .
"\nFoundation Brochure: ". $foundationBrochure .
"\nMarpatt Price List: ". $marpattPrice .
"\nFoundation Price List: ". $foundationPrice .	
"\nPublic: ". $public ;


/* Time to send the email */
$sent = mail($email_to, $email_subject, $message, $headers);
	if ($sent)
		{
			/*If sent direct customers to thankyou page */
			$a='<div id="thankyouHolder" style="width:290px; float:left; padding-top:10px;"><h4>Thank you</h4><p id="thanks" style="margin-top:0px;">Thank you for your enquiry a member of our team will deal with it as soon as possible and get back to you if you need us to.';
		} else {
			/* If there is an error display an error message */
			$a='<div id="thankyouHolder" style="width:290px; float:left; padding-top:10px;"><h4>Sorry</h4><p id="thanks" style="margin-top:0px">Something went wrong.  Either try again or call 0116 2743943.</p></div>';
		}}		

  }
  ?>
<?php include 'inc/_header.inc.php'; ?>
 <script type="text/javascript">
	 var RecaptchaOptions = {
		theme : 'custom'
	 };
 </script>
  <div id="main">
      	<div id="aboutColOne">
    <h2>contact <span class="normal">Marpatt</span></h2>
    <p>You can contact Marpatt either using the details below or by completitng our enquiry form on the left hand side of this page.</p>

	<p><span class="highlight">By Phone</span> : 0116 2743943</p>

	<p><span class="hightligh">By Fax</span> : 0116 2743944</p>

	<p><span class="highlight">By Email</span> : <a href="sales@marpatt.co.uk?subject=Enquiry from the website">sales@marpatt.co.uk</a></p>
	
	<p><span class="highlight">In Writing</span><br>Marpatt  ,<br>Albert House,<br>Victoria Heights Industrial Estate,<br>30 Lewisher Road Leicester<br>LE4 9LR</p>

    </div>
	  <img src="img/pic.png" width="630" height="343" id="aboutPic">
           <div id="aboutCols">
		   <div id="contactForm">
            <h3>Contact <span class="normal">form</span></h3>
			<p>Complete your details below and a member of the Marpatt team will deal with your enquiry as soon as possible.</p>
			<form action="" method="post" id="contactFormHolder">
           
				<div id="contactColOne" style="margin-right:5px; width:305px;">
				<fieldset id="details" style="height:602px;">
					<legend>Your Details</legend>
						<label for="yourName">Your Name</label>
						<input type="text" id="yourName" name="name" value="Your Name" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Your Name':this.value;" required="required" >
						<label for="yourCompany">Your Company</label>
						<input type="text" id="yourCompany" name="coname" value="Your Company Name" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Your Company Name':this.value;" >

					<label for="yourAddress">Your Address</label>
						<input type="text" id="yourAddress" name="building" value="Building Name / Number" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Building Name / Number':this.value;" >
						<input type="text" id="streetName" name="streetName" value="Street Name" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Street Name':this.value;" >
						<input type="text" id="address2" name="address2">
						<input type="text" id="city" name="city" value="City" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'City':this.value;" >
						<input type="text" id="postCode" name="postCode" value="Post Code" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Post Code':this.value;" >
					
					
				<label for="hear">Were did you hear about us?</label>
					 <select name="hear" id="hear" class="marginb10">
                                    <option selected="selected">Please Select</option>
                                    <option>KBB Review</option>
                                    <option>Bathroom and Kitchen Update</option>
                                    <option>Kitchen Journal</option>
                                    <option>Kitchen and Bathroom News</option>
                                    <option>Essential Kitchen &amp; Bathroom Business</option>
                                    <option>Kitchen Designer</option>
                                    <option>Industry Recommendation</option>
                                    <option>Sales Representative</option>
                                    <option>Exhibitions</option>
                                    <option>Internet</option>
                                    <option>Other</option>
					</select>
					
						<label for="telephone">Telephone</label>
						<input type="text" id="telephone" name="phone" value="Your Phone Number" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Your Phone Number':this.value;" >
						<label for="fax">Fax</label>
						<input type="text" id="fax" name="fax" value="Your Fax Number" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Your Fax Number':this.value;" >

					<label for="yourName">Email (this is required)</label>
						<input type="text" id="Email" name="email" value="Your Email Address" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Your Email Address':this.value;" required="required" >
						
						 
						
				</fieldset>
					
					
				</div>
				<div id="contactColTwo" style="margin-right:0px; width:305px; height:553px; margin-right:5px;">
				<fieldset style="height:602px">
				<legend>Your Message</legend>
				<textarea style="height:570px;" name="message" onclick="this.value='';" onfocus="this.select()" onblur="this.value=!this.value?'Your Message':this.value;">Your Message</textarea>
				</fieldset>
				</div>
				<div id="contactColThree" style="width:305px;">
				<fieldset>
				<legend>Other</legend>
				<label><input type="checkbox" name="visit" value="A"/> I/we would like a vist from a Marpatt representative</label>
				<label><input type="checkbox" name="brochure" value="B"/> I/we would like to order copies of the Marpatt borchure.</label>
				<label><input type="checkbox" name="marpattPrice" value="G"/> I/we would like to order copies of the Marpatt Price List.</label>
				<label><input type="checkbox" name="foundation" value="E"/> I/we would like to order copies of the Foundation borchure.</label>
           		<label><input type="checkbox" name="foundationPrice" value="F"/> I/we would like to order copies of the Foundation Price List.</label>
            	<!--<label><input type="checkbox" name="dvd" value="C"/> I/we would like to order a high resolution image DVD</label>-->
				<label><input type="checkbox" name="public" value="D"/> I/we are a member of the public and would like to be receommended a Kitchen Installer</label>
				</fieldset>
                
                <div id="recaptcha_widget">
	<h4 id="securityCheck">Security Check</h4>
    <p class="captchaWords">Enter <strong>both words</strong> below,<strong> seperated by a space</strong></p>
    <p class="captchaWords">Can&rsquo; read the words below? <a href="javascript:Recaptcha.reload()">Try different words</a> or an <a href="javascript:Recaptcha.switch_type('audio')">audio version</a>.</p>
   <div id="recaptcha_image"></div>
   <div class="recaptcha_only_if_incorrect_sol" style="color:red">Incorrect please try again</div>
   <p>Enter your text below:</p>
   <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" class="margint10" />
</div>

 <script type="text/javascript"
    src="http://www.google.com/recaptcha/api/challenge?k=6LdBnd4SAAAAAK3JTXVPXnzcq-7Y_o6YIZ8ozJav">
 </script>
 <noscript>
   <iframe src="http://www.google.com/recaptcha/api/noscript?k=6LdBnd4SAAAAAK3JTXVPXnzcq-7Y_o6YIZ8ozJav"
        height="300" width="500" frameborder="0"></iframe><br>
   <textarea name="recaptcha_challenge_field" rows="3" cols="40">
   </textarea>
   <input type="hidden" name="recaptcha_response_field"
        value="manual_challenge">
 </noscript>
                
				<input type="submit" value="SEND" id="order" name="send">
				
				</div>
                
			</form>
			<?php echo $a; ?>
			</div>
			
    </div>
	<p class="margint10 font12">Marpatt  , Albert House, Victoria Heights Industrial Estate, 30 Lewisher Road Leicester LE4 9LR t 0116 274 3943 f 0116 274 3944</p>
			<p class="margint10 font12">MARPATT   REGISTERED OFFICE ADDRESS:-72 ABBOTS RD NORTH, LEICESTER, LE5 1DB Company No. 0133583</p>
<?php include 'inc/_footer.inc.php';?>