<?php $a = NULL;?>
<?php
if (isset($_POST['password']))
{
$username = $_POST['username'];
$pass = $_POST['pass'];
$username = strtolower($username);
$pass = strtolower($pass);
if ($usernanme != 'marpattclient' && $pass != 'mowbray')

{$a = '<p style="clear:left;">Sorry that is incorrect please try again</p>';}
else
{header('Location: http://www.marpatt.co.uk/login.php');}
}
?>
<?php include 'inc/_header.inc.php'; ?>
  <div id="main">
   	<div id="aboutColOne">
    <h2>client <span class="normal">central</span></h2>
    <p>As a customer driven company is is imperative we feel to have regular contact with our client base to give our customers the product knowledge they need to secure sales. In this section we endeavor to show
a few of the ways in which we can help our customers move forwards with our product range.</p>

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
        <h3>download <span class="normal">centre</span></h3>
        <p>To access the download section of the website simply input your username and password below and click Submit. If you do not have a password and username then please <a href="contact-us.php">contact us</a>.</p>

      </div>
           
        <div id="dvdOrderForm">
			<h4>login <span class="normal">to the secure area</span></h4>
			<p class="first">To allow you to download the secure content on this site you will need to enter your username and password for this section below (this is is for TRADE CUSTOMER only)</p>
			<form action="" method="post">
				<div id="dvdColOne">
				
					<fieldset id="details">
					<legend>Your Details</legend>
						<label for="yourUserName">Your Username Name</label>
						<input type="text" id="yourUserName" value="Your User Name" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Your User Name':this.value;" name="username" >
						<label for="yourPassword">Your Password</label>
						<input type="password" id="yourPassword" name="pass">
						<input type="submit" value="SUBMIT" id="order" name="password">
					<?php echo $a; ?>
					</fieldset>
				</div>
		     
		</form>
   
		</div>
            


        	
    </div>
<?php include 'inc/_footer.inc.php';?>