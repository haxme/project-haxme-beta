<?php
include('check.php');
include_once 'sources/inc/geshi.php'; 
session_start();
require_once("sources/interface/template.php");
$mission = 'n15';
fetchtemplate();

$sql = "SELECT $mission FROM hxm_members WHERE member_id = $memid";
$result = mysql_query($sql);
$isgood = mysql_fetch_array($result);
$status = $isgood["$mission"];

//Source Code
$source = '
<?php
if(isset($_POST[\'submit\'])) {
$exec = stripslashes($_POST[\'exec\']);

if(strstr($exec,\'echo\')) {
$msg = "Hello world.<br />&#60;&#63;php echo \'Hello world.\'; ?>";
}

if(strstr($exec,\'file_get_contents\')) {
//mysql query
//query
}

#Do this ^ for a few more dangerous, but forgotten functions.

}

?>

<form method="post"> 
<input type="text" name="exec" value="echo" /><br />
<input type="submit" name="submit" value="Execute!" />
</form>
<br />

<?php echo $msg; ?>
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
