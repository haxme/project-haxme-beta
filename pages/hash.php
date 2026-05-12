<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

include('check.php');


session_start();
require_once("sources/classes/sha256.inc.php");
require_once("sources/interface/template.php");

fetchtemplate();
?>

<!--- Main Box --->
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="css/jquery.js"></script>
<script type="text/javascript" src="css/thickbox.js"></script>
<div id="rightcolumn"><div class="quicktop">HaxMe Hash Calculator</div><div

class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">HaxMe Hash Tools V0.1B</div></div>
<br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<center>
<form method="post" action="">
<input name="hash" type="text" value=""/><br />
<input type="submit" name="calculate" value="Hashify!" />
</form>
</center>
</span></div><br/>
</div><div class="space2"></div>
<?php
if (isset($_POST['calculate'])) {
    $string = $_POST['hash'];
    //HaxMe Hash
    $a = hash("sha512",$string);
    $b = hash("md2",$a);
    $c = hash("md4",$b);
    $d = hash("whirlpool",$c);
    $e = hash("whirlpool",$d);
    $f = hash("sha512",$e);
    $g = hash("md5",$f);
    $output = $g;
    //End HaxMe Hash
    echo '<b>Adler32</b>: ' . hash("adler32",$string);
    echo '<br />';
    echo '<b>Base64</b>: ' . base64_encode($string);
    echo '<br />';
    echo '<b>CRC32</b>: ' . hash("crc32",$string);
    echo '<br />';
    echo '<b>CRC32b</b>: ' . hash("crc32b",$string);
    echo '<br />';
    echo '<b>Gost</b>: ' . hash("gost",$string);
    echo '<br />';
    echo '<b>HaxMe</b>: ' . $output;
    echo '<br />';
    echo '<b>MD2</b>: ' . hash("md2",$string);
    echo '<br />';
    echo '<b>MD4</b>: ' . hash("md4",$string);
    echo '<br />';
    echo '<b>MD5</b>: ' . md5($string);
    echo '<br />';
    echo '<b>RipeMD128</b>: ' . hash("ripemd128",$string);
    echo '<br />';
    echo '<b>RipeMD160</b>: ' . hash("ripemd160",$string);
    echo '<br />';
    echo '<b>SHA1</b>: ' . sha1($string);
    echo '<br />';
    echo '<b>SHA 256</b>: ' . hash("sha256",$string);
    echo '<br />';
    echo '<b>SHA 384</b>: ' . hash("sha384",$string);
    echo '<br />';
    echo '<b>SHA 512</b>: ' . hash("sha512",$string);
    echo '<br />';
    echo '<b>Snefru</b>: ' . hash("snefru",$string);
    echo '<br />';
    echo '<b>Whirlpool</b>: ' . hash("whirlpool",$string);
}
?>
