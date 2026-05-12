<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

$page = isset($_GET['m']) ? $_GET['m'] : (isset($_GET['id']) ? $_GET['id'] : '');
switch($page){
case "1":
header("Location: /playground/i/brandappz/index.php");
exit;
break;
default:
include("insane-tpl.php");
break;
}

?>
