<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

include('check.php');

require_once("sources/interface/template.php");

fetchtemplate();
?>


<!--- Main Box --->
<div id="rightcolumn">
<div style="text-align:left; padding:3px; font-size:9px; margin-top:5px;" class="topbox">
<div align="center" style="font-size:12px; font-weight:700; padding-bottom:2px">Novice Missions Introduction</div>
&raquo;
Welcome to the HaxMe Novice Mission category. These missions are best suited if you are new to hacking or if you are new to web syntax. <br />
&raquo;
Mission difficulty is based off of logic-strain and mission intensity. The higher the difficulty, the more you will need to think. <br />
&raquo;
We urge you to try and complete these missions in a browser with 0 plugins. It will improve your knowledge immensely.</div>
<br />
<div class="quicktop" style="border-bottom-style:solid;border-right-style:none;border-left-style:none;border-top-style:none;">HaxMe Novice Missions</div>
<div class="box"><div class="table">
<?PHP
if (is_numeric($_GET['id']) == true) {
    require('sources/interface/db_core.php');
    $id = mysql_real_escape_string(filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));
    $all = mysql_query("SELECT * FROM `novice` WHERE `id`='$id'") or die(mysql_error());
    $row = mysql_fetch_array($all);
    echo stripslashes($row['content'])."</div>";
    include("sources/inc/page_copyright.php");
    echo "</div></div>";
} else {
    require('sources/interface/db_core.php');
    $all = mysql_query("SELECT * FROM `novice` ORDER BY `id`") or die(mysql_error());
    ?>
    <div align="center">
    <table>
    <tr>
    <td><div align="center" style="font-weight:bold; padding-left:8px; font-size:13px;">Mission&nbsp;
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
    <td><div align="center" style="font-weight:bold; padding-left:8px; font-size:13px;">Difficulty&nbsp;
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
        
        <td><div align="center" style="padding-left:8px; padding-top:2px;"><a href="?p=novice&id=<?php echo $row['id'];
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
        <td><div align="center" style="padding-left:8px; padding-top:2px;"><?php echo stripslashes($row['difficulty']);
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
