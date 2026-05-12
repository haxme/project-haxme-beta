<?php
include('../../check.php');


session_start();
require_once("../../sources/interface/main.php");
$memid = intval($_COOKIE['member_id']);

$query =  mysql_query("UPDATE hxm_members SET n8 = '1' WHERE member_id = '$memid'");
echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=../../">';
?>
