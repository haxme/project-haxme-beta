<?php

$page = $_GET['s'];
switch($page){
case "1":
include("sources/inc/source/ns/1.php");
break;
case "2":
include("sources/inc/source/ns/2.php");
break;
case "3":
include("sources/inc/source/ns/3.php");
break;
case "4":
include("sources/inc/source/ns/4.php");
break;
case "5":
include("sources/inc/source/ns/5.php");
break;
case "6":
include("sources/inc/source/ns/6.php");
break;
case "7":
include("sources/inc/source/ns/7.php");
break;
case "8":
include("sources/inc/source/ns/8.php");
break;
case "9":
include("sources/inc/source/ns/9.php");
break;
case "10":
include("sources/inc/source/ns/10.php");
break;
case "11":
include("sources/inc/source/ns/11.php");
break;
case "12":
include("sources/inc/source/ns/12.php");
break;
case "13":
include("sources/inc/source/ns/13.php");
break;
case "14":
include("sources/inc/source/ns/14.php");
break;
case "15":
include("sources/inc/source/ns/15.php");
break;
default:
include("sources/inc/source/ns-tpl.php");
break;
}

?>
