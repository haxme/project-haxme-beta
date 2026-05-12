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
        $all = mysql_query("SELECT * FROM `evideo` WHERE `id`='$id'") or die(mysql_error());
        $row = mysql_fetch_array($all);
        echo ($row['name'])." - ";
    }
}

fetchtemplate();
?>


<!--- Main Box --->
<div id="rightcolumn">
<div style="text-align:left; padding:3px; font-size:9px; margin-top:5px;" class="topbox">
<div align="center" style="font-size:12px; font-weight:700; padding-bottom:2px">HaxMe Videos</div>
&raquo;
Welcome to the HaxMe Videos archive. These are high quality, administrator approved videos. <br />
&raquo;
These videos are hosted on YouTube - and are limited to 10 minutes. <br />
&raquo;
If you wish to submit a video, click <a href="?p=submit">[here]</a>.</div>
<br />
<div class="quicktop" style="border-bottom-style:solid;border-right-style:none;border-left-style:none;border-top-style:none;">HaxMe Videos</div>
<div class="box"><div class="table">
<?PHP
if (is_numeric($_GET['id']) == true) {
    require('sources/interface/db_core.php');
    $id = mysql_real_escape_string(filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));
    $all = mysql_query("SELECT * FROM `evideo` WHERE `id`='$id'") or die(mysql_error());
    $row = mysql_fetch_array($all);
    $embed = trim($row['embed']);
    if (preg_match('/^https?:\/\//i', $embed)) {
        $safe = htmlspecialchars($embed, ENT_QUOTES, 'UTF-8');
        echo '<center><p><a href="' . $safe . '" target="_blank" style="text-decoration:underline;">Open restored video reference</a></p></center></div>';
    } elseif (preg_match('/^[A-Za-z0-9_-]{11}$/', $embed)) {
        $youtube = '<center><object width="500" height="360"><param name="movie"
value="http://www.youtube.com/v/' . $embed . '&hl=en_US&fs=1&rel=0&color1=0x3a3a3a&color2=0x999999&border=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/' . $embed . '&hl=en_US&fs=1&rel=0&color1=0x3a3a3a&color2=0x999999&border=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="500" height="360"></embed></object></center>';
        echo $youtube . "</div>";
    } else {
        echo '<center>No playable YouTube video ID was recovered for this archive entry.</center></div>';
    }
    include("sources/inc/page_copyright.php");
    echo "</div></div>";
} else {
    require('sources/interface/db_core.php');
    $all = mysql_query("SELECT * FROM `evideo` ORDER BY `id`") or die(mysql_error());
    ?>
    <div align="center">
    <table>
    <tr>
    <td><div align="center" style="font-weight:bold; padding-left:8px; font-size:13px;">Video&nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    &nbsp;
    </div></td>
    <td><div align="center" style="font-weight:bold; padding-left:8px; font-size:13px;">Author&nbsp;
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

        <td><div align="center" style="padding-left:8px; padding-top:2px;"><a href="?p=videos&id=<?php echo $row['id'];
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
