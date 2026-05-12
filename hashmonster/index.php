<?php
DEFINE("DENYDIRECT","GOOD2GO");

if(!is_file('engine/core.php')) {
 die('haXMS Engine Error :: Required applications are missing.</i>');
 } else {
 include('engine/core.php');
 }

$page = $_GET['p'];
switch($page){
case "home":
include("pages/home.php");
break;
case "register":
include("pages/register.php");
break;
default:
include("pages/home.php");
break;
}

?>
