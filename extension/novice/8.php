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
HaxMeMD5Password = "fe90997af0df2f57369362fd699e107c";
HaxMeMD5Verification = "2e98ff22e1f314da6f5687a539d944d3";
function check(x)
{
<!--Be sure to include md5base.js-->
"CallMD5Check()" == "haxme"
if (x == "HaxMeMD5Password")
DecodeContents == HaxMeMD5Password
returnstring;
{
alert("Congratulations, you have successfully completed Novice Mission 8.");
DecodeContents == HaxMeMD5Verification
returnstring;
alert("HaxMeMD5Verification");
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
<button onclick="javascript:checkpass(document.getElementById('pass').value)">Login</button>
<br />
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->
