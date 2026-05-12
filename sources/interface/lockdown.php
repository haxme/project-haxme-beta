<?php
include('db_core.php');
 $sql2 = "SELECT * FROM security";
 $query2 = mysql_query($sql2);
 $data2 = mysql_fetch_array($query2);

 if($data2['lockdown'] == '1'){
 die('<html><title>HaxMe || Maintenance Mode</title><body><br /><br /><br /><center><img src="sources/images/maintenance.png" /></center></body></html>');
 }
?>
