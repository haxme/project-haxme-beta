USE haxme;

DELETE FROM epaper
WHERE name = 'HaxMe Open Source Restoration';

DELETE FROM edownload
WHERE name = 'HaxMe Source Archive';

DELETE FROM evideo
WHERE name = 'HaxMe Video Placeholder';

DELETE FROM codebase
WHERE name IN (
  'Assembly placeholder',
  'Basic placeholder',
  'C placeholder',
  'HTML placeholder',
  'Java placeholder',
  'Perl placeholder',
  'PHP placeholder',
  'Python placeholder',
  'Ruby placeholder'
);

INSERT INTO epaper (id, name, author, date, paper) VALUES
(1, 'haXMS 0.1 Alpha About', 'cwade12c', '2010-06-16',
'<h2>haXMS - HaxMe Cross Management System</h2>
<p><strong>Version:</strong> 0.1 Pre-Release Alpha<br />
<strong>Author:</strong> cwade12c<br />
<strong>Original site:</strong> haxme.org</p>
<p>This software and its source code is not the entire site or source in its entirety. CSS files, images, and JavaScript were stripped from the original alpha source release. The files contained in the release are structure files showing how haxme.org operated, and require a basic understanding of PHP, HTML, and CSS before use.</p>
<p>The original archive notes that future source releases were expected to include more source files, and that roughly 30 to 40 files were left out of this release.</p>
<h3>Credits</h3>
<p>GeSHi source highlighter, Nanolink SHA256 class, VulgarisOverIP PHPGMailer, and SoulBlade102 for the RSOC/index template that HaxMe recoded around.</p>'),
(2, 'Project HaxMe Beta Introduction', 'cwade12c', '2010-05-28',
'<h2>Project HaxMe</h2>
<p>Project HaxMe was presented as an open source security training site built around challenges, community, and technical learning. The beta-era introduction described the project as a place to learn website security, networking, programming, and related technical subjects.</p>
<p>The site emphasized legal security education, open source code, and community participation through missions, submitted content, source-code releases, and team challenges.</p>'),
(3, 'HaxMe Mission Source Notes', 'cwade12c', '2010-06-16',
'<h2>Mission Source Notes</h2>
<p>The restored tree includes source-code views for the Novice and Web mission tracks under the Mission Source section. These source pages were gated by completion status in the original application, but the source fragments are present locally in <code>sources/inc/source</code>.</p>
<p>The CodeBase entries seeded here are drawn from those restored local source fragments and the bundled haXMS alpha source archive.</p>')
ON DUPLICATE KEY UPDATE
  name = VALUES(name),
  author = VALUES(author),
  date = VALUES(date),
  paper = VALUES(paper);

INSERT INTO edownload (id, name, author, url) VALUES
(1, 'haXMS 0.1 Alpha Source ZIP', 'cwade12c',
'<p>The original haXMS 0.1 Alpha source archive bundled with this reconstruction.</p>
<p><a href="extension/downloads/131/haXMS%200.1%20%5BAlpha%5D.zip">Download haXMS 0.1 Alpha source ZIP</a></p>'),
(2, 'Crypto Mission 2 Encrypted Email', 'cwade12c',
'<p>Recovered text fixture used by Crypto Mission 2.</p>
<p><a href="extension/downloads/c2.txt">View c2.txt</a></p>'),
(3, 'Crypto Mission 3 SQL Backup', 'cwade12c',
'<p>Recovered SQL backup fixture used by Crypto Mission 3.</p>
<p><a href="extension/downloads/c3.sql">Download c3.sql</a></p>'),
(4, 'Crypto Mission 4 ZIP Fixture', 'cwade12c',
'<p>Password-protected archive fixture used by Crypto Mission 4.</p>
<p><a href="extension/downloads/c4.zip">Download c4.zip</a></p>'),
(5, 'Crypto Mission 5 RAR Fixture', 'cwade12c',
'<p>Password-protected archive fixture used by Crypto Mission 5.</p>
<p><a href="extension/downloads/c5.rar">Download c5.rar</a></p>'),
(6, 'Crypto Mission 8 Stego Bitmap', 'cwade12c',
'<p>Bitmap fixture used by Crypto Mission 8.</p>
<p><a href="extension/downloads/c8.bmp">Download c8.bmp</a></p>')
ON DUPLICATE KEY UPDATE
  name = VALUES(name),
  author = VALUES(author),
  url = VALUES(url);

INSERT INTO evideo (id, name, author, embed) VALUES
(1, 'BrandAppz YouTube Channel', 'BrandAppz', 'http://youtube.com/brandappz')
ON DUPLICATE KEY UPDATE
  name = VALUES(name),
  author = VALUES(author),
  embed = VALUES(embed);

INSERT INTO codebase (id, lang, name, author, content) VALUES
(101, 'php', 'Novice 1 PlainSRC Password Form', 'cwade12c',
'<pre>&lt;form method=&quot;post&quot;&gt;
&lt;font size=&quot;5&quot;&gt;Email&lt;/font&gt;&lt;br /&gt;
&lt;!-- Email Address is: email44@domainhive.tld --&gt;
&lt;input type=&quot;text&quot; name=&quot;email&quot;&gt;&lt;br /&gt;
&lt;font size=&quot;5&quot;&gt;Password&lt;/font&gt;&lt;br /&gt;
&lt;!-- Password is: xx4455aa --&gt;
&lt;input type=&quot;password&quot; name=&quot;password&quot;&gt;&lt;br /&gt;&lt;br /&gt;
&lt;input type=&quot;submit&quot; name=&quot;submit&quot; value=&quot;Login&quot;&gt;
&lt;/form&gt;

&lt;?php
if (isset($_POST[&quot;submit&quot;])) {
  if ($_POST[&quot;email&quot;] == &quot;email44@domainhive.tld&quot; &amp;&amp; $_POST[&quot;password&quot;] == &quot;xx4455aa&quot;) {
    // victory update
  }
}
?&gt;</pre>'),
(102, 'php', 'Novice 4 Password Reminder Mailer', 'cwade12c',
'<pre>&lt;?php
if (isset($_POST[&quot;submit&quot;])) {
  if ($_POST[&quot;password&quot;] == &quot;sAx391lAAxz&quot;) {
    // victory update
  }
}

if (isset($_POST[&quot;forgot&quot;])) {
  $emailcontainer = $_POST[&quot;forgot&quot;];
  require_once(&quot;class.phpgmailer.php&quot;);
  $mail = new PHPGMailer();
  $mail-&gt;Username = &quot;email@gmail.com&quot;;
  $mail-&gt;Password = &quot;password&quot;;
  $mail-&gt;From = &quot;email2@gmail.com&quot;;
  $mail-&gt;FromName = &quot;HaxMe&quot;;
  $mail-&gt;Subject = &quot;HaxMe || Novice Mission 4&quot;;
  $mail-&gt;AddAddress($emailcontainer);
  $mail-&gt;Body = &quot;Dear administrator, your password is: sAx391lAAxz&quot;;
  $mail-&gt;Send();
}
?&gt;</pre>'),
(103, 'html', 'Novice 3 Client Password Check', 'cwade12c',
'<pre>&lt;script language=&quot;Javascript&quot;&gt;
CallPassword = &quot;Javascript&quot;;
function check(x) {
  if (x == CallPassword) {
    alert(&quot;Congratulations, you have successfully completed Novice Mission 3.&quot;);
  } else {
    alert(&quot;Invalid password. Please try again.&quot;);
  }
}
&lt;/script&gt;
&lt;h3&gt;Please Provide Password&lt;/h3&gt;
&lt;input type=&quot;password&quot; id=&quot;pass&quot; value=&quot;&quot;&gt;
&lt;button onclick=&quot;javascript:check(document.getElementById(&amp;quot;pass&amp;quot;).value)&quot;&gt;Login&lt;/button&gt;</pre>'),
(104, 'php', 'Web 1 Grind Download Include Selector', 'cwade12c',
'<pre>&lt;?php
error_reporting(0);
$type = &quot;lite&quot;;
if (isset($_GET[&quot;dl&quot;])) {
  $type = $_GET[&quot;dl&quot;];
}

if (strstr($type, &quot;http://&quot;)) {
  $type = &quot;4768993&quot;;
}

$type = str_replace(&quot;http://&quot;, &quot;&quot;, $type);
$type = str_replace(&quot;/&quot;, &quot;&quot;, $type);
$type = str_replace(&quot;\\\\&quot;, &quot;&quot;, $type);
$type = str_replace(&quot;../&quot;, &quot;&quot;, $type);
$type = str_replace(&quot;..&quot;, &quot;&quot;, $type);
require($type . &quot;.php&quot;);
?&gt;</pre>'),
(105, 'php', 'Web 2 Investive Include Gate', 'cwade12c',
'<pre>&lt;?php
error_reporting(0);
$page = &quot;general&quot;;
if (isset($_GET[&quot;issue&quot;])) {
  $page = $_GET[&quot;issue&quot;];
}

if (strstr($page, &quot;../../../../etc/passwd&quot;)) {
  $page = &quot;etc3971115a&quot;;
}
if (strstr($page, &quot;../../../../etc/shadow&quot;)) {
  $page = &quot;shad301933&quot;;
}
if (strstr($page, &quot;http://&quot;)) {
  $page = &quot;hacker&quot;;
}

$page = str_replace(&quot;http://&quot;, &quot;&quot;, $page);
$page = str_replace(&quot;/&quot;, &quot;&quot;, $page);
$page = str_replace(&quot;\\\\&quot;, &quot;&quot;, $page);
$page = str_replace(&quot;../&quot;, &quot;&quot;, $page);
$page = str_replace(&quot;..&quot;, &quot;&quot;, $page);
require($page . &quot;.php&quot;);
?&gt;</pre>'),
(106, 'php', 'Web 4 FileFold Upload Filter', 'cwade12c',
'<pre>&lt;?php
$allowed_foldtypes = array(&quot;.jpg&quot;, &quot;.png&quot;);
$hax_foldtypes = array(
  &quot;.php.jpg&quot;, &quot;.php.gif&quot;, &quot;.php.tif&quot;, &quot;.php.png&quot;, &quot;.php.bmp&quot;,
  &quot;.pl.jpg&quot;, &quot;.pl.gif&quot;, &quot;.pl.tif&quot;, &quot;.pl.png&quot;, &quot;.pl.bmp&quot;
);
$max_foldsize = 1048576;
$filename = $_FILES[&quot;foldfile&quot;][&quot;name&quot;];
$ext = substr($filename, strpos($filename, &quot;.&quot;), strlen($filename) - 1);

if (in_array($ext, $hax_foldtypes)) {
  die();
}
if (!in_array($ext, $allowed_foldtypes)) {
  die(&quot;&quot;);
}
if (filesize($_FILES[&quot;foldfile&quot;][&quot;tmp_name&quot;]) &gt; $max_foldsize) {
  die();
}
?&gt;</pre>'),
(107, 'php', 'haXMS Archive Table Renderer', 'cwade12c',
'<pre>&lt;?php
if (is_numeric($_GET[&quot;id&quot;]) == true) {
  require(&quot;interface/db_core.php&quot;);
  $id = mysql_real_escape_string(filter_var($_GET[&quot;id&quot;], FILTER_SANITIZE_NUMBER_INT));
  $all = mysql_query(&quot;SELECT * FROM archive_table WHERE id = &quot; . $id) or die(mysql_error());
  $row = mysql_fetch_array($all);
  echo stripslashes($row[&quot;content&quot;]);
} else {
  require(&quot;interface/db_core.php&quot;);
  $all = mysql_query(&quot;SELECT * FROM archive_table ORDER BY id&quot;) or die(mysql_error());
  while ($row = mysql_fetch_array($all)) {
    echo stripslashes($row[&quot;title&quot;]) . &quot; by &quot; . stripslashes($row[&quot;author&quot;]);
  }
}
?&gt;</pre>'),
(108, 'php', 'Exploit DB Download Proxy', 'cwade12c',
'<pre>&lt;?php
$param = $_GET[&quot;id&quot;];
$result = preg_replace(&quot;/[^0-9]/&quot;, &quot;&quot;, $param);

if (empty($result)) {
  die(&quot;Invalid ID.&quot;);
}

$url = &quot;http://exploit-db.com/download/$result&quot;;
$content = file_get_contents($url);

if (empty($content)) {
  die(&quot;Invalid ID.&quot;);
}

$content = htmlentities($content);
echo str_replace(&quot;\n&quot;, &quot;&lt;br /&gt;&quot;, $content);
?&gt;</pre>')
ON DUPLICATE KEY UPDATE
  lang = VALUES(lang),
  name = VALUES(name),
  author = VALUES(author),
  content = VALUES(content);

INSERT IGNORE INTO submissions (id, cat, author, title, content, embed, url, `from`) VALUES
(1, 'paper', 'restored-archive', 'haXMS 0.1 Alpha About',
 '<p>Recovered from extension/downloads/131/haXMS 0.1 [Alpha].zip.</p>', NULL, NULL, 'cwade12c'),
(2, 'paper', 'restored-archive', 'Project HaxMe Beta Introduction',
 '<p>Recovered from the legacy guest-news/project introduction text.</p>', NULL, NULL, 'cwade12c'),
(3, 'url', 'restored-archive', 'haXMS 0.1 Alpha Source ZIP',
 NULL, NULL, 'extension/downloads/131/haXMS%200.1%20%5BAlpha%5D.zip', 'cwade12c'),
(4, 'video', 'restored-archive', 'BrandAppz YouTube Channel',
 NULL, 'http://youtube.com/brandappz', NULL, 'BrandAppz');

UPDATE codebaset
SET total = (
  SELECT COALESCE(SUM(CHAR_LENGTH(content) - CHAR_LENGTH(REPLACE(content, '\n', '')) + 1), 0)
  FROM codebase
)
WHERE id = 1;
