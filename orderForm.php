<?php
ini_set('sendmail_from', $email); 
$email_to = "graham@plusone-dg.co.uk";
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


$email_subject ="Enquiry from the website";

$headers = 
"From: $email \n";
"Reply-To: $email \n";

/* Next, lets build the message to add to the email */
$message= "Name: ". $name . 
"\nCompany Name: ". $coname   .
"\nStreet Name: ". $streetname   .
"\n". $address2   .
"\nCity". $city   .
"\nWe heard about you from: ". $hear  .
"\nPhone: ". $phone  . 
"\nFax: ". $fax  . 
"\nMessage: ". $message ;




/* Time to send the email */
$sent = mail($email_to, $email_subject, $message, $headers, '-f .$email_from');
	if ($sent)
		{
			/*If sent direct customers to thankyou page */
			header( "Location: http://www.marpatt.co.uk/thankyou.php" ); 
		} else {
			/* If there is an error display an error message */
			echo 'There has been an error sending your comments. Please try later.'; 
		}
?>


