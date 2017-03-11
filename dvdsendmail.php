<?php $a = NULL;?>
<?php if (isset($_POST['order'])){
ini_set('sendmail_from', $email); 
$email_to = "graham@plusone-dg.co.uk";
$name =$_POST['name'];
$coname =$_POST['coname'];
$streetname =$_POST['streetName'];
$address2 =$_POST['address2'];
$city =$_POST['city'];
$postcode =$_POST['postCode'];
$phone =$_POST['phoneNumber'];
if (isset($_POST['rep']) && $_POST['rep'] == 'rep')
{$rep = 'I/we would like a visit from a Marpatt Representative';}
else
{$rep = 'We are ok for now and do not need a visit from a Marpatt Representative';}
$email =$_POST['emailAddress'];

$email_subject ="DVD Order Form";

$headers = 
"From: $email \n";
"Reply-To: $email \n";

/* Next, lets build the message to add to the email */
$message= "Name: ". $name . 
"\nCompany Name: ". $coname   .
"\nStreet Name: ". $streetname   .
"\n". $address2   .
"\nCity: ". $city   .
"\nPostCode". $postcode   .
"\nPhone: ". $phone  . 
"\nFax: ". $email .
"\nRep Visit: :". $rep;



/* Time to send the email */
$sent = mail($email_to, $email_subject, $message, $headers, '-f .$email_from');
	if ($sent)
		{
			/*If sent direct customers to thankyou page */
			$a='<div id="thankyouHolder"><h4>Thank you</h4><p id="thanks">Your DVD will be with you in the next few days.';
		} else {
			/* If there is an error display an error message */
			$a='<div id="thankyouHolder"><h4>Sorry</h4><p id="thanks">Something went wrong.  Either try again or call 0116 2743943.</p></div>';
		}}		?>


