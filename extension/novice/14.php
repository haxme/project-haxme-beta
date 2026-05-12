<?php
include('check.php');

session_start();
require_once("interface/template.php");
$memid = intval($_COOKIE['member_id']);
fetchtemplate();
$msg = '';

if (isset($_POST["submit"])) {
    if ($_POST["email"] == "\'") {
        $msg = 'This script is vulnerable.';
    } 
    elseif ($_POST["email"] == 'order by 1--' || $_POST["email"] == 'ORDER by 1--') {
        $msg = 'Keep going. There are more columns.'; }

    elseif ($_POST["email"] == 'order by 2--' || $_POST["email"] == 'ORDER by 2--') {
        $msg = 'Keep going. There are more columns.'; }

    elseif ($_POST["email"] == 'order by 3--' || $_POST["email"] == 'ORDER by 3--') {
        $msg = 'You have the columns.'; }

    elseif ($_POST["email"] == 'select * from emails' || $_POST["email"] == 'SELECT * FROM emails') {
        $msg = 'mailing_id , timestamp , email'; }

    elseif ($_POST["email"] == 'alter table emails drop column email' || $_POST["email"] == 'ALTER TABLE emails DROP COLUMN email') {
    $query =  mysql_query("UPDATE hxm_members SET n14 = '1' WHERE member_id = '$memid'");
    $msg = 'Mission Complete! Your status has been updated, and you can now download this mission\'s source code from our database!'; }

    else {
        $msg = 'Thank you! Your email address has been added to our emails list! ';
    }
}
?>

<!--- Main Box --->
<div id="rightcolumn"><div class="quicktop">HaxMe Novice Missions</div><div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">I Hate The Doctor...</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<p><center><br />
<p><b>Join our mailing list!</b></p><br />
<form method="post"> 
<label>Email:</label><br />
<input type="text" name="email" /><br /><br />
<input type="submit" name="submit" value="Join!" />
</form>
<br />
<?php echo $msg; ?>
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->