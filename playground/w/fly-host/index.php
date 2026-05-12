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
		<div id="nav" class="home">

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


			<!-- Start Of Showcase -->
			<button class="prev"></button>
			<button class="next"></button>

			<div class="anyClass">
   				 <ul>
       				<li>
       					<h1 class="showcase"><a href="about.php">2,500 sites - 5,000 servers.</a></h1>
       					<div class="shine"></div>
       					<img src="images/01.jpg" alt="" width="950" height="299" />
       				</li>
       				<li>
       					<h1 class="showcase"><a href="about.php">5 million visiters / server ready.</a></h1>
       					<div class="shine"></div>
       					<img src="images/02.jpg" alt="" width="950" height="299" />
       				</li>
       				<li>
       					<h1 class="showcase"><a href="about.php">Fly's 100TB datacenter.</a></h1>
       					<div class="shine"></div>
       					<img src="images/03.jpg" alt="" width="950" height="299" />
       				</li>
       				<li>
       					<h1 class="showcase"><a href="about.php">Custom control panel + root access.</a></h1>
       					<div class="shine"></div>
       					<img src="images/04.jpg" alt="" width="950" height="299" />
       				</li>
    			</ul>
			</div>

			<!-- End Of Showcase -->

			<!-- Start of Collumns -->

			<div id="content_shadow"></div>

			<div id="col_wrapper">

				<div id="col1">

					<h2>Fly updates</h2>
					<div class="neon_posts"></div>

					<ul class="recent_posts">

						<li>

							<img src="images/post_01.jpg" width="60" height="60" alt="" />
							<h3><a href="#">Mac OS X Server </a></h3>
							<p>Fly Host is now supporting Mac OS X Server. Video streaming, WebDAV publishing, Multiple websites. Yum.</p>

						</li>

						<li>

							<img src="images/post_02.jpg" width="60" height="60" alt="" />
							<h3><a href="#">PSD Public</a></h3>
							<p>You can now embed PSD image files on your site as if they were jpg files, thanks to our newly installed 'PSD Public' module.</p>

						</li>

					</ul>

				</div>


				<div id="col2">

					<h2>Server gallery</h2>
					<div class="neon_flickr"></div>

					<ul class="flickr_gallery">

						<li><a href="#"><img src="images/01.jpg" width="60" height="60" alt="" /></a></li>
						<li><a href="#"><img src="images/flickr_02.jpg" width="60" height="60" alt="" /></a></li>
						<li><a href="#"><img src="images/flickr_03.jpg" width="60" height="60" alt="" /></a></li>
						<li><a href="#"><img src="images/flickr_04.jpg" width="60" height="60" alt="" /></a></li>
						<li><a href="#"><img src="images/flickr_05.jpg" width="60" height="60" alt="" /></a></li>
						<li><a href="#"><img src="images/flickr_06.jpg" width="60" height="60" alt="" /></a></li>
						<li><a href="#"><img src="images/flickr_07.jpg" width="60" height="60" alt="" /></a></li>
						<li><a href="#"><img src="images/flickr_08.jpg" width="60" height="60" alt="" /></a></li>
						<li><a href="#"><img src="images/flickr_09.jpg" width="60" height="60" alt="" /></a></li>

					</ul>

				</div>

				<div id="col3">

					<h2>Advertise with Fly Host</h2>
					<div class="neon_links"></div>

					<ul class="links">

						<li><a href="#"><img src="images/links_04.jpg" width="125" height="125" alt="" /></a></li>
						<li><a href="#"><img src="images/links_04.jpg" width="125" height="125" alt="" /></a></li>
						<li><a href="#"><img src="images/links_04.jpg" width="125" height="125" alt="" /></a></li>
						<li><a href="#"><img src="images/links_04.jpg" width="125" height="125" alt="" /></a></li>

					</ul>

				</div>

			</div>

			<!-- End of Collumns -->

		<!-- End Of Content Frame -->
		</div>

		<!-- Start Of Footer -->
		<div id="footer">

			<p>Copyright 2010 - HaxMe | All Rights Reserved</p>

		</div>

		<div id="footer_shadow"></div>

		<!-- End Of Footer -->




</body>

</html>
