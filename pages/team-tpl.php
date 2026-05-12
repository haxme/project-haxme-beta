<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

include('check.php');


session_start();
require_once("sources/interface/template.php");

fetchtemplate();
?>

<!--- Main Box --->
 <div id="rightcolumn">
 <div style="text-align:left; padding:3px; font-size:9px; margin-top:5px;" class="topbox">
 <div align="center" style="font-size:12px; font-weight:700; padding-bottom:2px">Team Missions Introduction</div>
&raquo;
    Welcome to the HaxMe Team Mission category. These missions are designed to complete with a team of friends, and require multiple users. <br />
    &raquo;
    You are required and are limited to 3 members on your team. You are limited to be on one team. Choose your team mates wisely. <br />
    &raquo;
    You can create a team name and work with extended features. Do not abuse the privilege, and have fun!</div>
<br />
		 <div class="quicktop" style="border-bottom-style:solid;border-right-style:none;border-left-style:none;border-top-style:none;">HaxMe Team Missions</div>
		  <div class="box"><div class="table">
  <div align="center">
<table>
  <tr>
<td><div align="center" style="font-weight:bold; padding-left:8px; font-size:13px;">Mission</div></td>
 </tr>
 <tr>
<td><div align="center" style="padding-left:8px; padding-top:2px;">
<a href="team.php?m=1" style="text-decoration:underline;">Team Mission #1</a></div></td>
 </tr>

</table>
  </div>
    </div>
    <?php include("sources/inc/page_copyright.php");?>
	  </div>
        </div>
<!--- End Main Box --->

<!--- Begin Footer --->
<?php footer(); ?>
<!--- End Footer --->
</div>
<!--- End Wrapper --->
</body>
<!--- End Body --->
</html>
