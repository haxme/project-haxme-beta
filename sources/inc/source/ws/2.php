<?php
include('check.php');
include_once 'sources/inc/geshi.php'; 
session_start();
require_once("sources/interface/template.php");
$mission = 'w2';
fetchtemplate();

$sql = "SELECT $mission FROM hxm_members WHERE member_id = $memid";
$result = mysql_query($sql);
$isgood = mysql_fetch_array($result);
$status = $isgood["$mission"];

//Source Code
$source = '
<!-- The template used in this mission was coded by: killreal -->

<!-- Services -->
<p class="button_order">
<a href="contact.php?issue=personal"><img src="img/button_order.png" border="0" 
alt="Order Service" /></a>
</p>
<!-- /Services -->

#contact.php
<?php
//We\'re going to get some errors if the user wins... so, lets turn them off to be nice. :-)
error_reporting(0);
//Continuing on
$page = \'general\';
if (isset( $_GET[\'issue\'] ) )
$page = $_GET[\'issue\'];

//Now lets tell the user they have won if they exploit the script.

//If string contains ../ (LFI exploit --> passwd file)
if(strstr($page,\'../../../../etc/passwd\')) 
{ 
$page = \'etc3971115a\';
}

//If string contains ../ (LFI exploit --> shadow file)
if(strstr($page,\'../../../../etc/shadow\')) 
{ 
$page = \'shad301933\';
}

//If string contains http:// (RFI exploit)
if(strstr($page,\'http://\')) 
{ 
$page = \'hacker\';
}


//Lets clean everything up, to actually prevent this exploit... for the MOST part
//$type is our variable
//str_replace will replace our string
//"http://" (example) would be what is being replaced
//"" is what we would be replacing http:// with
//$type would be our variable

#consider this "cleanup"

$page = str_replace("http://", "", $page);
$page = str_replace("/", "", $page);
$page = str_replace("\\", "", $page);
$page = str_replace("../", "", $page);
$page = str_replace("..", "", $page);
require( $page . \'.php\' );
?>

#login.php
<?php
error_reporting(0);
$page = \'main\';
if (isset( $_GET[\'auth\'] ) )
$page = $_GET[\'auth\'];

//Now lets tell the user they have won if they exploit the script.

//If string contains ../ (LFI exploit --> passwd file)
if(strstr($page,\'../../../../etc/passwd\')) 
{ 
$page = \'etc3971115a\';
}

//If string contains ../ (LFI exploit --> shadow file)
if(strstr($page,\'../../../../etc/shadow\')) 
{ 
$page = \'shad301933\';
}

//If string contains http:// (RFI exploit)
if(strstr($page,\'http://\')) 
{ 
$page = \'hacker\';
}

#include cleanup
?>

#main.php
<?php
session_start();
if (isset($_POST["submit"])) {
  if ($_POST["user"] == "ryan1447" && $_POST["pass"] == "4829401") {
    $_SESSION["ryan1447"] = $_POST["user"];
  }
}
?>

#t00r.php
<?php
session_start();
if (isset($_POST["submit"])) {
  if ($_POST["user"] == "root" && $_POST["pass"] == "anonymous") {
    $_SESSION["rootaccess"] = $_POST["user"];
  }
}
?>

<!--Continuing On-->

<?php
if (isset($_SESSION["rootaccess"])) {
  echo("<h3>Verification code: ...</h3>");
} else { //Code for else... :)
?>

#And for educational purposes...

#1. Logging an IP
$Log = "yourhaxmeIPlog.txt";
$fh = fopen($Log \'w\');

#2. Echoing an IP
$haxmeip= $REMOTE_ADDR;
echo $haxmeip;
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
