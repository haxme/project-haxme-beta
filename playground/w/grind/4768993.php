<?php
mysql_query("UPDATE hxm_members SET w1 = '1' WHERE member_id = '$memid'");
echo '<b>Mission Complete! Your status has been updated, and you can now download this mission\'s source code from our database!</b>';
?>
