<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>HashMonster</title>

<link rel="stylesheet" href="sources/style/main.css" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<!--[if lte IE 7]>
<script src="js/IE8.js" type="text/javascript"></script><![endif]-->

<!--[if lt IE 7]>
<link rel="stylesheet" type="text/css" media="all" href="sources/css/ie6.css"/>
<![endif]-->
</head>

<body>

<!-- Begin Wrapper -->
<div id="wrapper">

<!-- Begin Header -->
<div id="header"> 
<div id="navigation">
<a href="index.php">Home</a>
<a href="index.php?p=register">Register</a>
</div>
<div id="login">
<form method="POST">
<input type="text" id="usr" name="usr" value="Username" />
<input type="password" id="pass" name="pass" value="Password" />
<br />
<input type="submit" id="loginbutton" name="login" value="Login" />
</form>
</div>
</div>
<!-- End Header -->

<!-- Begin Main -->
<div id="main">
<div id="about">
<p class="style">HashMonster is more than just another reversing database. Through our public interface, you can lookup 3 different hash-types against billions of generated hashes scattered across 7 of the web's most popular databases. That - and we've got our own growing collection as well. We support a powerful API so you can build applications based off of our system, we offer exclusive web interface tools to attack over 12 hash types (login required), and we offer downloadable rainbowtables if you wish to do your own cracking.</p>
</div>
<div id="nom">
<form method="POST">
<select name="nomtype" id="nomtype"> 
<option value="md5">MD5</option> 
<option value="sha1">SHA1</option> 
<option value="lm">LM</option> 
</select>
<input type="text" id="nomput">
<input type="submit" value="Reverse" id="reverse"> 
</form>
</div>
</div>
<!-- End Main -->

</div>
<!-- End Wrapper -->

</body>
</html>
