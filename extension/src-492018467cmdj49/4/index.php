<?php
include('check.php');


session_start();
$memid = intval($_COOKIE['member_id']);

$query =  mysql_query("SELECT n4 FROM hxm_members WHERE member_id = '$memid'");
$row = mysql_fetch_array($query);

##Lets Declare Our Source Value Now :)

$novice4 = stripslashes($row['n4']);

##

if ($novice4 == "1") {
require_once("interface/template.php");
fetchtemplate();
?>

<!--- Main Box --->
<div id="rightcolumn"><div class="quicktop">HaxMe Source Code</div><div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">What's your email?</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<?php highlight_file("src-492018467cmdj49/4/srcx443367.php");?>
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->
<?php
}
else {
require_once("interface/main.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>" />
<meta name="author" content="<?php echo $author; ?>" />
<meta name="copyright" content="<?php echo $copyright; ?>" />
<title>HaxMe - Your Security</title>
<?php include("inc/switch.php");?>
</head>
<!--- End Header --->
<!--- Begin Body --->
<body>
 <!--- Start Wrapper --->
   <div id="wrapper">
     <!--- Start Banner --->
         <div id="header">
		      <a href="#" title="Home"></a>
		 </div>
     <!--- End Banner --->
<!--- Begin Left Holder --->
<div id="leftholder">
 <!--- Begin Nav Column --->
  <div class="navcolumn">
   <div class="quicktop">Navigation Panel</div>
   <div class="space"></div>

	   <div align="left">
         <?php include("inc/side_links.php"); ?>
   <div class="space"></div>
	   </div>

 </div>
<!--- End Nav Column --->

<!--- Begin Search Box -->
<?php include("inc/search_area.php"); ?>
<!--- End Search Box --->

<!--- Begin Update Box --->
<?php include("inc/update_area.php"); ?>
<!--- End Update Box --->

<!--- Begin Theme Box --->
<?php include("inc/theme_area.php"); ?>
<!--- End Theme Box --->

<!--- Begin Language Box --->
<?php include("inc/lang_area.php"); ?>
<!--- End Language Box --->

<!--- Begin Sponsors Box --->
<?php include("inc/sponsor.php"); ?>
<!--- End Sponsors Box --->
</div>
<!--- End Nav Box --->

<!--- Main Box --->
<div id="rightcolumn"><div class="quicktop">HaxMe Source Code</div><div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">What's your email?;</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
You are not authorized to view the source code to this mission!<br />
Error: <i>You must first complete the mission before you can access its source code!</i>
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->
<?php
}
?>