<?php 

if (isset($_POST["Submit"])) { 

$string = '<?php  
$dbhost = "'. $_POST["dbhost"]. '"; 
$dbuname = "'. $_POST["dbuname"]. '"; 
$dbpass = "'. $_POST["dbpass"]. '"; 
$dbname = "'. $_POST["dbname"]. '"; 
$prefix = "'. $_POST["prefix"]. '"; 
$user_prefix = "'. $_POST["user_prefix"]. '"; 
$dbtype = "'. $_POST["dbtype"]. '"; 
?>'; 

$fp = fopen("config.php", "w"); 
fwrite($fp, $string); 
fclose($fp); 

} 

?> 
<form action="" method="post" name="install" id="install"> 
  <p> 
    <input name="dbhost" type="text" id="dbhost" value="">  
    DB Host 
</p> 
  <p> 
    <input name="dbuname" type="text" id="dbuname">  
    DB Username 
</p> 
  <p> 
    <input name="dbpass" type="password" id="dbpass"> 
  DB Pass </p> 
  <p> 
    <input name="dbname" type="text" id="dbname"> 
  DB Name </p> 
  <p> 
    <input name="prefix" type="text" id="prefix"> 
  DB Prefix</p> 
  <p> 
    <input name="user_prefix" type="text" id="user_prefix"> 
  Userprefix</p> 
  <p> 
    <input name="dbtype" type="text" id="dbtype"> 
  DB Type </p> 
  <p> 
    <input type="submit" name="Submit" value="Install"> 
  </p> 
</form>