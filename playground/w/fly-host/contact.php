<?php
include('../../../check.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Fly Host || Premium Cloud Hosting</title>

	<link href="css/styles.css" rel="stylesheet" type="text/css" media="screen" />
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>

	<script type="text/javascript" src="scripts/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="scripts/jcarousellite_1.0.1.js"></script>

	<script type="text/javascript">

		$(function() {
   			 $(".anyClass").jCarouselLite({
       		 btnNext: ".next",
       		 btnPrev: ".prev",
       		 visible: 1
    		});
		});

	</script>

	<!--[if lte IE 6]>
	<style type="text/css" title="style" media="screen">
		@import "css/style_IE6.css";
	</style>

	<script type="text/javascript" src="scripts/pngfix.js"></script>
	<![endif]-->

</head>

<body>

		<!-- Begin of Header Image -->
		<div id="header_image"></div>
		<!-- End Of Header Image -->

		<!-- The section below is for the subcribe bar at the top of the screen -->

		<div id="subscribe_wrap">

			<ul class="items">



			</ul>

		</div>

		<!-- Logo -->
		<div id="logo"></div>
		<!-- End Of Logo -->

		<!-- Navigation -->
		<div id="nav" class="contact">

			<ul>

				<li><a href="index.php" id="home">Home</a></li>
				<li><a href="blog.php" id="blog">Blog</a></li>
				<li><a href="portfolio.php" id="portfolio">Portfolio</a></li>
				<li><a href="about.php" id="about">About Us</a></li>
				<li><a href="contact.php" id="contact">Contact</a></li>

			</ul>

		</div>

		<!-- End Of Navigation -->

		<!-- Start Of Content Frame -->
		<div id="content">

			<!-- Start of Collumns -->


			<div id="col_2">

				<div id="widecol">

					<h1 class="entry">Contact us</h1>

					<div id="contact_g">

						<p><b>Fly Host</b></p>
						<p>Fly Host Incorporated</p>
						<p>421nd Lot #2</p>
						<p>Los Angeles, CA, United States of America, 90001</p>
						<p><a href="mailto:donotreply@haxme.org" >donotreply@haxme.org</a></p>

					</div>

					<img class="img_contact" src="images/contact.jpg" alt="" />

					<div id="line"></div>

					<form action="" method="post">

						<dl>

							<dt><label for="name">NAME*</label></dt>

							<dd><input class="in_medium" type="text" id="name" name="name"  /></dd>

							<dt><label for="mail">E-MAIL*</label></dt>

							<dd><input class="in_medium" type="text" id="mail" name="mail"  /></dd>

							<dt><label for="subject">SUBJECT*</label></dt>

							<dd><input class="in_medium" type="text" id="subject" name="subject" /></dd>

							<dt><label for="message">MESSAGE*</label></dt>

							<dd><textarea name="message" cols="" rows="10" class="in_textarea"></textarea></dd>

							<dt><input id="submit" type="submit" value="" /></dt>

						</dl>

					</form>

				</div>

				<!-- Start sidebar -->
				<div id="sidebar">

					<h2>F.A.Q.</h2>
					<div class="neon_gategories"></div>
                    <ul class="links_sidebar">
					<p class="text_long">
					<b>What is my login information?</b><br/>
					<i>Your login information is automatically emailed to you after your payment has been processed. If you have forgotten your password, please, contact us.</i><br/><br/>
					<b>Where do I login at?</b><br/>
					<i>For security reasons, we do not publically announce the login panel here at Fly Host. Your admin panel is either http://yoursite.fly/admin , or, you will need to check your email for the Fly Host admin panel.</i><br/><br/>
					<b>How do I order a plan from Fly Host?</b>
					<i>Contact us via the form on this page.</i>
					</p>
                    </ul>

					<div id="spacer"></div>

				<!-- End Of Sidebar-->

			</div>

			<!-- End of Collumns -->

		<!-- End Of Content Frame -->
		</div>

		<!-- Start Of Footer -->
		<div id="footer">

			<p>Copyright 2010 - HaxMe | All Rights Reserved</p>

		</div>

		<div id="footer_shadow">achtergrond</div>

		<!-- End Of Footer -->




</body>

</html>
