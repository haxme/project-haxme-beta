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
<div class="name">What's your email?</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<form method="post">
<font size="5">Password</font size><br />
<input type="password" name="password"><br />
<input type="submit" name="submit" value="Login">
</form>
<br /><br />
<form method="post" action="">
<tr><td colspan=2><strong>Forgot your password?</strong></td></tr>
<tr><td></td><td><input size=25 type="hidden" name="forgot" value="local"></td></tr>
<tr><td colspan=2><input type=submit name="pwreminder" value="Click Here"></td></tr>
</table>
</form>
<?php
if (isset($_POST["submit"])) {
  if ($_POST["password"] == "sAx391lAAxz") {

$query =  mysql_query("UPDATE hxm_members SET n4 = '1' WHERE member_id = '$memid'");
echo '<font color="white">Mission Complete! Your status has been updated, and you can now download this mission\'s source code from our database!</font color>';
  }
}

if (isset($_POST["forgot"])) {
        echo "Dear administrator, your password is: sAx391lAAxz";
        }

?>
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->
