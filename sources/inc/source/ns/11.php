<?php
include('check.php');
include_once 'sources/inc/geshi.php'; 
session_start();
require_once("sources/interface/template.php");
$mission = 'n11';
fetchtemplate();

$sql = "SELECT $mission FROM hxm_members WHERE member_id = $memid";
$result = mysql_query($sql);
$isgood = mysql_fetch_array($result);
$status = $isgood["$mission"];

//Source Code
$source = '
<!-- First, the HTML -->
<form method="post">
<font size="5">Username</font size><br />
<input type="text" name="user"><br />
<font size="5">Password</font size><br />
<input type="password" name="pass"><br /><br />
<input type="submit" name="submit" value="Login">
</form>
<!-- End -->

<?php
//Next, the PHP...
if (isset($_POST["submit"])) {
    if ($_POST["user"] == \'root\' && $_POST["pass"] == \'pass1441\') {
        //mysql query
        //$msg = 
    } else {
        //$msg =
    }
}
//End
?>

<script type="text/javascript">
//And then, some Javascript
eval(unescape("function%20ew_dc%28s%29%7Bvar%20d%3D%27%27%2Ck%3D0%2Ca%3Dnew%20Array%
28%29%2Cr%3Bfor%28i%3D0%3Bi%3Cs.length%3Bi++%29%7Bc%3Ds.charCodeAt%28i%29%3Bif%28c%
3C128%29c%5E%3D5%3Bd+%3DString.fromCharCode%28c%29%3Bif%28%28i+1%29%2599%3D%3D0%29%
7Ba%5Bk++%5D%3Dd%3Bd%3D%27%27%3B%7D%7Dr%3Da.join%28%27%27%29+d%3Bdocument.write%28r
%29%3B%7D"));

ew_dc(unescape("9lkupq%25q%7Cu%608%27mlaa%60k%27%25kdh%608%27pv%60wkdh%60%27%25sdip
%608%27wjjq%27%25mlaa%60k8%27qwp%60%27%25*%3B%25%08%0F%08%0F9lkupq%25q%7Cu%608%27m
laa%60k%27%25kdh%608%27udvvrjwa%27%25sdip%608%27udvv4114%27%25mlaa%60k8%27qwp%60%2
7%25*%3B%25"));
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
