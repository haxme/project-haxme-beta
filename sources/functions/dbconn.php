<?php
require_once(dirname(dirname(__DIR__)) . '/config.php');

if (!function_exists('dbconn')) {
    function dbconn($server, $database, $user, $pass) {
        return mysql_connect($server, $user, $pass);
    }
}
?>
