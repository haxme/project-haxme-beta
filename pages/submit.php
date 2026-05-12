<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

$page = $_GET['c'];
switch($page){
case "paper":
include("sources/inc/submit/paper.php");
break;
case "video":
include("sources/inc/submit/video.php");
break;
case "dl":
include("sources/inc/submit/download.php");
break;
default:
include("submit-tpl.php");
break;
}

?>
