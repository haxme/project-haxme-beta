<?php
include('check.php');
session_start();
$home = HOME;
if (isset($_POST["submit"])) {
 header("location:$home/novice.php?m=9&auth=fail");
}
require_once("sources/interface/template.php");
$memid = intval($_COOKIE['member_id']);
fetchtemplate();
?>

<!--- Main Box --->
<div id="rightcolumn"><div class="quicktop">HaxMe Novice Missions</div><div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">Lets Get It!</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<center>
<form method="post"> 
<label>Username</label><br />
<input type="text" name="user" /><br />
<label>Password</label><br />
<input type="text" name="pass" /><br />
<input type="submit" name="submit" value="Login" />
</form>
</center>
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->
