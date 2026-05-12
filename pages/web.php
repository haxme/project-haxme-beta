<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

$page = isset($_GET['m']) ? $_GET['m'] : (isset($_GET['id']) ? $_GET['id'] : '');
switch($page){
case "1":
header("Location: /playground/w/grind/index.php");
exit;
break;
case "2":
header("Location: /playground/w/investive/index.php");
exit;
break;
case "3":
header("Location: /playground/w/fly-host/index.php");
exit;
break;
case "4":
header("Location: /playground/w/filefold/index.php");
exit;
break;
default:
include("web-tpl.php");
break;
}

?>
