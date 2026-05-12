<?php
include('check.php');
include_once 'sources/inc/geshi.php'; 
session_start();
require_once("sources/interface/template.php");
$mission = 'w3';
fetchtemplate();

$sql = "SELECT $mission FROM hxm_members WHERE member_id = $memid";
$result = mysql_query($sql);
$isgood = mysql_fetch_array($result);
$status = $isgood["$mission"];

//Source Code
$source = '
<?php
if(isset($_COOKIE["flyauth"]))
  $auth = $_COOKIE["flyauth"]; 
else
//Whirlpool
  setcookie("flyauth","04edb0f261bd4b3cad32e117260408fafcd0549a78cfd0
312130b072fcc2d5091b98940baab05a8d6a40c1eb727afdc3c724d50599901cfd816
8504aaaf09db5");

if($auth == "fdaeafddbcea169c998587ea4cb97572c1be1ab07d5eacbf5d011b36
cc4e06da8fad9ca6505e78f2fccb0e086e50bd435a3137e9c44f7aeb524dd85a8e765
2c5")
{
?>

<!-- HTML Template Here :) -->

<p>
<!-- Include swf object -->
</p>

<!-- End HTML Template Here :) -->

<?php
}
else
echo ""; 
?>

#auth.swf
stop();
\'For Project: HaxMe - by cwade12c\'
if(usr == "502918"){
        if(pwd == "394811"){
                geturl("login116.php");}
        }
        else
        {
                geturl("index.php");
        }

#login116.php
<?php
session_start();
if (isset($_POST["submit"])) {
  if ($_POST["user"] == "\' OR 1=1--" || $_POST["user"] == "\' or 1=1--"
  or $_POST["pass"] == "\' OR 1=1--" || $_POST["pass"] == "\' or 1=1--")
    $_SESSION["username"] = $_POST["user"];
  }
?>

<!-- HTML Template Here -->
<?php
if (isset($_SESSION["username"])) {
  //echo win
} else {
?>
<!-- Your Post Form Here -->
<?php
}
?>
<!-- End HTML Template Here -->
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
