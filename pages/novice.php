<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

$page = isset($_GET['m']) ? $_GET['m'] : (isset($_GET['id']) ? $_GET['id'] : '');
switch($page){
case "1":
include("pages/novice/1.php");
break;
case "2":
include("pages/novice/2.php");
break;
case "3":
include("pages/novice/3.php");
break;
case "4":
include("pages/novice/4.php");
break;
case "5":
include("pages/novice/5.php");
break;
case "6":
include("pages/novice/6.php");
break;
case "7":
include("pages/novice/7.php");
break;
case "8":
include("pages/novice/8.php");
break;
case "9":
include("pages/novice/9.php");
break;
case "10":
include("pages/novice/10.php");
break;
case "11":
include("pages/novice/11.php");
break;
case "12":
include("pages/novice/12.php");
break;
case "13":
include("pages/novice/13.php");
break;
case "14":
include("pages/novice/14.php");
break;
case "15":
include("pages/novice/15.php");
break;
default:
include("novice-tpl.php");
break;
}

?>
