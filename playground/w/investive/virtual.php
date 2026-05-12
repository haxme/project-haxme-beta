<?php
include('../../../check.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" media="all" href="css/main.css" />
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.form.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">

	$(document).ready(function() {
		$('#contact-form').ajaxForm({
			target: '#formfeedback',
			success: function() {
			$('#formfeedback').fadeIn('slow');
			}
		});
	});

</script>
<!--[if lt IE 7]>
<script src="js/pngfix.js" type="text/javascript"></script>
<![endif]-->
<title>Investive - Revealing the Anonymous</title>
</head>
<body>
  <!-- header -->

  <div id="header_container">
	<div id="header">
	  <!-- logo -->

	  <h1 id="logo"><a href="#">Mode</a></h1><!-- /logo -->
	  <!-- nav -->

	 <div id="nav"> 
		<ul> 
		  <li><a href="index.php"><span>Home</span></a></li> 
 
		  <li><a href="about.php"><span>About</span></a></li> 
 
		  <li><a href="login.php"><span>Login</span></a></li> 
 
		  <li><a href="services.php"><span>Services</span></a></li> 
 
		  <li id="active"><a href="contact.php"><span>Contact</span></a></li> 
		</ul> 
	  </div><br class="clear-right" /> 
	</div>
  </div><!-- /header -->
  
  <div id="subheader_container">
	<div id="subheader">

	  <h2>Contact Us</h2>
	</div>
  </div>

  <div id="content_wrapper">
	<!-- sidebar -->

	<div id="content_right">
	 
        <!-- Under construction. :) -->
	 
	</div>
	<!-- content -->

	<div id="content">

	  <h3>We're here to help</h3>

	  <h6>Contact us today to get a quote, or additional information about what we can do for you.</h6>

	  <p>We are here to help, and have representatives standing by to answers your questions, and work with you today. What are you waiting for? Fill the form out below.</p>
	  <!-- contact form -->
          <div id="formfeedback"></div>
	  <form method="post">
          <font size="5">Title</font size><br /><br />
          <input type="text" name="user" class="contact-input" value="Virtual Quote" /><br />
          <font size="5">Email</font size><br /><br />
          <input type="password" name="pass" class="contact-input" /><br />
          <input type="submit" name="submit" value="" class="contact-submit" />
          </form>
          </div>

          <!-- /content -->
  </div><!-- footer -->

  <div id="footer_container">
<center>Copyright &copy; 2009-2010 / <b>HaxMe</b>, All Rights Reserved.</center>
	  </div><!-- /footer nav -->
	  <!-- copyright -->
	</div>
  </div><!-- /footer -->
</body>
</html>
