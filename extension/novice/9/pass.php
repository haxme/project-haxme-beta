<?php
include('check.php');
session_start();
require_once("interface/template.php");
$memid = intval($_COOKIE['member_id']);
fetchtemplate();
$query =  mysql_query("UPDATE hxm_members SET n9 = '1' WHERE member_id = '$memid'");
?>

<!--- Main Box --->
<div id="rightcolumn"><div class="quicktop">HaxMe Novice Missions</div><div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">Lets Get It!</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<center>
Mission Complete! Your status has been updated, and you can now download this mission's source code from our database!
</center>
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->