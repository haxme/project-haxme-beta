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
<script language="Javascript"> 
CallPassword = unescape('%66%6B%41%6C%66%41%30%34%21%6B%66%6A%25%25%25%21%6B');
      function check (x) {
        if (x == CallPassword)
        {
          alert("Congratulations, you have successfully completed Novice Mission 6.");
          window.location=unescape('%62%6F%6F%6C%65%61%6E%2F%76%62%34%6C%61%64%6C%6C%6B%61%2F%63%68%6B%5F%34%38%33%39%31%30%34%34%2E%70%68%70');
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
