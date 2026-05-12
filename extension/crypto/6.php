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
<div class="name">Dead On</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<center>
<p>17AC53D1CFB9A450<br />
4EA8DC2C50467456</p><br />
<form method="post">
<p>Password</p><br />
<input type="text" name="code"><br /><br />
<input type="submit" name="submit" value="Submit">
</form>
<br /><br />
<?php
if (isset($_POST["submit"])) {
  if ($_POST["code"] == 'inspirational44') {

$query =  mysql_query("UPDATE hxm_members SET c6 = '1' WHERE member_id = '$memid'");
echo '<font color="white">Mission Complete! Your status has been updated.</font color>';
  }
}
?>
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->