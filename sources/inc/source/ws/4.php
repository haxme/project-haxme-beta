<?php
include('check.php');
include_once 'sources/inc/geshi.php'; 
session_start();
require_once("sources/interface/template.php");
$mission = 'w4';
fetchtemplate();

$sql = "SELECT $mission FROM hxm_members WHERE member_id = $memid";
$result = mysql_query($sql);
$isgood = mysql_fetch_array($result);
$status = $isgood["$mission"];

//Source Code
$source = '
<!-- Download template: http://www.multiupload.com/WCDUJD8FUV -->

<?php
//Here is a LOVELY switch module that will allow us to get pages...
$page = $_GET[\'p\'];
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

//"p" is our parameter used to GET our pages...
//"case" is our query to match with our include...
//"include" is what we use to include the corresponding page...
//So.... ==> p=dl , download.php
//Have fun. -cwade
?>

<!-- check.html -->
trial
<!-- end -->

<!-- vb6 source? contact me. -->

<!-- stype/lite/index.html -->
<form action="./fold.php" method="post" enctype="multipart/form-data">
   <p>
      <label for="file">Select a file:</label> <input type="file" name="foldfile" id="file"> <br />
      <button>Upload File</button>
   </p>
</form>
<!-- end -->

#fold.php
<?php

$allowed_foldtypes = array(\'.jpg\',\'.png\'); //these are what we are actually allowing
$hax_foldtypes = array(\'.php.jpg\',\'.php.gif\',\'.php.tif\',\'.php.png\',\'.php.bmp\',
\'.pl.jpg\',\'.pl.gif\',\'.pl.tif\',\'.pl.png\',\'.pl.bmp\'); //these are to win
$max_foldsize = 1048576; //Lets set 1MB
$filename = $_FILES["foldfile"]["name"];
$ext = substr($filename, strpos($filename,\'.\'), strlen($filename)-1); //strip
$pass = no;
$hax = no;
 

if(in_array($ext,$hax_foldtypes)) //if your extension matches one of the hax types, then... 
die(); //kill the script, and echo a message

if(!in_array($ext,$allowed_foldtypes)) //if the extension fails
die(""); //kill the script, echo a negative
 
if(filesize($_FILES["foldfile"]["tmp_name"]) > $max_foldsize) //size > 1MB
die(); //kill the script, echo a negative
else //but, if the file size is less than 1MB, then...
$pass = yes;
  
if(filesize($_FILES["foldfile"]["tmp_name"]) < $max_foldsize && $pass = yes)
//echo 

//enjoy,
//cwade12c

?>
';

$language = 'php';

//End Source Code

$geshi = new GeSHi($source, $language);
?>

<!--- Main Box --->
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="css/jquery.js"></script>
<script type="text/javascript" src="css/thickbox.js"></script>
<div id="rightcolumn"><div class="quicktop">HaxMe Mission Source Code</div><div

class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">Mission Source</div></div>
<br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">

<?php
if ($status == '1') {
echo $geshi->parse_code();
} else {
echo '<center>You have not yet completed this mission.</center>';
}
?>

</span></div><br/>
</div><div class="space2"></div>
