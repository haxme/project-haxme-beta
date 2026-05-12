<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

$page = $_GET['t'];
switch($page){
case "1":
include("sources/inc/source/ns.php");
break;
case "2":
include("sources/inc/source/ws.php");
break;
default:
include("mission-src-tpl.php");
break;
}

?>
