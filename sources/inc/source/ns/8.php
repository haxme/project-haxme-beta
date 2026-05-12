<?php
include('check.php');
include_once 'sources/inc/geshi.php'; 
session_start();
require_once("sources/interface/template.php");
$mission = 'n8';
fetchtemplate();

$sql = "SELECT $mission FROM hxm_members WHERE member_id = $memid";
$result = mysql_query($sql);
$isgood = mysql_fetch_array($result);
$status = $isgood["$mission"];

//Source Code
$source = '
<?php
DEFINE ("HOME","http://home.tld/dir");
?>

<script type="text/javascript" src="<?php echo HOME . \'/playground/n/js/loginscript\';?>"></script>
//loginscript contains the actual login credentials, everything else is FAKE
<script language="javascript"> 
HaxMeMD5Password = "fe90997af0df2f57369362fd699e107c";
HaxMeMD5Verification = "2e98ff22e1f314da6f5687a539d944d3";
function check(x)
{
<!--Be sure to include md5base.js-->
"CallMD5Check()" == "haxme"
if (x == "HaxMeMD5Password")
DecodeContents == HaxMeMD5Password
returnstring;
{
alert("Congratulations, you have successfully completed Novice Mission 8.");
DecodeContents == HaxMeMD5Verification
returnstring;
alert("HaxMeMD5Verification");
} else {
alert("Invalid password. Please try again.");
}
}
</script>
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
