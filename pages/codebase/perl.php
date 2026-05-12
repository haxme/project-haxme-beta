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
<div class="quicktop" style="border-bottom-style:solid;border-right-style:none;border-left-style:none;border-top-style:none;">
<a href="?p=base">CodeBase</a> &raquo; PERL
</div>
<div class="box"><?php if(is_numeric($_GET['id']) == true) { ?><div class="content"> <?php } else { ?> <div class="table"> <?php } ?>
<?PHP
if (is_numeric($_GET['id']) == true) {
    require('sources/interface/db_core.php');
    $id = mysql_real_escape_string(filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));
    $all = mysql_query("SELECT * FROM `codebase` WHERE `id`='$id' && `lang`='perl'") or die(mysql_error());
    $row = mysql_fetch_array($all);
    echo stripslashes($row['content'])."</div>";
    include("sources/inc/page_copyright.php");
    echo "</div></div>";
} else {
    require('sources/interface/db_core.php');
    $all = mysql_query("SELECT * FROM `codebase` WHERE `lang` = 'perl' ORDER BY `id`") or die(mysql_error());
    ?>
    <div align="center">
    <table>
    <tr>
    <td><div align="center" style="font-weight:bold; padding-left:8px; font-size:13px;">Release&nbsp;
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
        
        <td><div align="center" style="padding-left:8px; padding-top:2px;"><a href="?p=base&lang=perl&id=<?php echo $row['id'];
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
