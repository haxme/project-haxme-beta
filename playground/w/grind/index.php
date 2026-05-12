<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
include('../../../check.php');
//by cwade12c
//We're going to get some errors if the user wins... so, lets turn them off to be nice. :-)
error_reporting(0);
//Lets set our default
$type = 'lite';
//If it's set, get it
if (isset( $_GET['dl'] ) )
//Our variable will be getting whatever our form method gets from the value of "dl"
$type = $_GET['dl'];

//Now lets tell the user they have won if they exploit the script.

//If string contains http:// (RFI exploit)
if(strstr($type,'http://')) 
{ 
$type = '4768993';
}

//Lets clean everything up, to actually prevent this exploit... for the MOST part
//$type is our variable
//str_replace will replace our string
//"http://" (example) would be what is being replaced
//"" is what we would be replacing http:// with
//$type would be our variable

$type = str_replace("http://", "", $type);
$type = str_replace("/", "", $type);
$type = str_replace("\\", "", $type);
$type = str_replace("../", "", $type);
$type = str_replace("..", "", $type);
require( $type . '.php' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Grind Services</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/sansserif.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
	<!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" /><![endif]-->

	<!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie7.css" /><![endif]-->

	<script language="javascript" type="text/javascript" src="/css/jquery.js"></script>
	<script type="text/javascript" src="js/jtabber.js"></script>
	<script type="text/javascript" src="js/cycle.js"></script>
	<script type="text/javascript" src="js/jquery.easing.js"></script>
	<script type="text/javascript" src="js/prettyPhoto.js"></script>

	<script type="text/javascript" src="js/jquery.form.js"></script>
	<script type="text/javascript">
		<!--
		$(document).ready(function(){
			// Slide Page Navigation
			$.jtabber({
				mainLinkTag: ".nav a", // much like a css selector, you must have a 'title' attribute that links to the div id name
				activeLinkClass: "selected", // class that is applied to the tab once it's clicked
				hiddenContentClass: "hiddencontent", // the class of the content you are hiding until the tab is clicked
				showDefaultTab: 1, // 1 will open the first tab, 2 will open the second etc.  null will open nothing by default
				showErrors: true, // true/false - if you want errors to be alerted to you
				effect: 'slide', // null, 'slide' or 'fade' - do you want your content to fade in or slide in?
				effectSpeed: 'medium' // 'slow', 'medium' or 'fast' - the speed of the effect
			})

			// jQuery Cycle Plugin - Homepage Display
			$('#display').cycle({ 
				fx:      'fade', 
				speed:    1500, 
				timeout:  5000 
			});

			// PrettyPhoto Image Viewer
			$("a[rel^='prettyPhoto']").prettyPhoto({
				animationSpeed: 'normal', /* fast/slow/normal */
				padding: 40, /* padding for each side of the picture */
				opacity: 0.8, /* Value betwee 0 and 1 */
				showTitle: false, /* true/false */
				allowresize: true, /* true/false */
				theme: 'light_square', /* light_rounded / dark_rounded / light_square / dark_square */
				callback: function(){}
			});

			// Contact Form
			$('#contactform').ajaxForm(function(data) {
				if (data==1){
					$('.success').fadeIn("slow");
					$('#contactform').resetForm();
				}
					else if (data==2){
					$('.badserver').fadeIn("slow");
				}
					else if (data==3)
				{
					$('.bademail').fadeIn("slow");
				}
			});
		})
		-->
	</script>
</head>
<body>
	<div id="header">
		<div class="header_container">
		<h1>Grind Services</h1>
		<div class="navigation">

			<ul class="nav">
				<li><a href="#" title="Home" class="selected">Home</a></li>
				<li><a href="#" title="About">About</a></li>
				<li><a href="#" title="Download">Download</a></li>
				<li><a href="#" title="Login">Login</a></li>
				<li><a href="#" title="Contact">Contact</a></li>
			</ul>
		</div>
		</div>
	</div>
	<div id="container">
		<div id="Home" class="hiddencontent">
			<div id="display">

				<img src="images/display/minamalistic.jpg" alt="Minimalistic" />
				<img src="images/display/freshbusiness.jpg" alt="Fresh Business" />
				<img src="images/display/surreal.jpg" alt="Surreal" />
				<img src="images/display/softbusiness.jpg" alt="Soft Business" />
				<img src="images/display/simplicity.jpg" alt="Simplicity" />
			</div>

			<div class="column1">
				<h4>Grind goes public</h4>

				<small>A new sensation</small>
				<hr />
				<p>After extensive beta testing, <i>Grind</i> finally hits the net. In an effort to help geologists get what they need to get done, grind is suitable for laptops, iPods, and BlackBerrys.</p>
			</div>
			<div class="column2">
				<h4>Perfection is here</h4>
				<small>You've been waiting for it - are you ready?</small>

				<hr />
				<p>This tool <i>should be</i> illegal. It is perfect, and is used by many professional geologists today. This state of the art toolkit is designed to help you sketch, graph, plot, mark... and all those good things. But the best part about this stunning tool is, all your data gets shared with other geologists - in one, big archive.</p>
			</div>
			<div class="column3">
				<h4>Expert ready</h4>
				<small>Taking on challenges for the next 100 years</small>
				<hr />

				<p>While our free tools are one of a kind, we offer an "Expert Release" to professionals and corporate businesses. All of the tools in our "expert" package are dynamic and raw - and each time you power up <i>Grind (Expert)</i>, you will see new content rolling in. <i>Grind (Expert)</i> is ready to take on challenges for the next 100 years... and that's only in this version.</p>
			</div>
		</div>

		<div id="About" class="hiddencontent">
			<div style="float: left;"><h1>About</h1></div>
			<div class="clearfix"></div>
			<hr />

			<img src="images/about.jpg" alt="About Us">
			<p>Grind is lead by five expert geologists - and then, approximately 212 gifted programmers. We have been working on this product for nearly 10 years, and are ready to feed the hungry geologists of the world with what they've been craving.</p>
			<img src="images/offices_small.jpg" alt="Offices" class="rightimg" />
			<h2>Worldwide</h2>
			<p>While <i>Grind</i>'s headquarters is located in Illinois, we have heavily equipped fileservers across the globe, in over 154 locations. Our fileservers are designed to interact with the <i>Grind</i> application to manage all of your files nearest your location, thanks to an included GPS repository. Needless to say, we have over 100TB of space waiting to be used up, and we are excited to offer this included service free of charge. </p>
			<h3>Employment</h3>
			<p>Right now, we are currently booked with positions - but when we have an opening, we will happily update this page.</p>

		</div>

		<div id="Download" class="hiddencontent">
			<h1>Download</h1>
			<hr />

			<div class="portfolio_item clearfix">
				
					<h2>Grind V1.0.7</h2>
					<form method="get">
   <select name="dl">
      <option value="lite">Lite Edition (5MB)</option>
      <option value="pro">Pro Edition (12MB)</option>
      <option value="expert">Expert Edition Trial (47MB)</option>
   </select>
   <input type="submit">
</form>

					<big><a href="javascript:alert('Our serverload is extremely high. Please try again in one moment.');" title="Purchase">Purchase Expert</a></big>
				</div>
		</div>

		<div id="Login" class="hiddencontent">
			<h1>Login</h1>
<i>You must login to download the latest version of <u>Grind Expert</u>. If you have recently purchased <u>Grind Expert</u>, you need to check your email address for your login info.</i>			

		<form id="login" name="member" method="post">
                <label for="emailid">Email:</label><br>
	        <input type="text" id="emailid" name="email"  /><br>
                <label for="passwordid">Password:</label><br>
                <input type="password" id="passwordid" name="password"  /><br>
                <button type="submit" name="login" value="submit">Login</button>
		</div>


		

		<div id="Contact" class="hiddencontent">

			<h1>Contact</h1>
			<hr />
			<div class="twocols_left">
				<p>If you are interested in purchasing <i>Grind Expert</i>, you will need to contact us first. You may also contact us if you have any questions / concerns.</p>
				<div class="success" style="display:none;">
					<img src="images/success.gif" alt="Your email has been sent. Thank you!" style="float:left; margin-right:15px;" />

					Your email has been sent. Thank you!
				</div>
				<div class="bademail" style="display:none;">
					<img src="images/error.gif" alt="Please enter a valid email address." style="float:left; margin-right:15px;" />
					Please enter a valid email address.
				</div>
				<div class="badserver" style="display:none;">
					<img src="images/error.gif" alt="Your email failed. Please try again later." style="float:left; margin-right:15px;" />
					Your email failed. Please try again later.
				</div>

				<div id="contact">
					<form id="contactform" name="contact" method="post">
						<label for="nameinput">Name:</label>
						<input type="text" id="nameinput" name="name"  />

						<label>Email:</label>
						<input type="text" id="emailinput" name="email" />

						<label for="messageinput">Message:</label>

						<textarea name="comment" id="messageinput" cols="0" rows="7"></textarea>

						<button type="submit" name="submit" value="Submit">Send Message</button>
					</form>
				</div>
			</div>
			<div class="twocols_right">
				<img src="images/offices.jpg" alt="Our Offices" />
				<p>We have over 300 professional employees waiting to help you / get you started. Live support is 24/7, and we will usually get back to you within 5 minutes.</p>

				<ul class="divided_list">
					<li><strong>Address:</strong> 1733 Grind Center, Chicago, IL</li>
					<li><strong>Phone:</strong> Unavailable</li>
					<li><strong>Fax:</strong> Unavailable</li>

					<li><strong>Email:</strong> donotreply@haxme.org</li>
				</ul>
			</div>
		</div>

		<div class="clearfix"></div>

		<div id="footer">
			<div style="float: left;">
				HaxMe, &copy; Copyright 2009 - 2010 - All Rights Reserved.

			</div>
			<div class="spacer"></div>
		</div>
	</div>
</body>

</html>
