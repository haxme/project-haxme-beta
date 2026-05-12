<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

include('check.php');

session_start();
require_once("sources/interface/template.php");

function insanseshow()
{
    if (is_numeric($_GET['id']) == true) {
        require('sources/interface/db_core.php');
        $id = mysql_real_escape_string(filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));
        $all = mysql_query("SELECT * FROM `insane` WHERE `id`='$id'") or die(mysql_error());
        $row = mysql_fetch_array($all);
        echo stripslashes($row['name'])." - ";
    }
}

fetchtemplate();
?>


<!--- Main Box --->
<div id="rightcolumn">
<div style="text-align:left; padding:3px; font-size:9px; margin-top:5px;" class="topbox">
<div align="center" style="font-size:12px; font-weight:700; padding-bottom:2px">Insane Missions Introduction</div>
&raquo;
These missions are meant as a challenge to those who have completed all other HaxMe missions. <br />
&raquo;
All of these missions are targeted to include methods you may have learned from all other HaxMe missions, and the some. <br />
&raquo;
Do whatever it takes to complete these missions. Not everyone will be able to complete these missions.</div>
<br />
<div class="quicktop" style="border-bottom-style:solid;border-right-style:none;border-left-style:none;border-top-style:none;">HaxMe Insane Missions</div>
<div class="box"><div class="table">
<?PHP
if (is_numeric($_GET['id']) == true) {
    require('sources/interface/db_core.php');
    $id = mysql_real_escape_string(filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));
    $all = mysql_query("SELECT * FROM `insane` WHERE `id`='$id'") or die(mysql_error());
    $row = mysql_fetch_array($all);
    echo stripslashes($row['content'])."</div>";
    include("sources/inc/page_copyright.php");
    echo "</div></div>";
} else {
    require('sources/interface/db_core.php');
    $all = mysql_query("SELECT * FROM `insane` ORDER BY `id`") or die(mysql_error());
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
    <td><div align="center" style="font-weight:bold; padding-left:8px; font-size:13px;">Host&nbsp;
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
        
        <td><div align="center" style="padding-left:8px; padding-top:2px;"><a href="?p=insane&id=<?php echo $row['id'];
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
        <td><div align="center" style="padding-left:8px; padding-top:2px;"><?php echo stripslashes($row['host']);
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
