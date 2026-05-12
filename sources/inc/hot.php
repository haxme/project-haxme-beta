<?php
include('config.php');
$memid = intval($_COOKIE['member_id']);
$query = mysql_query("SELECT * FROM hxm_members WHERE member_id = '$memid'");
$results = mysql_fetch_array($query);
$display = $results['members_display_name'];
?>
    <div id="hotcolumn">
    <a href="survey.php"><img src="sources/images/survey.png"></a>
    <br />
    <br />
    <?php echo "<a href=\"stats.php?m=$display\"><img src=\"sources/images/stats.png\"></a>"; ?>
    </div>