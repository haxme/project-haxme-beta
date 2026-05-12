<?php
include('../../../../check.php');
session_start();
if (isset($_POST["submit"])) {
  if ($_POST["user"] == "\' OR 1=1--" || $_POST["user"] == "\' or 1=1--" or $_POST["pass"] == "\' OR 1=1--" || $_POST["pass"] == "\' or 1=1--")
    $_SESSION["username"] = $_POST["user"];
  }
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

<?php
if (isset($_SESSION["username"])) {
     mysql_query("UPDATE hxm_members SET w3 = '1' WHERE member_id = '$memid'");
    echo 'Mission Complete! Your status has been updated, and you can now download this mission\'s source code from our database!';
} else {
?>
<form method="post"> 
 
						<dl> 
 
							<dt><label for="name">Username</label></dt> 
 
							<dd><input class="in_medium" type="text" id="name" name="user"  /></dd> 
 
							<dt><label for="mail">Password</label></dt> 
 
							<dd><input class="in_medium" type="text" id="mail" name="pass"  /></dd> 
 
							<dt><input type="submit" name="submit" value="" id="login" /></dt> 
 
						</dl> 
 
					</form> 
<?php
}
?>

							</p>



						</li>


					</ul>



				</div>

				<!-- Start sidebar -->
				<div id="sidebar">
                                        <h2>Login to Fly Panel</h2>
					<div class="neon_links"></div>

					<ul class="links_sidebar">

				        <p class="text_long">
					Welcome back to the action! To proceed to your Fly Panel, you must first login. If you do not remember your login, please check the email we sent you after your transaction, or, contact us.
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
