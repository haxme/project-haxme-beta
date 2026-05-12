<?php
include('config.php');

$expires = time() - 3600;
setcookie('member_id', '', $expires, '/');
setcookie('pass_hash', '', $expires, '/');
setcookie('session_id', '', $expires, '/');

header('Location: ' . HOME);
exit;
?>
