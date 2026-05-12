<?php
include('../../../../check.php');
if(isset($_POST['login'])) {

$msg = '';
$max_fs = 524288; #512KB
$allowed_imgz = array('.bmp');
$filename = $_FILES["imgkey"]["name"];
$tmpfile = $_FILES["imgkey"]["tmp_name"];
$ext = substr($filename, -4);

if($ext != ".bmp")
die("Invalid key file!");

if(filesize($_FILES["imgkey"]["tmp_name"]) > $max_fs)
die("Key file exceeds 512KB!");

$hashed = md5_file($tmpfile);

if($_POST['usr'] == 'administrator' && $_POST['pwd'] == 'choc0latelite' && $hashed == '4780a3de5811ff79a9580fcf0eb9b114') {
$query =  mysql_query("SELECT * FROM hxm_members WHERE member_id = '$memid'");
$row = mysql_fetch_array($query);
$tname = $row['tname'];
mysql_query("UPDATE hxm_members SET t1 = '1' WHERE tname = '$tname'");
$msg = 'Mission Complete! Your status has been updated, and your tean can now download this mission\'s source code from our database!'; 
} else { $msg = 'Invalid login information.'; }

}
?>



<html>
<head>
<title>Admin - Login</title>
<style type="text/css">
 body {
  background-image:url('stripe.png');
  background-repeat:repeat;
  }
</style>
</head>
<body>
<center>
<div style="width:300px; height:auto; border:1px solid black; background-color:white;">
<form enctype="multipart/form-data" method="post">
Username<br />
<input type="text" name="usr" /><br />
Password<br />
<input type="password" name="pwd" /><br /><br />
Img Key (< 512KB)<br /><br />
<input type="file" name="imgkey" /><br /><br />
<input type="submit" name="login" /><br />
<?php echo $msg; ?>
</form>
</div>
</center>
</body>
