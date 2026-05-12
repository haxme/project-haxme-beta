<?php
include('../../../../check.php');

if(isset($_COOKIE["flyauth"]))
  $auth = $_COOKIE["flyauth"]; 
else
//Whirlpool
  setcookie("flyauth","f0dbe0409334eee98cb538444de1054fa08403e6acf8b3ed926dbc11bc045ffe2df1db99a9b3485ff8cf31b646bdf66ddb20e9de058becebcc5f467ade034c19");

if($auth == "44e32b88c0976cdf368a72bc1821ddd6b47e39e9a5fba32555b298b62c03994d77a43bc365147ea2bbcca71f3cf310167b27be6d8d0ee00a1e56e5309aa3887a")
{
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

		<!-- End Of Navigation -->

		<!-- Start Of Content Frame -->
		<div id="content">

			<!-- Start of Collumns -->


			<div id="col_2">

				<div id="widecol">

					<ul class="blog_entry">

						<li>

							<h1 class="entry">Fly-Auth</h1>
							<p class="posted">POSTED ON</p>
							<p class="date">17.01.2010 BY AUTHOR FlashWh1z</p>

                            <br/>

							<p>

								<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="550" height="400" id="auth" align="middle"> 
<param name="allowScriptAccess" value="sameDomain" /> 
<param name="movie" value="auth.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><embed src="auth.swf" quality="high" bgcolor="#ffffff" width="550" height="400" name="Untitled-4" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /> 
</object> 

							</p>



						</li>


					</ul>



				</div>

				<!-- Start sidebar -->
				<div id="sidebar">
                                        <h2>What is this?</h2>
					<div class="neon_links"></div>

					<ul class="links_sidebar">

				        <p class="text_long">
					Before you can proceed to the Fly Host admin panel, you must enter in this months Fly-Auth code. If you do not know it, you can check your email; we automatically send out the updated auth-information every 1st of each month.
		                        </p>

					</ul>

				</div>
				<!-- End Of Sidebar-->

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

<?php
}
else
echo ""; 
?>
