<?php
include('check.php');
include_once 'sources/inc/geshi.php'; 
session_start();
require_once("sources/interface/template.php");
$mission = 'n1';
fetchtemplate();

$sql = "SELECT $mission FROM hxm_members WHERE member_id = $memid";
$result = mysql_query($sql);
$isgood = mysql_fetch_array($result);
$status = $isgood["$mission"];

//Source Code
$source = '
<form method="post">
<font size="5">Email</font size><br />
<!--Email Address is: email44@domainhive.tld-->
<input type="text" name="email"><br />
<font size="5">Password</font size><br />
<!--Password is: xx4455aa-->
<input type="password" name="password"><br /><br />
<input type="submit" name="submit" value="Login">
</form>

<?php
if (isset($_POST["submit"])) {
  if ($_POST["email"] == "email44@domainhive.tld" && $_POST["password"] == "xx4455aa") {

//mysql query
//echo
  }
}
?>
';

$language = 'php';

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
