<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

include('check.php');
require_once("sources/interface/template.php");

$msg = '';
if (isset($_POST['sendsurvey'])) {
    require('sources/interface/db_core.php');
    $body = addslashes(
        "How did you find HaxMe?\n" . $_POST['q1'] . "\n\n" .
        "What are your thoughts of our missions?\n" . $_POST['q2'] . "\n\n" .
        "How could HaxMe improve?\n" . $_POST['q3']
    );

    if ($_POST['q1'] == '' || $_POST['q2'] == '' || $_POST['q3'] == '') {
        $msg = 'Please fill in every survey field.';
    } else {
        $sqlid = mysql_query("SELECT max(id) FROM submissions");
        $maxid = mysql_fetch_array($sqlid);
        $secid = intval($maxid['max(id)']) + 1;
        mysql_query("INSERT INTO submissions (`cat`, `id`, `author`, `title`, `content`, `from`) VALUES ('survey', '$secid', '$display_name', 'Survey Response', '$body', '$display_name')");
        $msg = 'Thank you. Your survey response has been stored locally.';
    }
}

fetchtemplate();
?>

<!--- Main Box --->
<div id="rightcolumn">
<div class="quicktop">HaxMe Survey</div>
<div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">Survey</div></div>
<br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<center>
<form method="post">
How did you find HaxMe?<br />
<textarea name="q1" rows="5" cols="60"></textarea><br /><br />
What are your thoughts of our missions?<br />
<textarea name="q2" rows="5" cols="60"></textarea><br /><br />
How could HaxMe improve?<br />
<textarea name="q3" rows="5" cols="60"></textarea><br /><br />
<input type="submit" name="sendsurvey" value="Send Survey" />
</form>
<?php echo $msg; ?>
</center>
</span></div><br/>
</div><div class="space2"></div>
</div></div>
<!--- End Main Box --->

<!--- Begin Footer --->
<?php footer(); ?>
<!--- End Footer --->
</div>
</body>
</html>
