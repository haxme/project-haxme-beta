##Create a file called index.html

######################
<p><center><br />
<script language="Javascript"> 
<!--This is our password-->
CallPassword = "Javascript";
      function check (x) {
        if (x == CallPassword)
        {
          alert("Congratulations, you have successfully completed Novice Mission 3.");
          <!--window.location="../"-->
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
######################

//EOF