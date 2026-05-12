<?php

include('check.php');


session_start();
require_once("sources/interface/template.php");

fetchtemplate();
?>

<!--- Main Box --->
 <div id="rightcolumn">
		 <div class="quicktop" style="border-bottom-style:solid;border-right-style:none;border-left-style:none;border-top-style:none;">HaxMe Mission Source Code</div>
		  <div class="box"><div class="table">
  <div align="center">
<table>
  <tr>
<td><div align="center" style="font-weight:bold; padding-left:8px; font-size:13px;">Mission Source</div></td>
 </tr>
 <tr>
<td><div align="center" style="padding-left:8px; padding-top:2px;">
<a href="?p=msrc&t=2&s=1" style="text-decoration:underline;">Grind</a></div></td>
 </tr>
<td><div align="center" style="padding-left:8px; padding-top:2px;">
<a href="?p=msrc&t=2&s=2" style="text-decoration:underline;">Investive</a></div></td>
 </tr>
<td><div align="center" style="padding-left:8px; padding-top:2px;">
<a href="?p=msrc&t=2&s=3" style="text-decoration:underline;">Fly-Host</a></div></td>
 </tr>
<td><div align="center" style="padding-left:8px; padding-top:2px;">
<a href="?p=msrc&t=2&s=4" style="text-decoration:underline;">FileFold</a></div></td>
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
