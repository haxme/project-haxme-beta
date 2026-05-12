<?php
if(isset($_POST['exec'])) {
$cmd = stripslashes($_POST['cmd']);

$msg = 'Result: Your cron is scheduled to execute in 10 minutes.';

if($cmd == '<!-- #exec cgi="cron.pl"-->') {
$msg = 'Result: Your cron is scheduled to execute in 10 minutes.';
}

if($cmd == '<!-- #exec cmd="ls"-->') {
$msg = 'cron.pl<br >Result: Your cron is scheduled to execute in 10 minutes.';
}

if($cmd == '<!-- #exec cmd="ls ../backups"-->') {
$msg = 'add.phpindex.phpconf_backup.phpconfigure.phpdetect.phpDWSM_Status.php<br />Result: Your cron is scheduled to execute in 10 minutes.';
}
            
if($cmd == '<!-- #exec cmd="ls ../admin"-->') {
$msg = 'index.phpstripe.pnglogin_inclusions<br />Result: Your cron is scheduled to execute in 10 minutes.';
}

if($cmd == '<!-- #exec cmd="ls ../admin/login_inclusions"-->') {
$msg = 'handler.cysindex.html<br />Result: Your cron is scheduled to execute in 10 minutes.';
}

}

?>

<center>
<h2>CGI-Pro exec v1.0B :: All Rights Reserved.</h2>
<br />
<form method="post">
<input type='text' name='cmd' value='<!--&#32;#exec&#32;cgi=&#34;cron.pl&#34;-->' style='border:2px solid black; width: 540px; height: 40px; background-color: white; font-size: 20px;'>
<br />
<input type="submit" name="exec" value="Execute">
</form>
<br />
<br />
<font size="5">
<?php
echo $msg;
?>
</font>
</center>
