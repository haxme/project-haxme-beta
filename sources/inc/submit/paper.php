<?php
include('check.php');
require_once('sources/interface/template.php');
fetchtemplate();

if (isset($_POST["adddata"])) {
 require('sources/interface/db_core.php');
 $secpaper = addslashes($_POST["editor1"]);
 $sectitle = addslashes($_POST['title']);
 $secauthor = addslashes($_POST['author']);
  if ($secpaper == '' || $sectitle == '' || $secauthor == '') {
  $msg = 'Error -> All of the above fields must be filled in!'; }
  else {
 $sqlid = mysql_query("SELECT max(id) FROM submissions");
 $maxid = mysql_fetch_array($sqlid);
 $plusid = $maxid['max(id)'] + 1;
 $secid = addslashes($plusid);
 
  mysql_query("INSERT INTO submissions (`cat`, `id`, `author`, `title`, `content`, `from`) VALUES ('paper', '$secid', '$display_name', '$sectitle', '$secpaper', '$secauthor')");
  $msg = 'Your submission has been successfully sent. Before your content is added to the database, it is subject to moderator approval. Thank you for your contribution.';
  $sent = 'true';
   if($sent == 'true') {
    include('check.php');
    echo $member_id;
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
<script type="text/javascript" src="sources/ckeditor/ckeditor.js"></script>
</script>
<div id="rightcolumn"><div class="quicktop">Submit Content</div>
<div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">Submit a paper</div></div>
<br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">

<?php
include('check.php');
$checkquery = mysql_query("SELECT subcount FROM hxm_members WHERE members_display_name = '$display_name'");
$checkresult = mysql_fetch_array($checkquery);
if ($checkresult['subcount'] != '5') {
?>

<center>
<form method="post" onsubmit="return submitForm();">
<strong>Title</strong><br />
<input name="title" type="text" value="" style="border:1px solid;" title="What is the paper name?"><br />
<strong>Author</strong><br />
<input name="author" type="text" value="" style="border:1px solid;" title="What is the author name?"><br /><br />
<textarea id="editor1" name="editor1">
<!-- Title -->
<h2><i>Paper Title</i></h2>
<!-- End Title -->
 
<!-- Begin Paper -->
<br />
<hr>
<br />
<p><span>Chapter 1</span></p>
<br />
<hr>
<br />
<p>Content</p>
<!-- End Paper -->
</textarea> <br />

<script type="text/javascript">
<!--
CKEDITOR.replace( 'editor1',
    {
        toolbar : 
	[
		['Source','-','Save','NewPage','Preview','-','Templates'],
		['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
		['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
		['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
		['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
		['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
		['Link','Unlink','Anchor'],
		['Image','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
		['Styles','Format','Font','FontSize'],
		['TextColor','BGColor'],
		['Maximize', 'ShowBlocks','-','About']
	]

    });
//-->
</script>
<input type="submit" value="Add" name="adddata" style="border:1px solid;">
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
