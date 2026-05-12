<?php
include('check.php');

session_start();
require_once("interface/template.php");
$memid = intval($_COOKIE['member_id']);
fetchtemplate();
?>

<!--- Main Box --->
<div id="rightcolumn"><div class="quicktop">HaxMe Novice Missions</div><div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">PlainSRC Password</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<form method="post">
<font size="5">Email</font size><br />
<!--Email Address is: email44@domainhive.tld-->
<input type="text" name="email"><br />
<font size="5">Password</font size><br />
<!--Password is: xx4455aa-->
<input type="password" name="password"><br /><br />
<input type="submit" name="submit" value="Login">
</form>
<br /><br />
<?php
if (isset($_POST["submit"])) {
  if ($_POST["email"] == "email44@domainhive.tld" && $_POST["password"] == "xx4455aa") {

$query =  mysql_query("UPDATE hxm_members SET n1 = '1' WHERE member_id = '$memid'");
echo '<font color="white">Mission Complete! Your status has been updated, and you can now download this mission\'s source code from our database!</font color>';
  }
}
?>
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->