<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

include('check.php');

session_start();
require_once("sources/interface/template.php");
$memid = intval($_COOKIE['member_id']);
fetchtemplate();
?>

<!--- Main Box --->
<div id="rightcolumn"><div class="quicktop">HaxMe Crypto Missions</div><div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">ZIP Recovery</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<center>
<p><a href="extension/downloads/c4.zip" target="_blank">Click here to download the password protected archive.</a><br />
<form method="post">
<p>Password</p><br />
<input type="text" name="code"><br /><br />
<input type="submit" name="submit" value="Submit">
</form>
<br /><br />
<?php
if (isset($_POST["submit"])) {
  if ($_POST["code"] == 'vcb104') {

$query =  mysql_query("UPDATE hxm_members SET c4 = '1' WHERE member_id = '$memid'");
echo '<font color="white">Mission Complete! Your status has been updated.</font color>';
  }
}
?>
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->
