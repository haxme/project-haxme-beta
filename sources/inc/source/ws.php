<?php

$page = $_GET['s'];
switch($page){
case "1":
include("sources/inc/source/ws/1.php");
break;
case "2":
include("sources/inc/source/ws/2.php");
break;
case "3":
include("sources/inc/source/ws/3.php");
break;
case "4":
include("sources/inc/source/ws/4.php");
break;
default:
include("sources/inc/source/ws-tpl.php");
break;
}

?>
