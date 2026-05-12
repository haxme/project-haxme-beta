<?php
/*
 * HaxMe beta compatibility configuration.
 *
 * The hxmf engine reads hxcfg.php. The restored alpha pages still include
 * config.php, so this file bridges the old mysql calls to the same Docker
 * environment and schema.
 */

require_once(dirname(__FILE__) . '/hxcfg.php');

// --> DB Information <--
$host = DB_HOST;
$db = DB_NAME;
$usr = DB_USER;
$pwd = DB_PASS;

if (!isset($go) || !$go) {
    $go = false;
    for ($attempt = 0; $attempt < 10; $attempt++) {
        $go = @mysql_connect($host, $usr, $pwd);
        if ($go) {
            break;
        }
        usleep(250000);
    }
    if (!$go) {
        die('Could not connect to database: ' . mysql_error());
    }
}

if (!@mysql_select_db($db, $go)) {
    die('Could not select the database: ' . mysql_error());
}

if (!function_exists('hxm_bootstrap_local_user')) {
    function hxm_bootstrap_local_user() {
        static $bootstrapped = false;
        if ($bootstrapped) {
            return;
        }
        $bootstrapped = true;

        $table = mysql_query("SHOW TABLES LIKE 'hxm_members'");
        if (!$table || mysql_num_rows($table) === 0) {
            return;
        }

        $rawUsername = hxm_env('HXME_USERNAME', 'admin');
        $rawPassword = hxm_env('HXME_PASSWORD', 'haxme');
        $username = mysql_real_escape_string($rawUsername);
        $display = mysql_real_escape_string(hxm_env('HXME_DISPLAY_NAME', $rawUsername));
        $email = mysql_real_escape_string(hxm_env('HXME_EMAIL', $rawUsername . '@localhost'));
        $loginKey = mysql_real_escape_string(hxm_env('HXME_LOGIN_KEY', md5($rawUsername . ':' . $rawPassword)));
        $passwordHash = mysql_real_escape_string(password_hash($rawPassword, PASSWORD_DEFAULT));

        $result = mysql_query("SELECT member_id FROM hxm_members WHERE name = '$username' LIMIT 1");
        if ($result && mysql_num_rows($result) > 0) {
            $row = mysql_fetch_array($result);
            mysql_query("UPDATE hxm_members SET email = '$email', members_display_name = '$display', members_l_display_name = LOWER('$display'), member_login_key = '$loginKey', password_hash = '$passwordHash' WHERE member_id = '" . intval($row['member_id']) . "'");
            return;
        }

        mysql_query("INSERT INTO hxm_members (name, email, members_display_name, members_l_display_name, member_login_key, password_hash, onteam, tuid, tname) VALUES ('$username', '$email', '$display', LOWER('$display'), '$loginKey', '$passwordHash', 'no', '', '')");
    }
}

hxm_bootstrap_local_user();
