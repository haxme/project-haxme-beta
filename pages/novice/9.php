<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

$page2 = $_GET['auth'];
switch($page2){
case "fail":
include("9/login.php");
break;
case "pass":
include("9/pass.php");
break;
default:
include("9/login.php");
break;
}
?>