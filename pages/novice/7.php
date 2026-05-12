<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

include('check.php');

session_start();
require_once("sources/interface/template.php");
$memid = intval($_COOKIE['member_id']);
fetchtemplate();
?>

<!--- Main Box --->
<div id="rightcolumn"><div class="quicktop">HaxMe Novice Missions</div><div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">PHP Root Include</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<center>
<p>
<iframe class="border" src="<?php echo HOME . '/playground/n/novice_seven//login/login.php';?>" width="500" height="250"
frameborder=”0? scrolling=”no” align =”left” name=”myInlineFrame”></iframe>
</p>
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->
?>
