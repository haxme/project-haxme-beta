<?php
$pages = $_GET["lang"];
switch($pages) {
case "asm":
include('pages/codebase/asm.php');
break;
case "basic":
include('pages/codebase/basic.php');
break;
case "c":
include('pages/codebase/c.php');
break;
case "html":
include('pages/codebase/html.php');
break;
case "java":
include('pages/codebase/java.php');
break;
case "perl":
include('pages/codebase/perl.php');
break;
case "php":
include('pages/codebase/php.php');
break;
case "python":
include('pages/codebase/python.php');
break;
case "ruby":
include('pages/codebase/ruby.php');
break;
default:
include('pages/codebase-tpl.php');
break;
}
?>