<?php
include('config.php');

$error = '';
if (isset($_POST['login'])) {
    $username = mysql_real_escape_string($_POST['username']);
    $password = $_POST['password'];

    $query = mysql_query("SELECT * FROM hxm_members WHERE name = '$username' OR members_display_name = '$username' LIMIT 1");
    $member = $query ? mysql_fetch_array($query) : false;

    if ($member && password_verify($password, $member['password_hash'])) {
        $loginKey = $member['member_login_key'];
        if ($loginKey == '') {
            $loginKey = md5($member['member_id'] . ':' . microtime(true));
            mysql_query("UPDATE hxm_members SET member_login_key = '" . mysql_real_escape_string($loginKey) . "' WHERE member_id = '" . intval($member['member_id']) . "'");
        }

        $expires = time() + (86400 * 30);
        setcookie('member_id', $member['member_id'], $expires, '/');
        setcookie('pass_hash', $loginKey, $expires, '/');
        setcookie('session_id', md5($member['member_id'] . ':' . $loginKey), $expires, '/');
        header('Location: ' . HOME);
        exit;
    }

    $error = '<p class="error">Invalid username or password.</p>';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 11 February 2007), see www.w3.org" />
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />

  <title>HaxMe - Login</title>
  <link rel="stylesheet" type="text/css" href="sources/style/login/view.css" media="all" />
  <script type="text/javascript" src="sources/style/login/view.js">
</script>
</head>

<body id="main_body">
  <img id="top" src="sources/style/login/top.png" alt="" name="top" />

  <div id="form_container">
    <h1><a>HaxMe Login</a></h1>

    <form id="form_174250" class="appnitro" method="post" action="login.php" name="LOGIN">
      <div class="form_description">
        <h2>HaxMe Login</h2>

        <p>You must login to HaxMe to access mission and articles.</p>
      </div>

      <ul>
        <li id="li_1">
          <label class="description" for="element_1">Username</label>

          <div>
            <input id="element_1" name="username" class="element text medium" type="text"
            maxlength="32" value="" />
          </div>

          <p class="guidelines" id="guide_1"><small>Enter in your username.</small></p>
        </li>

        <li id="li_2">
          <label class="description" for="element_2">Password</label>

          <div>
            <input id="element_2" name="password" class="element text medium" type=
            "password" maxlength="81" value="" />
          </div>

          <p class="guidelines" id="guide_2"><small>Enter in your password.</small></p>
        </li>

        <li class="buttons"><input type="hidden" name="form_id" value="174250" />
        <input id="saveForm" class="button_text" type="submit" name="login" value=
        "Submit" /></li>
      </ul>
    </form>

    <div id="footer">
      <a href="<?php echo HOME; ?>">Return home</a>
    </div>
  </div><img id="bottom" src="sources/style/login/bottom.png" alt="" name="bottom" /><?php
  echo $error;
  ?>
</body>
</html>
