<?php
$islogin = 'false';
if (isset($_COOKIE['session_id'])) {
    $memid = intval($_COOKIE['member_id']);
    // <- Member ID
    // Look up member (including member match with cookie)
    $sql = "SELECT member_login_key FROM hxm_members WHERE member_id = $memid";
    $result = mysql_query($sql);
    $member = mysql_fetch_array($result);
    
    // password matches?
    if (!$member || $member['member_login_key'] != $_COOKIE['pass_hash']) {
        $islogin = 'false';
    }
    elseif ($member['member_login_key'] == $_COOKIE['pass_hash']) {
        $islogin = 'true';
    }
}
?>
