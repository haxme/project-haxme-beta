<?php
include('check.php');
include_once 'sources/inc/geshi.php'; 
session_start();
require_once("sources/interface/template.php");
$mission = 'w1';
fetchtemplate();

$sql = "SELECT $mission FROM hxm_members WHERE member_id = $memid";
$result = mysql_query($sql);
$isgood = mysql_fetch_array($result);
$status = $isgood["$mission"];

//Source Code
$source = '
<?php
//We\'re going to get some errors if the user wins... so, lets turn them off to be nice. :-)
error_reporting(0);
//Lets set our default
$type = \'lite\';
//If it\'s set, get it
if (isset( $_GET[\'dl\'] ) )
//Our variable will be getting whatever our form method gets from the value of "dl"
$type = $_GET[\'dl\'];

//Now lets tell the user they have won if they exploit the script.

//If string contains http:// (RFI exploit)
if(strstr($type,\'http://\')) 
{ 
$type = \'4768993\';
}

//Lets clean everything up, to actually prevent this exploit... for the MOST part
//$type is our variable
//str_replace will replace our string
//"http://" (example) would be what is being replaced
//"" is what we would be replacing http:// with
//$type would be our variable

$type = str_replace("http://", "", $type);
$type = str_replace("/", "", $type);
$type = str_replace("\\", "", $type);
$type = str_replace("../", "", $type);
$type = str_replace("..", "", $type);
require( $type . \'.php\' );
?>

<form method="get">
   <select name="dl">
      <option value="lite">Lite Edition (5MB)</option>
      <option value="pro">Pro Edition (12MB)</option>
      <option value="expert">Expert Edition Trial (47MB)</option>
   </select>
   <input type="submit">
</form>
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
