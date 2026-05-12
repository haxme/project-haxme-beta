##Create a file called index.php

######################
<form method="post">
<font size="5">Password</font size><br />
<input type="password" name="password"><br />
<input type="submit" name="submit" value="Login">
</form>
<br /><br />
<form method="post" action=""> 
<tr><td colspan=2><strong>Forgot your password?</strong></td></tr>  
<tr><td></td><td><input size=25 type="hidden" name="forgot" value="donotreply@haxme.org"></td></tr> 
<tr><td colspan=2><input type=submit name="pwreminder" value="Click Here"></td></tr> 
</table> 
</form>
######################

######################
<?php
if (isset($_POST["submit"])) {
  if ($_POST["password"] == "password123") {
//echo 'Victory message goes here.';
  }
}
//lets mail em'
if (isset($_POST["forgot"])) {
        $emailcontainer = $_POST['forgot'];
        require_once('dir_to/class.phpmailer.php');
        $mail = new PHPMailer();
        $mail->Username = 'user@domain.tld';
        $mail->Password = 'password123';
        $mail->From = 'donotreply.email@domain.tld';
        $mail->FromName = 'You';
        $mail->Subject = 'HaxMe || Novice Mission 4';
        $mail->AddAddress($emailcontainer);
        $mail->Body = "Dear administrator, your password is: password123";
        $mail->Send();
        echo 'An email has been dispatched to the administrator\'s account.';
        }

?>
######################

//EOF
