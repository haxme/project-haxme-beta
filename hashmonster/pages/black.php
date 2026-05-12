<?php
set_time_limit(60);

if(isset($_POST['md5'])) {
 
$md5 = md5($_POST['md5']);
$chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*)(';
$length = strlen($chars);

function checkmd5($a)
{
global $md5;
if (hash(md5, $a) == $md5) {
echo 'Found match. Password: ' . $a;
exit; }
}

function repeat($how_wide, $pos, $string)
{
 global $chars, $length;
 
 for ($i = 0; $i < $length; $i++) {
        if ($pos < $how_wide - 1) {
                 repeat($how_wide, $pos + 1, $string . $chars[$i]);
         }
        checkmd5($string . $chars[$i]);
  
 }
}

 repeat(1, 0, ''); 
}
 
?>

<form method="POST">
Hash<input type="text" name="md5" /><br />
<input type="submit" name="MD5 dat shit" value="Login!" />
</form>