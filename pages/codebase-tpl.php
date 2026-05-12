<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

include('check.php');
require('sources/interface/db_core.php');


session_start();
require_once("sources/interface/template.php");

$all = mysql_query("SELECT * FROM `codebaset` WHERE `id`='1'") or die(mysql_error());
$row = mysql_fetch_array($all);
$lines = $row['total'];
$mathoutput = 1000000 - $lines;
$countdown = number_format($mathoutput);

fetchtemplate();
?>

<!--- Main Box --->
 <div id="rightcolumn">
		 <div class="quicktop" style="border-bottom-style:solid;border-right-style:none;border-left-style:none;border-top-style:none;">What do you want to submit?</div>
		  <div class="box"><div class="table">
  <div align="center">
  <h1><?php echo $countdown; ?> more lines to go.</h1>
  <p>Get involved. HaxMe is supporting the OpenSource community, by donating 1,000,000 lines of code from various applications. Our donation is constantly    growing and is always public and available. Help us give a million lines so we can help support the OSI and the freedom of knowledge! Submit your code [here], and once approved - your product will be published here, for anyone on the net to download. The credits of your submission will be in your name and in HaxMe's name. Thanks for your support!</p>
  </div>
  <div id="cb" align="center">
  <a href="?p=base&lang=asm"><img src="sources/images/codebase/asm.png"></a><br />
  <a href="?p=base&lang=basic"><img src="sources/images/codebase/basic.png"></a><br />
  <a href="?p=base&lang=c"><img src="sources/images/codebase/c.png"></a><br />
  <a href="?p=base&lang=html"><img src="sources/images/codebase/html.png"></a><br />
  <a href="?p=base&lang=java"><img src="sources/images/codebase/java.png"></a><br />
  <a href="?p=base&lang=perl"><img src="sources/images/codebase/perl.png"></a><br />
  <a href="?p=base&lang=php"><img src="sources/images/codebase/php.png"></a><br />
  <a href="?p=base&lang=python"><img src="sources/images/codebase/python.png"></a><br />
  <a href="?p=base&lang=ruby"><img src="sources/images/codebase/ruby.png"></a>
  </div>
    </div>
    <?php include("sources/inc/page_copyright.php");?>
	  </div>
        </div>
<!--- End Main Box --->

<!--- Begin Footer --->
<?php footer(); ?>
<!--- End Footer --->
</div>
<!--- End Wrapper --->
</body>
<!--- End Body --->
</html>
