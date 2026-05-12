<?php
include('check.php');

session_start();
require_once("interface/template.php");
$memid = intval($_COOKIE['member_id']);
fetchtemplate();
?>

<!--- Main Box --->
<div id="rightcolumn"><div class="quicktop">HaxMe Novice Missions</div><div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">JavaBase</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<p><center><br />
<script type="text/javascript" src="<?php echo HOME . '/js/loginscript';?>"></script> 
<script language="javascript">						
CallPassword = "\u0069\u0072\u0030\u006E\u0032\u006B\u0064\u0061\u0063\u0063\u0061";
function check(x)
{
        "+CallPassword+" == "password:4938133"
	if (x == ""+CallPassword+"")
        {
		alert("Congratulations, you have successfully completed Novice Mission 10.");
              
                window.location = "\u0062\u006F\u006F\u006C\u0065\u0061\u006E\u002F\u0073\u006A\u0061\u006B\u0034\u0061\u006C\u0066\u005F\u0031\u002F\u0063\u0068\u006B\u005F\u0034\u0038\u0033\u0039\u0031\u0030\u0030\u0031\u002E\u0070\u0068\u0070";
        } else {
		alert("Invalid password. Please try again.");
	}
}
</script> </p>
<h3>Please Provide Password</h3>
<p>Please provide the administrative password to continue.</p>
<p><b>Password:</b><br />
<input type="password" id="pass" value="">
<br /> <br />
<button onclick="javascript:check(document.getElementById('pass').value)">Login</button> 
<br />
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->
