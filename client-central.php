<?php $a = NULL;?>
<?php if (isset($_POST['order'])){
$email_to = 'graham@plusone-dg.co.uk, enquiries@marpatt.co.uk, mark.koeberle@googlemail.com, stef@marpatt.co.uk';
$email = $_POST['email'];
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

// Additional headers
$headers .= 'To: Graham <graham@plusone-dg.co.uk>' . "\r\n";
$headers .= 'From: Marpatt Website <website@marpatt.co.uk>' . "\r\n";

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
$sent = mail($email_to, $email_subject, $message, $headers);
	if ($sent)
		{
			/*If sent direct customers to thankyou page */
			$a='<div id="thankyouHolder" style="width:200px; float:left; margin-left:10px; padding-top:10px;"><h4>Thank you</h4><p id="thanks" style="margin-top:0px;">Your DVD will be with you in the next few days.';
		} else {
			/* If there is an error display an error message */
			$a='<div id="thankyouHolder" style="width:200px; float:left; margin-left:10px; padding-top:10px;"><h4>Sorry</h4><p id="thanks" style="margin-top:0px">Something went wrong.  Either try again or call 0116 2743943.</p></div>';
		}}		?>



<?php include 'inc/_header.inc.php'; ?>
  <div id="main">
   	<div id="aboutColOne">
    <h2>client <span class="normal">central</span></h2>
    <p>As a customer driven company is is imperative we feel to have regular contact with our client base to give our customers the product knowledge they need to secure sales. In this section we endeavor to show
a few of the ways in which we can help our customers move forwards with our product range.

<p>Click on one of the links below</p>

<ul>
	<li><a href="leicester-showroom.php">Leicester Showroom</a></li>
	<li><a href="product-training.php">Product Training</a></li>
	<li><a href="download-centre.php">Download Centre</a></li>
	<li><a href="sales-assistance.php">Sales Assitance</a></li>
	<li><a href="software-support.php">Software Support</a></li>
</ul>
    </div>
    <img src="img/pic.png" width="630" height="343" id="aboutPic">
<div id="aboutCols">
       	<div class="colsabout">
        <h3>high <span class="normal">resolution images</span></h3>
        <p>We have just released out latest version of the high resolution images DVD which contains all the images from our latest brochure as well as many more which were not used.  When you receive your DVD you are welcome to use the images in any of your publicity and advertising work.</p>

		<p>To order your DVD then please use the order form on this page or call our sales office on 0116 2743943.</p>
		
		<p>If you would like to arrange a member of the Marpatt team to visit you to discuss your fothcoming marketing and sales plans the you can also do this by using the form or calling 0116 2743943. </p>

      </div>
           
        <div id="dvdOrderForm">
			<h4>order <span class="normal">form</span></h4>
			<p class="first">To order your High Resolution DVD then please complete your order form below and we will send your DVD out to you (this is is for TRADE CUSTOMER only)</p>
			<form action="" method="post">
				<div id="dvdColOne">
				
					<fieldset id="details">
					<legend>Your Details</legend>
						<label for="yourName">Your Name</label>
						<input type="text" id="yourName" name="name" value="Your Name" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Your Name':this.value;">
						<label for="yourCompany">Your Company</label>
						<input type="text" id="yourCompany" name="coname" value="Your Company Name" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Your Company Name':this.value;" >
					</fieldset>
				
					<fieldset id="address">
					<legend>Your Address</legend>
						<input type="text" id="yourAddress" name="building" value="Building Name / Number" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Building Name / Number':this.value;" >
						<input type="text" id="streetName" value="Street Name" name="streetName" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Street Name':this.value;" >
						<input type="text" id="address2" name="address2">
						<input type="text" id="city" value="City" name="city" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'City':this.value;" >
						<input type="text" id="postCode" value="Post Code" name="postCode" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Post Code':this.value;" >
					</fieldset>
	
			</div>
			<div id="dvdColTwo">			
				<fieldset>
				<legend>Phone Number / Email Address</legend>
					<label for="yourPhone">Your Phone Number</label>
					<input type="text" id="yourPhone" value="Your Phone Numer" name="phoneNumber" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Your Phone Number':this.value;" >
					<label for="yourEmail">Your Email Address</label>
					<input type="text" id="yourEmail" value="Your Email Address" name="emailAddress" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Your Email Address':this.value;" >
				</fieldset>
				<label id="checkrep"><input type="checkbox" name="rep" value="rep"/> I/we would like a vist from a Marpatt representative</label>
				<input type="submit" value="ORDER" id="order" name="order">
			</div>
		</form>
        <?php echo $a; ?>
               </div>
            


        	
    </div>
<?php include 'inc/_footer.inc.php';?>