<?php
include('check.php');
include_once 'sources/inc/geshi.php'; 
session_start();
require_once("sources/interface/template.php");
$mission = 'n3';
fetchtemplate();

$sql = "SELECT $mission FROM hxm_members WHERE member_id = $memid";
$result = mysql_query($sql);
$isgood = mysql_fetch_array($result);
$status = $isgood["$mission"];

//Source Code
$source = '
<center>
<script language="Javascript">
CallPassword = "Javascript";
      function check (x) {
        if (x == CallPassword)
        {
          alert("Congratulations, you have successfully completed Novice Mission 3.");
          window.location=unescape(\'unescape\');
          //If we have completed the mission, redirect to a PHP file 
          //which will set off a mysql query to update the status
        }
        else {
          alert("Invalid password. Please try again.");
        }
}
</script>
<h3>Please Provide Password</h3>
<p>Please provide the administrative password to continue.</p>
<p><b>Password:</b><br />
<input type="password" id="pass" value="">
<br /> <br />
<button onclick="javascript:check(document.getElementById(\'pass\').value)">Login<br />
</button>
';

$language = 'javascript';

//End Source Code

$geshi = new GeSHi($source, $language);
?>

<!--- Main Box --->
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="css/jquery.js"></script>
<script type="text/javascript" src="css/thickbox.js"></script>
<div id="rightcolumn"><div class="quicktop">HaxMe Mission Source Code</div><div

class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">Mission Source</div></div>
<br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">

<?php
if ($status == '1') {
echo $geshi->parse_code();
} else {
echo '<center>You have not yet completed this mission.</center>';
}
?>

</span></div><br/>
</div><div class="space2"></div>
