<?php
include('check.php');

session_start();
require_once("interface/template.php");
$memid = intval($_COOKIE['member_id']);
fetchtemplate();
?>

<!--- Main Box --->
<div id="rightcolumn"><div class="quicktop">HaxMe Crypto Missions</div><div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">SQL Backup</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<center>
<p><a href="downloads/c3.sql" target="_blank">Click here to download sql backup.</a><br />
<form method="post">
<p>Password</p><br />
<input type="text" name="code"><br /><br />
<input type="submit" name="submit" value="Submit">
</form>
<br /><br />
<?php
if (isset($_POST["submit"])) {
  if ($_POST["code"] == 'poi098') {

$query =  mysql_query("UPDATE hxm_members SET c3 = '1' WHERE member_id = '$memid'");
echo '<font color="white">Mission Complete! Your status has been updated.</font color>';
  }
}
?>
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->