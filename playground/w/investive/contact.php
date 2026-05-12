<?php
include('../../../check.php');

error_reporting(0);
$page = 'general';
if (isset( $_GET['issue'] ) )
$page = $_GET['issue'];

//Now lets tell the user they have won if they exploit the script.

//If string contains ../ (LFI exploit --> passwd file)
if(strstr($page,'../../../etc/passwd')) 
{ 
$page = 'etc3971115a';
}

//If string contains ../ (LFI exploit --> shadow file)
if(strstr($page,'../../../etc/shadow')) 
{ 
$page = 'shad301933';
}

//If string contains http:// (RFI exploit)
if(strstr($page,'http://')) 
{ 
$page = 'hacker';
}


//Lets clean everything up, to actually prevent this exploit... for the MOST part
//$type is our variable
//str_replace will replace our string
//"http://" (example) would be what is being replaced
//"" is what we would be replacing http:// with
//$type would be our variable

$page = str_replace("http://", "", $page);
$page = str_replace("/", "", $page);
$page = str_replace("\\", "", $page);
$page = str_replace("../", "", $page);
$page = str_replace("..", "", $page);
require( $page . '.php' );
?>
