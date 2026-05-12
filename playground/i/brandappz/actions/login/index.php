<?php
include('../../../../../check.php');
$home = HOME;

if (isset($_POST['auth'])) {
$usr = $_POST['user'];
$pwd = $_POST['pass'];

if ($usr == 'root' && $pwd == 'fifty9xxc1') {
$msg = "Congratulations! You have successfully completed Insane Mission 1! Redirecting you now... <meta http-equiv=\"refresh\" content=\"3;url=$home\">";
mysql_query("UPDATE hxm_members SET i1 = '1' WHERE member_id = '$memid'");
} else {
$msg = 'Invalid login information.';
}
}
?>

<form method="post">
Username<br />
<input type="text" name="user"><br />
Password<br />
<input type="password" name="pass"><br />
<input type="submit" name="auth" value="Login">
</form>
<br />
<strong><?php echo $msg; ?></strong>
