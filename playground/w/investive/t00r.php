<?php
include('../../../check.php');
session_start();
if (isset($_POST["submit"])) {
  if ($_POST["user"] == "root" && $_POST["pass"] == "anonymous") {
    mysql_query("UPDATE hxm_members SET w2 = '1' WHERE member_id = '$memid'");
    $msg = 'Mission Complete! Your status has been updated, and you can now download this mission\'s source code from our database!';
    $_SESSION["rootaccess"] = $_POST["user"];
  }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" media="all" href="css/main.css" />
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
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
 
		  <li><a href="about.php"><span>About</span></a></li> 
 
		  <li id="active"><a href="login.php"><span>Login</span></a></li> 
 
		  <li><a href="services.php"><span>Services</span></a></li> 
 
		  <li><a href="contact.php"><span>Contact</span></a></li> 
		</ul> 
	  </div><br class="clear-right" /> 

	</div>
  </div>

  <div id="subheader_container">

	<div id="subheader">
	  <h2>Enter your credentials [ACP]</h2>
	</div>
  </div>

  <div id="content_wrapper">
	<!-- sidebar -->

	<div id="content_right">

	  <!-- sidebar box 1 -->

	  <div class="content_right_box2">
		<h4>Notice</h4><br />
	  <p><b>Your IP Address is</b>: <?php echo getenv('REMOTE_ADDR'); ?><br>
          <p><b>Your User Agent is</b>: <?php echo $_SERVER["HTTP_USER_AGENT"]; ?><br><br>

          <p>Your IP Address and User Agent are logged with any given login attempt. Please know, that if you try to login to an account that is not yours, we WILL hunt you down.</p>

	  </div><!-- /sidebar box 1 -->
	</div><!-- /sidebar -->
	<!-- content -->

	<div id="content">
          <center>
<?php
if (isset($_SESSION["rootaccess"])) {
  $msg = 'Mission Complete! Your status has been updated, and you can now download this mission\'s source code from our database!';
  echo $msg;
} else {
?>
<form method="post">
<font size="5">Username</font size><br /><br />
<input type="text" name="user" class="contact-input" /><br />
<font size="5">Password</font size><br /><br />
<input type="password" name="pass" class="contact-input" /><br />
<input type="submit" name="submit" value="" class="contact-submit" />
</form>
<?php
}
?>
          </center>
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
