<?php
include('check.php');
include_once 'sources/inc/geshi.php'; 
session_start();
require_once("sources/interface/template.php");
$mission = 'n4';
fetchtemplate();

$sql = "SELECT $mission FROM hxm_members WHERE member_id = $memid";
$result = mysql_query($sql);
$isgood = mysql_fetch_array($result);
$status = $isgood["$mission"];

//Source Code
$source = '
<form method="post">
<font size="5">Password</font size><br />
<input type="password" name="password"><br />
<input type="submit" name="submit" value="Login">
</form>

<form method="post" action="">
Forgot your password?
<input size=25 type="hidden" name="forgot" value="donotreply@haxme.org">
<input type=submit name="pwreminder" value="Click Here">
</form>

<?php
if (isset($_POST["submit"])) {
  if ($_POST["password"] == "sAx391lAAxz") {

//mysql query
//echo
  }
}

//Google: phpgmailer
if (isset($_POST["forgot"])) {
$emailcontainer = $_POST[\'forgot\'];
require_once(\'class.phpgmailer.php\');
$mail = new PHPGMailer();
$mail->Username = \'email@gmail.com\';
$mail->Password = \'password\';
$mail->From = \'email2@gmail.com\';
$mail->FromName = \'HaxMe\';
$mail->Subject = \'HaxMe || Novice Mission 4\';
$mail->AddAddress($emailcontainer);
$mail->Body = "Dear administrator, your password is: sAx391lAAxz";
$mail->Send();
echo "An email has been dispatched to the administrator\'s account.";
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
