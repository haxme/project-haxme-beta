<?php
include('check.php');
include_once 'sources/inc/geshi.php'; 
session_start();
require_once("sources/interface/template.php");
$query =  mysql_query("SELECT * FROM hxm_members WHERE member_id = '$memid'");
$row = mysql_fetch_array($query);
$tname = $row['tname'];
$query2 =  mysql_query("SELECT members_display_name FROM `hxm_members` WHERE tname = '$tname' AND tassignment = 3");
$row2 = mysql_fetch_array($query2);
fetchtemplate();

?>

<!--- Main Box --->
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="css/jquery.js"></script>
<script type="text/javascript" src="css/thickbox.js"></script>
<div id="rightcolumn"><div class="quicktop">HaxMe Team Missions</div><div

class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">Team Challenge #1</div></div>
<br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
The goal of the mission is to gain administrative access to the login panel which has been assigned to the user <br />[<?php echo $row2['members_display_name']; ?>] of your team. Each member of the team has been assigned a directory which is exploitable, no need to go crawling.
Communicate with your team mates and help each other with assignments.
<br /><br />
<hr />
<br /><br />

<center>
<?php
if($row['tassignment'] == '1') {
?>
<a href="playground/t/challenge-1/cgi-bin">Click here to begin.</a>
<?php
} if($row['tassignment'] == '2') {
?>
<a href="playground/t/challenge-1/backups">Click here to begin.</a>
<?php
} if($row['tassignment'] == '3') {
?>
<a href="playground/t/challenge-1/admin">Click here to begin.</a>
<?php
}
?>
</center>

</span></div><br/>
</div><div class="space2"></div>
