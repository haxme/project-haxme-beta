<?php
include('check.php');

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

session_start();
require_once("sources/interface/template.php");
$memid = intval($_COOKIE['member_id']);
fetchtemplate();
$msg = '';

if(isset($_POST['submit'])) {
$exec = stripslashes($_POST['exec']);

if(strstr($exec,'penis')) {
$msg = 'You sir, are a pervert. What kind of example were you looking for? Click <a href="http://tinyurl.com/2tx">here</a>, and stay away.';
}

if(strstr($exec,'echo')) {
$msg = "Hello world.<br />&#60;&#63;php echo 'Hello world.'; ?>";
}

if(strstr($exec,'print')) {
$msg = "Hello world.<br />&#60;&#63;php print 'Hello world.'; ?>";
}

if(strstr($exec,'exec')) {
$msg = 'Dangerous function detected.';
}

if(strstr($exec,'passthru')) {
$msg = 'Dangerous function detected.';
}

if(strstr($exec,'shell_exec')) {
$msg = 'Dangerous function detected.';
}

if(strstr($exec,'system')) {
$msg = 'Dangerous function detected.';
}

if(strstr($exec,'phpinfo')) {
$msg = 'Dangerous function detected.';
}

if(strstr($exec,'fopen')) {
$msg = 'Dangerous function detected.';
}

if(strstr($exec,'file')) {
$msg = 'Dangerous function detected.';
}

if(strstr($exec,'show_source')) {
$query =  mysql_query("UPDATE hxm_members SET n15 = '1' WHERE member_id = '$memid'");
$msg = 'Mission Complete! Your status has been updated, and you can now download this mission\'s source code from our database!'; }

if(strstr($exec,'highlight_file')) {
$query =  mysql_query("UPDATE hxm_members SET n15 = '1' WHERE member_id = '$memid'");
$msg = 'Mission Complete! Your status has been updated, and you can now download this mission\'s source code from our database!'; }

if(strstr($exec,'readfile')) {
$query =  mysql_query("UPDATE hxm_members SET n15 = '1' WHERE member_id = '$memid'");
$msg = 'Mission Complete! Your status has been updated, and you can now download this mission\'s source code from our database!'; }

if(strstr($exec,'file_get_contents')) {
$query =  mysql_query("UPDATE hxm_members SET n15 = '1' WHERE member_id = '$memid'");
$msg = 'Mission Complete! Your status has been updated, and you can now download this mission\'s source code from our database!'; }

}
?>

<!--- Main Box --->
<div id="rightcolumn"><div class="quicktop">HaxMe Novice Missions</div><div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">Far, Far Away</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<p><center><br />
<p>
<b>PHP Tutor v1</b>
<br />
Enter a PHP function you wish to learn about, and we will show you the power of PHP by using that function against this file! Note: <i>Most PHP functions have been disabled.</i>
</p>
<form method="post"> 
<input type="text" name="exec" value="echo" /><br />
<input type="submit" name="submit" value="Execute!" />
</form>
<br />
<?php echo $msg; ?>
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->
