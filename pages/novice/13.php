<?php
include('check.php');

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

if (isset($_COOKIE["authorized13"])) {
    $auth = $_COOKIE["authorized13"];
} else {
    setcookie("authorized13","no");
}

session_start();
require_once("sources/interface/template.php");
$memid = intval($_COOKIE['member_id']);
fetchtemplate();
$msg = '';

if ($auth == "yes") {
    $query =  mysql_query("UPDATE hxm_members SET n13 = '1' WHERE member_id = '$memid'");
    $msg = 'Mission Complete! Your status has been updated, and you can now download this mission\'s source code from our database!';
} else {
    $msg = 'You are not authorized to view this page.';
}
?>

<!--- Main Box --->
<div id="rightcolumn"><div class="quicktop">HaxMe Novice Missions</div><div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">Milk N' Cookies</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<center>
<?php
echo $msg;
?>
</center>
