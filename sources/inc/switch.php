<?php
if(isset($_GET['theme'])){
   switch ($_GET['theme']) {

        default:
        $stylesheet = '<link rel="stylesheet" type="text/css" href="sources/style/site/default.css" />';
        $_SESSION['switchcss']=$stylesheet;
    }
}

echo ($_SESSION['switchcss'])? $_SESSION['switchcss']: '<link href="sources/style/site/default.css" type="text/css" rel="stylesheet" />';?>
