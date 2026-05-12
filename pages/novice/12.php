<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

include('check.php');
session_start();
require_once("sources/interface/template.php");
$memid = intval($_COOKIE['member_id']);
fetchtemplate();
$msg = '';

if (isset($_POST["submit"])) {
    if ($_POST["user"] == 'aradadmin' && $_POST["pass"] == 'xu18a/x94') {
        $query =  mysql_query("UPDATE hxm_members SET n12 = '1' WHERE member_id = '$memid'");
        $msg = 'Mission Complete! Your status has been updated, and you can now download this mission\'s source code from our database!';
    } else {
        $msg = 'Invalid Login Information. Please try again.';
    }
}

?>

<!--- Main Box --->
<div id="rightcolumn"><div class="quicktop">HaxMe Novice Missions</div><div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">Encryption 3</div></div>
<div align="center"><div class="postuser"> By: cwade12c </div></div><br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<script language="JavaScript" type="text/javascript">
var flro,a57492e,g77uik="3c63656e7465723e0d0a3c666f726d206d6574686f643d22706f7374223e200d0a3c6c6162656c3e557365726e616d653c2f6c6162656c3e3c6272202f3e0d0a3c696e70757420747970653d227465787422206e616d653d227573657222202f3e3c6272202f3e0d0a3c6c6162656c3e50617373776f72643c2f6c6162656c3e3c6272202f3e0d0a3c696e70757420747970653d227465787422206e616d653d227061737322202f3e3c6272202f3e0d0a3c696e70757420747970653d227375626d697422206e616d653d227375626d6974222076616c75653d224c6f67696e22202f3e0d0a3c2f666f726d3e0d0a0d0a3c212d2d200d0a2533432532312532442532442532302533362533342533382533392536312536312533332533342533412536352534382535352537382534462534372534352537362536352534342536422533302532302532442532442533450d0a2d2d3e";a57492e='';for(flro=0;flro<g77uik.length;flro+=2){a57492e+=unescape('%'+g77uik.substr(flro,2));}document.write(a57492e);
</script>
<?php 
echo $msg;
?>
</center>
</span></div><br/>
</div><div class="space2"></div></div></div>
<!--- End Main Box --->
