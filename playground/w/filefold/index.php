<?php
include('../../../check.php');
session_start();
$page = $_GET['p'];
switch($page){
case "purchase":
include("purchase.php");
break;
case "support":
include("support.php");
break;
case "dl":
include("download.php");
break;
default:
include("home.php");
break;
}
?>
