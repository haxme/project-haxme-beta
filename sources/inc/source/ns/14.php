<?php
include('check.php');
include_once 'sources/inc/geshi.php'; 
session_start();
require_once("sources/interface/template.php");
$mission = 'n14';
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
    if ($_POST["email"] == "\ \'") {
        $msg = \'This script is vulnerable.\';
    } 
    elseif ($_POST["email"] == \'order by 1--\' || $_POST["email"] == \'ORDER by 1--\') {
        $msg = \'Keep going. There are more columns.\'; }

    elseif ($_POST["email"] == \'order by 2--\' || $_POST["email"] == \'ORDER by 2--\') {
        $msg = \'Keep going. There are more columns.\'; }

    elseif ($_POST["email"] == \'order by 3--\' || $_POST["email"] == \'ORDER by 3--\') {
        $msg = \'You have the columns.\'; }

    elseif ($_POST["email"] == \'select * from emails\' || $_POST["email"] == \'SELECT * FROM emails\') 
       {
        $msg = \'mailing_id , timestamp , email\'; }

    elseif ($_POST["email"] == \'alter table emails drop column email\' || 
            $_POST["email"] == \'ALTER TABLE emails DROP COLUMN email\') {
    //mysql query
    //$msg =
    }

    else {
        //$msg =
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
