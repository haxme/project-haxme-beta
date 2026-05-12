<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

include('check.php');


session_start();
require_once("sources/interface/template.php");

fetchtemplate();
?>

<!--- Main Box --->
 <div id="rightcolumn">
		 <div class="quicktop" style="border-bottom-style:solid;border-right-style:none;border-left-style:none;border-top-style:none;">What do you want to submit?</div>
		  <div class="box"><div class="table">
  <div align="center">
<table>
  <tr>
<td><div align="center" style="font-weight:bold; padding-left:8px; font-size:13px;">Submission Type</div></td>
 </tr>
 <tr>
<td><div align="center" style="padding-left:8px; padding-top:2px;">
<a href="?p=submit&c=dl" style="text-decoration:underline;">Download</a></div></td>
 </tr>

<td><div align="center" style="padding-left:8px; padding-top:2px;">
<a href="?p=submit&c=paper" style="text-decoration:underline;">Paper</a></div></td>
 </tr>

<td><div align="center" style="padding-left:8px; padding-top:2px;">
<a href="?p=submit&c=video" style="text-decoration:underline;">Video</a></div></td>
 </tr>

</table>
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
