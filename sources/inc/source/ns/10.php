<?php
include('check.php');
include_once 'sources/inc/geshi.php'; 
session_start();
require_once("sources/interface/template.php");
$mission = 'n10';
fetchtemplate();

$sql = "SELECT $mission FROM hxm_members WHERE member_id = $memid";
$result = mysql_query($sql);
$isgood = mysql_fetch_array($result);
$status = $isgood["$mission"];

//Source Code
$source = '
<?php
DEFINE ("HOME","http://home.tld");
?>

<script type="text/javascript" src="<?php echo HOME . \'/playground/n/js/loginscript\';?>"></script> 
<script language="javascript">						
CallPassword = "\u0069\u0072\u0030\u006E\u0032\u006B\u0064\u0061\u0063\u0063\u0061";
function check(x)
{
        "+CallPassword+" == "password:4938133"
	if (x == ""+CallPassword+"")
        {
		alert("Congratulations, you have successfully completed Novice Mission 10.");
              
                window.location = "\u0062\...";
        } else {
		alert("Invalid password. Please try again.");
	}
}
</script>
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
