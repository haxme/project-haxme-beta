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
<div style="text-align:left; padding:3px; font-size:9px; margin-top:5px;" class="topbox">
<div align="center" style="font-size:12px; font-weight:700; padding-bottom:2px">Cryptography Missions Introduction</div>
&raquo;
Welcome to the HaxMe Cryptography Mission category. These missions are best suited if you are learning to become a cracker. <br />
&raquo;
Mission difficulty is based off of encryption strength. The higher the difficulty, the harder the encryption. <br />
&raquo;
We urge you to try and complete these missions with CLI tools. <b>Challenge</b>: <i>code the tools yourself</i>!</div>
<br />
<div class="quicktop" style="border-bottom-style:solid;border-right-style:none;border-left-style:none;border-top-style:none;">HaxMe Cryptography Missions</div>
<div class="box"><div class="table">
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

        
        <td><div align="center" style="padding-left:8px; padding-top:2px;"><a href="?p=crypt&id=1" style="text-decoration:underline;">Custom Crypt</a>&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">cwade12c&nbsp;
        &nbsp;

        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">1/10&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>

    </tr>
        <td><div align="center" style="padding-left:8px; padding-top:2px;"><a href="?p=crypt&id=2" style="text-decoration:underline;">Textbook</a>&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">cwade12c&nbsp;

        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">1/10&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;

        </div></td>
    </tr>
        <td><div align="center" style="padding-left:8px; padding-top:2px;"><a href="?p=crypt&id=3" style="text-decoration:underline;">SQL Backup</a>&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">cwade12c&nbsp;

        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">2/10&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;

        </div></td>
    </tr>
        <td><div align="center" style="padding-left:8px; padding-top:2px;"><a href="?p=crypt&id=4" style="text-decoration:underline;">ZIP Recovery</a>&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">cwade12c&nbsp;

        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">3/10&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;

        </div></td>
    </tr>
        <td><div align="center" style="padding-left:8px; padding-top:2px;"><a href="?p=crypt&id=5" style="text-decoration:underline;">RAR Recovery</a>&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">cwade12c&nbsp;

        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">4/10&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;

        </div></td>
    </tr>
        <td><div align="center" style="padding-left:8px; padding-top:2px;"><a href="?p=crypt&id=6" style="text-decoration:underline;">Dead On</a>&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">cwade12c&nbsp;

        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">6/10&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;

        </div></td></tr>
        <td><div align="center" style="padding-left:8px; padding-top:2px;"><a href="?p=crypt&id=7" style="text-decoration:underline;">Mathematical Crypt</a>&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">cwade12c&nbsp;

        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">5/10&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;

        </div></td></tr>
        <td><div align="center" style="padding-left:8px; padding-top:2px;"><a href="?p=crypt&id=8" style="text-decoration:underline;">RGB</a>&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">cwade12c&nbsp;

        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">7/10&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;

        </div></td></tr>
        <td><div align="center" style="padding-left:8px; padding-top:2px;"><a href="?p=crypt&id=9" style="text-decoration:underline;">DeepCrypt 1</a>&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">cwade12c&nbsp;

        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">8/10&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;

        </div></td></tr>
        <td><div align="center" style="padding-left:8px; padding-top:2px;"><a href="?p=crypt&id=10" style="text-decoration:underline;">DeepCrypt 2</a>&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">cwade12c&nbsp;

        &nbsp;
        &nbsp;
        &nbsp;
        </div></td>
        <td><div align="center" style="padding-left:8px; padding-top:2px;">10/10&nbsp;
        &nbsp;
        &nbsp;
        &nbsp;

        </div></td></tr>
    </table>
    </div>
    </div>
    <?php include("sources/inc/page_copyright.php");
    ?>
    </div>
</div> 
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
