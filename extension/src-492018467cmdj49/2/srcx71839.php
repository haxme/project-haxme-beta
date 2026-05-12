##Create a file called index.php

######################
<center>
<form method="post">
<!--Include New Logo :)--> 
<img src="novice_two/include.png">
<font size="5">Email</font size><br />
<input type="text" name="email"><br />
<font size="5">Password</font size><br />
<input type="password" name="password"><br />
<input type="submit" name="submit" value="Login">
</form>
</center>
######################

######################
<?php
if (isset($_POST["submit"])) {
  if ($_POST["email"] == "handle44@sweetmail.tld" && $_POST["password"] == "4716aaj1") {

//$query =  mysql_query("UPDATE ...");
//echo 'Victory message goes here.';
  }
}
?>
######################

//EOF