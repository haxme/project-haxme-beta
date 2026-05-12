##Create a file called index.php

######################
<form method="post">
<font size="5">Email</font size><br />
<!--Email Address is: email44@domainhive.tld-->
<input type="text" name="email"><br />
<font size="5">Password</font size><br />
<!--Password is: xx4455aa-->
<input type="password" name="password"><br />
<input type="submit" name="submit" value="Login">
</form>
######################

######################
<?php
if (isset($_POST["submit"])) {
  if ($_POST["email"] == "email44@domainhive.tld" && $_POST["password"] == "xx4455aa") {

//$query =  mysql_query("UPDATE ...");
//echo 'Victory message goes here.';
  }
}
?>
######################

//EOF