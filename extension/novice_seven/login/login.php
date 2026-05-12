<?php
session_start();
include('../../check.php');
$msg = '';

if (isset($_POST["submit"])) {
    if ($_POST["user"] == 'administrator' && $_POST["pass"] == 'godzilla') {
        $query =  mysql_query("UPDATE hxm_members SET n7 = '1' WHERE member_id = '$memid'");
        $msg = 'Mission Complete! Your status has been updated, and you can now download this mission\'s source code from our database!';
    } else {
        $msg = 'Invalid Login Information. Please try again.';
    }
}

?>

<center>
<form method="post"> 
<label>Username</label><br />
<input type="text" name="user" /><br />
<label>Password</label><br />
<input type="text" name="pass" /><br />
<input type="submit" name="submit" value="Login" />
</form>

<?php 
echo $msg;
?>
</center>