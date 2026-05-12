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
<div class="name">Looking for "Gold"</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<?php
$ip = getenv('REMOTE_ADDR');
$checkua = $_SERVER['HTTP_USER_AGENT'];
If ($checkua=="Gold") {
mysql_query("UPDATE hxm_members SET n5 = '1' WHERE member_id = '$memid'");
$win = 'Mission Complete! Your status has been updated, and you can now download this mission\'s source code from our database!'
?>
<center><h1>Welcome back to the admin panel!</h1></center><br />
<?php
echo $win;
echo "<br /><br />";
echo "Your IP Address is: <b>$ip</b>";
echo "<br />";
echo "Your User Agent is: <b>$checkua</b>";
echo "<br />";
}
else {
?>
<center><h1>Welcome back to the admin panel!</h1></center><br />
You do not have sufficient rights to access this page. Error: <i>User agent is not Gold. Access denied!</i><br /><br />
<?php
echo "Your IP Address is: <b>$ip</b>";
echo "<br />";
echo "Your User Agent is: <b>$checkua</b>";
echo "<br />";
}
?>
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->

