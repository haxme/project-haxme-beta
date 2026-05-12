<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

include('check.php');


session_start();
require_once("sources/interface/template.php");

function noviceshow()
{
    if (is_numeric($_GET['id']) == true) {
        require('sources/interface/db_core.php');
        $id = mysql_real_escape_string(filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));
        $all = mysql_query("SELECT * FROM `edownload` WHERE `id`='$id'") or die(mysql_error());
        $row = mysql_fetch_array($all);
        echo stripslashes($row['name'])." - ";
    }
}

fetchtemplate();
?>


<!--- Main Box --->
<div id="rightcolumn">
<div style="text-align:left; padding:3px; font-size:9px; margin-top:5px;" class="topbox">
<div align="center" style="font-size:12px; font-weight:700; padding-bottom:2px">HaxMe Downloads</div>
&raquo;
Welcome to the HaxMe Downloads archive. These are high quality, administrator approved downloads. <br />
&raquo;
We do not endorse that these downloads are coded by HaxMe or its members. These are only recommended downloads! <br />
&raquo;
If you appreciate a certain download - donate to the corresponding author, rather than HaxMe.</div>
<br />
<div class="quicktop" style="border-bottom-style:solid;border-right-style:none;border-left-style:none;border-top-style:none;">HaxMe Downloads</div>
<div class="box"><?php if (is_numeric($_GET['id']) == true) { ?><div class="table"><?php } else { ?> <div class="content"><?php } ?>
<?PHP
if (is_numeric($_GET['id']) == true) {
    require('sources/interface/db_core.php');
    $id = mysql_real_escape_string(filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));
    $all = mysql_query("SELECT * FROM `edownload` WHERE `id`='$id'") or die(mysql_error());
    $row = mysql_fetch_array($all);
    $stripped =  stripslashes ($row['url'])."</div>";
    echo strip_back($stripped);
    include("sources/inc/page_copyright.php");
    echo "</div></div>";
} else {
    require('sources/interface/db_core.php');
    $all = mysql_query("SELECT * FROM `edownload` ORDER BY `id`") or die(mysql_error());
    ?>
    <div align="center">
    <table>
    <tr>
    <td><div align="center" style="font-weight:bold; padding-left:8px; font-size:13px;">File&nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    </div></td>
    <td><div align="center" style="font-weight:bold; padding-left:8px; font-size:13px;">From&nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    </div></td>
    </tr>
    <tr>
    <?php while ($row = mysql_fetch_array($all)) {
        if (empty($row)) {
            echo "Error: #004 - Please contact the haXMS administrator. <br /><br />";
        }
        ?>

        <td><div align="center" style="padding-left:8px; padding-top:2px;"><a href="?p=downloads&id=<?php echo $row['id'];
        ?>" style="text-decoration:underline;"><?php echo stripslashes($row['name']);
        ?></a>&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;"><?php echo stripslashes($row['author']);
        ?>&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
    </tr><?php }
    ?>
    </table>
    </div>
    </div>
    <?php include("sources/inc/page_copyright.php");
    ?>
    </div>
</div> <?php }
?>
<!--- End Main Box --->

<!--- Begin Footer --->
<?php footer();
?>
<!--- End Footer --->
</div>
<!--- End Wrapper --->
</body>
<!--- End Body --->
</html>
