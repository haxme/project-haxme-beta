<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

include('check.php');
$memid = intval($_COOKIE['member_id']);
require_once("sources/interface/template.php");
$offline = 'true';

if($offline == 'true') {
fetchtemplate();
?>

<!--- Main Box --->
    <div id="rightcolumn">
    <div style="text-align:left; padding:3px; font-size:9px; margin-top:5px;" class="topbox">
    <div align="center" style="font-size:12px; font-weight:700; padding-bottom:2px">Programming Missions Introduction</div>
    &raquo;
    Welcome to the HaxMe Programming Mission category. These missions are designed to challenge, and, tutor you. <br />
    &raquo;
    While you can complete these missions, none of your completion is stored in our DB compared to other missions. <br />
    &raquo;
    We recommend that you complete and study each mission carefully - develop good work habits!</div>
    <br />
    <div class="quicktop" style="border-bottom-style:solid;border-right-style:none;border-left-style:none;border-top-style:none;">HaxMe Programming Missions</div>
    <div class="box"><div class="table">

    <div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">

    <center>
    <h1>Uh-oh.</h1>
    <br />
    <h2>This page is undergoing maintenance. Look for news regarding this page in the <u>near</u> future!</h2>
    </center>
    </div>
    </div>
    <?php include("sources/inc/page_copyright.php"); ?>
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

<?php 
die(); 
}
//will update soon
?>
