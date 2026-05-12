<?php
include('check.php');
session_start();
require_once('sources/interface/template.php');
fetchtemplate();

if (isset($_POST["adddata"])) {
 require('sources/interface/db_core.php');
 $purl = $_POST['url'];
 $sectitle = addslashes($_POST['title']);
 $secauthor = addslashes($_POST['author']);
  if ($purl == '' || $sectitle == '' || $secauthor == '' || strlen($purl) != '11') {
  $msg = 'Error -> Please make sure all fields are filled out correctly.'; }
  else {
 $sqlid = mysql_query("SELECT max(id) FROM submissions");
 $maxid = mysql_fetch_array($sqlid);
 $plusid = $maxid['max(id)'] + 1;
 $secid = addslashes($plusid);
 $securl = addslashes($purl);
 
  mysql_query("INSERT INTO submissions (`cat`, `id`, `author`, `title`, `embed`, `from`) VALUES ('video', '$secid', '$display_name', '$sectitle', '$securl', '$secauthor')");
  $msg = 'Your submission has been successfully sent. Before your content is added to the database, it is subject to moderator approval. Thank you for your contribution.';
  $sent = 'true';
   if($sent == 'true') {
    include('check.php');
    $addquery = mysql_query("SELECT subcount FROM hxm_members WHERE members_display_name = '$display_name'");
    $getresult = mysql_fetch_array($addquery);
    $getint = $getresult['subcount'] + 1;
    mysql_query("UPDATE hxm_members SET subcount = '$getint' WHERE members_display_name = '$display_name'");
    }
  }
 }

?>

<!--- Main Box --->
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="css/jquery.js"></script>
<script type="text/javascript" src="css/thickbox.js"></script>
<div id="rightcolumn"><div class="quicktop">Submit Content</div><div

class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">Submit a video</div></div>
<br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">

<?php
include('check.php');
$checkquery = mysql_query("SELECT subcount FROM hxm_members WHERE members_display_name = '$display_name'");
$checkresult = mysql_fetch_array($checkquery);
if ($checkresult['subcount'] != '5') {
?>

<form method="post">
<center>
<font size="5px">YouTube Video ID</font><br />
<input type="text" name="url" title="Enter a YouTube video ID [e.g. r5VY8mkyOzM]" value="" maxlength="11" style="border:2px solid black; width: 540px; height: 40px; background-color: white; font-size: 20px;"><br />
<font size="5px">Title</font><br />
<input type="text" name="title" title="What is the name of the video" value="" style="border:2px solid black; width: 540px; height: 40px; background-color: white; font-size: 20px;"><br />
<font size="5px">Author</font><br />
<input type="text" name="author" title="Author" value="" style="border:2px solid black; width: 540px; height: 40px; background-color: white; font-size: 20px;"><br /><br />
<input type="submit" value="Add" name="adddata" style="border:2px solid black; font-size: 20px;"/>
</form><br />

<?php
} else {
?>

<center>
<h3>Our records indicate that you already have 5 current submissions that are pending for approval. This is a spam prevention method we use to keep our database flowing smoothly. Sorry for any inconvenience - please wait until 1 of your previous submissions are either approved or denied.</h3>
</center><br />

<?php
}
echo $msg; 
?>

</center>
</span></div><br/>
</div><div class="space2"></div>
