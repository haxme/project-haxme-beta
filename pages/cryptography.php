<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

$page = isset($_GET['id']) ? $_GET['id'] : (isset($_GET['m']) ? $_GET['m'] : '');
switch($page){
case "1":
include("pages/crypto/1.php");
break;
case "2":
include("pages/crypto/2.php");
break;
case "3":
include("pages/crypto/3.php");
break;
case "4":
include("pages/crypto/4.php");
break;
case "5":
include("pages/crypto/5.php");
break;
case "6":
include("pages/crypto/6.php");
break;
case "7":
include("pages/crypto/7.php");
break;
case "8":
include("pages/crypto/8.php");
break;
case "9":
include("pages/crypto/9.php");
break;
case "10":
include("pages/crypto/10.php");
break;
default:
include("c-tpl.php");
break;
}
?>
