<?php
include('check.php');
include_once 'sources/inc/geshi.php'; 
session_start();
require_once("sources/interface/template.php");
$mission = 'n12';
fetchtemplate();

$sql = "SELECT $mission FROM hxm_members WHERE member_id = $memid";
$result = mysql_query($sql);
$isgood = mysql_fetch_array($result);
$status = $isgood["$mission"];

//Source Code
$source = '
<?php
$msg = \'\';

if (isset($_POST["submit"])) {
    if ($_POST["user"] == \'aradadmin\' && $_POST["pass"] == \'xu18a/x94\') {
        //mysql query
        //$msg = 
    } else {
        //$msg = 
    }
}
?>

<script language="javascript" type="text/javascript">
var flro,a57492e,g77uik="3c63656e7465723e0d0a3c666f726d206d6574686f643d22706f7374223e200
d0a3c6c6162656c3e557365726e616d653c2f6c6162656c3e3c6272202f3e0d0a3c696e70757420747970653
d227465787422206e616d653d227573657222202f3e3c6272202f3e0d0a3c6c6162656c3e50617373776f726
43c2f6c6162656c3e3c6272202f3e0d0a3c696e70757420747970653d227465787422206e616d653d2270617
37322202f3e3c6272202f3e0d0a3c696e70757420747970653d227375626d697422206e616d653d227375626
d6974222076616c75653d224c6f67696e22202f3e0d0a3c2f666f726d3e0d0a0d0a3c212d2d200d0a2533432
5323125324425324425323025333625333425333825333925363125363125333325333425334125363525343
82535352537382534462534372534352537362536352534342536422533302532302532442532442533450d0
a2d2d3e";a57492e=\'\';for(flro=0;flro<g77uik.length;flro+=2)
{a57492e+=unescape(\'%\'+g77uik.substr(flro,2));}document.write(a57492e);
</script>

<?php 
echo $msg;
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
