<?php
include('../../../check.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" media="all" href="css/main.css" />
<script src="js/jquery.js" type="text/javascript"></script>
<!--[if lt IE 7]>
<script src="js/pngfix.js" type="text/javascript"></script>
<![endif]-->
<title>Investive - Revealing the Anonymous</title>
</head>
<body>
  <div id="header_container">
	<div id="header">
	  <h1 id="logo"><a href="#">Mode</a></h1>

	  <div id="nav"> 
		<ul> 
		  <li><a href="index.php"><span>Home</span></a></li> 
 
		  <li id=""><a href="about.php"><span>About</span></a></li> 
 
		  <li><a href="login.php"><span>Login</span></a></li> 
 
		  <li><a href="services.php"><span>Services</span></a></li> 
 
		  <li><a href="contact.php"><span>Contact</span></a></li> 
		</ul> 
	  </div><br class="clear-right" /> 

	</div>
  </div>

  <div id="subheader_container">

	<div id="subheader">
	  <h2>Hacker Detection</h2>
	</div>
  </div>

  <div id="content_wrapper">
	<!-- sidebar -->

	<div id="content_right">


	</div><!-- /sidebar -->

	
	<div id="content">
	  <h3>Who do you think you are?</h3>

	<p><center><font size="3">You may have got us last time, but, we upgraded our security! Your IP has been logged, and you will be reported. Thank you [</br></br>
           <font size="3"><font color="red"><?php echo getenv('REMOTE_ADDR'); ?></font color> ]</font size></center></p>

	</div>
  </div><!-- footer -->

  <div id="footer_container">
<center>Copyright &copy; 2009-2010 / <b>HaxMe</b>, All Rights Reserved.</center>
	  </div><!-- /footer nav -->
	  <!-- copyright -->
	</div>
  </div><!-- /footer -->
</body>

</html>
