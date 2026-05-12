<?php
include('../../../../check.php');
?>
<html>
<body bgcolor="black">
<center>
<img src="uc.jpg"><br /><br />
<font size="5"><font color="white">We are upgrading our security. A lot of our root folders' permissions were tampered with. Please check back soon, fellow admins!</font color></font size><br />
<font size="3"><font color="white">For the time being, you can access our temporary admin panel. To get to it, enter your authorization code below. Thanks for understanding!</font color></font size>
<br / ><br />

<script type="text/javascript" src="js/auth"></script><br /> 
<script language="javascript"> 
CallPassword = "4959301";
      function check (x) {
        if (x == CallPassword)
        {
          window.location= unescape("%68%74%74%70%3A%2F%2F%68%61%78%6D%65%2E%6F%72%67%2F")
        }
        else {
          alert("Invalid password. Please try again.");
        }
}
</script>
<input type="password" id="pass" value=""> 
<br /> <br /> 
<button onclick="javascript:checkpass(document.getElementById('pass').value)">Authorize</button></p> 
</center>
</body>
</html>
