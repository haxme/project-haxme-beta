<?php
include('../../../../../check.php');
session_start();

$allowed_foldtypes = array('.jpg','.png');
$hax_foldtypes = array('.php.jpg','.php.gif','.php.tif','.php.png','.php.bmp','.pl.jpg','.pl.gif','.pl.tif','.pl.png','.pl.bmp');
$max_foldsize = 1048576;
$filename = $_FILES["foldfile"]["name"];
$ext = substr($filename, strpos($filename,'.'), strlen($filename)-1);
$error = 2;
$pass = no;
$hax = no;
 

   if(in_array($ext,$hax_foldtypes)) {
     mysql_query("UPDATE hxm_members SET w4 = '1' WHERE member_id = '$memid'");
     die ('Mission Complete! Your status has been updated, and you can now download this mission\'s source code from our database!');    
     }      

   if(!in_array($ext,$allowed_foldtypes))
      die("The file you attempted to upload is not allowed.");
 
   if(filesize($_FILES["foldfile"]["tmp_name"]) > $max_foldsize)
      die("The file you attempted to upload is too large.");
      else
      $pass = yes;
  
   if(filesize($_FILES["foldfile"]["tmp_name"]) < $max_foldsize && $pass = yes)
      echo "Your file has been successfully folded!";

?>
