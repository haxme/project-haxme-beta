<?php
/* 
 * Software: haXMS 0.1 Pre-Release [Alpha]
 * License: GNU OpenSource Restricted || Pre-Release, Permission is currently required
 * Author: cwade12c
 * Copyright: 2010 - Some Rights Reserved
 * Site: http://haxme.org/
 * 
 *  #####################################
 *  Please note, that most files are currently encoded to protect the unstable
 *  release of this software. While some source is available from the official site
 *  itself, please note that files are currently encoded to protect special server
 *  configurations and schemes. We 100% encourage opensource, and will keep 
 *  publishing source as we move along.
 *  #####################################
*/

//include('sources/interface/lockdown.php');
include('config.php');
$redir = HOME;
$login = "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\"
    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">

<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
  <meta http-equiv=\"refresh\" content=
  \"0;url=$redir/login.php\" />

  <title>Redirecting you...</title>
</head>

<body>
</body>
</html>"; 
$memid = intval($_COOKIE['member_id']);
$passhash = $_COOKIE['pass_hash'];
//member display name
$disquery = "SELECT members_display_name FROM hxm_members WHERE member_id = $memid";
$disresult = mysql_query($disquery);
$dismember = mysql_fetch_array($disresult);
$display_name = $dismember ? $dismember['members_display_name'] : '';
//end

//Are there existing cookies?
if ($memid != '0' && $passhash != '0') {
    $sql = "SELECT member_login_key FROM hxm_members WHERE member_id = $memid";
    $result = mysql_query($sql);
    $member = mysql_fetch_array($result);
    
    // password matches?
    if (!$member || $member['member_login_key'] != $_COOKIE['pass_hash']) {
        echo $login;
        die();
    }
} else {
    echo $login;
    die();
}
?>
