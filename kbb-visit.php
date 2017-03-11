
<?php $a = NULL;?>
<?php if (isset($_GET['send'])){
$email_to = 'graham@plusone-dg.co.uk, richard@marpatt.co.uk, mark.koeberle@virgin.net';
$name = $_GET['yourName'];
$company =$_GET['yourCompany'];
$email =$_POST['yourEmail'];
$yourPhone =$_GET['yourPhone'];
$numberOfPeople =$_GET['peopleNumber'];
$rep =$_GET['dayAttending'];

$email_subject ="We would like to visit during the KBB Exhibition";

// Additional headers
$headers .= 'To: Marpatt <richard@marpatt.co.uk>' . "\r\n";
$headers .= 'From: Marpatt Website <website@marpatt.co.uk>' . "\r\n";

/* Next, lets build the message to add to the email */
$message= "Name: ". $name . 
"\nCompany Name: ". $company   .
"\nYour Email Address: ". $email   .
"\nYour Phone Number: ". $yourPhone  .
"\nNumber of People Attending ". $peopleNumber  . 
"\nDay of Visit: ". $rep ;


/* Time to send the email */
$sent = mail($email_to, $email_subject, $message, $headers);
	if ($sent)
		{
			/*If sent direct customers to thankyou page */
			$a='<div id="thankyouHolder" style="width:150px; padding-top:10px;"><h4>Thank you</h4><p id="thanks" style="margin-top:0px;">Thank you for booking your place with us a member of our team will be in touch to finalise the details.';
		} else {
			/* If there is an error display an error message */
			$a='<div id="thankyouHolder" style="width:150px; padding-top:10px;"><h4>Sorry</h4><p id="thanks" style="margin-top:0px">Something went wrong.  Either try again or call 0116 2743943.</p></div>';
		}}; ?>		




<?php include 'inc/_header.inc.php'; ?>
 <script type="text/javascript">
	 var RecaptchaOptions = {
		theme : 'custom'
	 };
 </script>
  	<div id="main">
      	<div id="aboutColOne">
		    <h2>kbb <span class="normal">Exhibition</span></h2>
		    <p>If you would like to visit Marpatt while you are attending the KBB Exhibition then simply complete the form on this page, stating how many will be in your party as well as your preferred day to attend.  We will then get in touch to discuss the precise details of your visit.</p>

		    <p>Shoud you have any further questions with regards to your visit or any other Marpatt issue then please do not hesitate to <a href="contact-us.php">contact us</a>.</p>
		</div>

		<div class = "form-holder">
			<h2>Book a Visit</h2>
			<form method="GET" action="">
				<div class="book-col">
					<label>Your Name</label>
					<input type="text" name="yourName">
					<label>Your Company</label>
					<input type="text" name="yourCompany">
					<label>Your Email</label>
					<input type="text" name="yourEmail">
					<label>Your Phone Number</label>
					<input type="text" name="yourPhone">
				</div>
				<div class="book-col">
					<label>How Many People in your party</label>
					<select name="peopleNumber">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">4+</option>
					</select>
					<label>What day would you like to visit?</label>
					<div class="day-holder">
					<select name="dayAttending">
						<option>Please select a day</option>
						<option value="Sunday">Sunday 2nd</option>
						<option value="Monday">Monday 3rd</option>
						<option value="Tuesday">Tuesday 4th</option>
						<option value="Wednesday">Wednesday 5th</option>
					</select>
					</div>
					<input type="submit" value="Submit" name="send">
					<?php echo $a;?>
				</div>
			</form>


	  
           
			
			
			</div>
			
    </div>
	

<?php include 'inc/_footer.inc.php';?>