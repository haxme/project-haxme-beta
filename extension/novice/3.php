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
<div class="name">Javascript:Alert('Login');</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<p><center><br />
<script language="Javascript">
CallPassword = "Javascript";
      function check (x) {
        if (x == CallPassword)
        {
          alert("Congratulations, you have successfully completed Novice Mission 3.");
          window.location=unescape('%62%6F%6F%6C%65%61%6E%2F%78%7A%6B%64%6A%31%34%34%2F%63%68%6B%5F%33%38%34%37%31%38%39%2E%70%68%70');
        }
        else {
          alert("Invalid password. Please try again.");
        }
}
</script> </p>
<h3>Please Provide Password</h3>
<p>Please provide the administrative password to continue.</p>
<p><b>Password:</b><br />
<input type="password" id="pass" value="">
<br /> <br />
<button onclick="javascript:check(document.getElementById('pass').value)">Login<br />
</button><br />
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->
