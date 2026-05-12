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


if($offline == 'false') {
fetchtemplate();
?>
<!--- Main Box --->
    <div id="rightcolumn">
    <div style="text-align:left; padding:3px; font-size:9px; margin-top:5px;" class="topbox">
    <div align="center" style="font-size:12px; font-weight:700; padding-bottom:2px">Team Missions Introduction</div>
    &raquo;
    Welcome to the HaxMe Team Mission category. These missions are designed to complete with a team of friends, and require multiple users. <br />
    &raquo;
    You are required and are limited to 3 members on your team. You are limited to be on one team. Choose your team mates wisely. <br />
    &raquo;
    You can create a team name and work with extended features. Do not abuse the privilege, and have fun!</div>
    <br />
    <div class="quicktop" style="border-bottom-style:solid;border-right-style:none;border-left-style:none;border-top-style:none;">HaxMe Team Missions</div>
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

if(isset($_POST['createteam'])) {
$wegood = 0;
if(strlen($_POST['one']) == 128) {
$wegood = $wegood + 1;
$id1 = $_POST['one'];
}
if(strlen($_POST['two']) == 128 && $_POST['two'] != $_POST['one'] && $_POST['two'] != $_POST['three']) {
$wegood = $wegood + 1;
$id2 = $_POST['two'];
}
if(strlen($_POST['three']) == 128 && $_POST['three'] != $_POST['one'] && $_POST['three'] != $_POST['two']) {
$wegood = $wegood + 1;
$id3 = $_POST['three'];
}
if(strlen($_POST['teamname']) > 4 && strlen($_POST['teamname']) < 32) {
$wegood = $wegood + 1;
$tname = addslashes($_POST['teamname']);
}


#Is id1 real? (Bypass readonly)
$id1q =  mysql_query("SELECT * FROM hxm_members WHERE tuid = '$id1'");
$id1r = mysql_fetch_array($id1q);
if($id1r['tuid'] == $id1 && $id1r['onteam'] != 'yes') {
$id1chk = 'pass';
}
#

#Is id2 real? 
$id2q =  mysql_query("SELECT * FROM hxm_members WHERE tuid = '$id2'");
$id2r = mysql_fetch_array($id2q);
if($id2r['tuid'] == $id2 && $id2r['onteam'] != 'yes') {
$id2chk = 'pass';
}
#

#Is id3 real?
$id3q =  mysql_query("SELECT * FROM hxm_members WHERE tuid = '$id3'");
$id3r = mysql_fetch_array($id3q);
if($id3r['tuid'] == $id3 && $id3r['onteam'] != 'yes') {
$id3chk = 'pass';
}
#

#Is team name available?
$tnameq =  mysql_query("SELECT tname FROM hxm_members WHERE tname = '$tname'");
$tnamer = mysql_fetch_array($tnameq);
if($tnamer['tname'] == '') {
$tnamechk = 'pass';
}
#

If($id1chk == 'pass' && $id2chk == 'pass' && $id3chk == 'pass' && $tnamechk == 'pass' && $wegood == 4) {
$maketeam = 'true';
}

if ($maketeam != 'true') {
$msg = 'Could not make team. Please make sure that all user ID\'s are valid.'; } 
else {
#Lets create the team. 

//Step 1. Assign the next TID in line.
$maxidq =  mysql_query("SELECT max(tid) FROM hxm_members");
$getmaxid = mysql_fetch_array($maxidq);
$tidfinal = $getmaxid['tid'] + 1;
mysql_query("UPDATE hxm_members SET tid = '$tidfinal' WHERE tuid = '$id1'");
mysql_query("UPDATE hxm_members SET tid = '$tidfinal' WHERE tuid = '$id2'");
mysql_query("UPDATE hxm_members SET tid = '$tidfinal' WHERE tuid = '$id3'");
//End of Step 1.

//Step 2. Update tname slots for selected IDs. 
mysql_query("UPDATE hxm_members SET tname = '$tname' WHERE tuid = '$id1'");
mysql_query("UPDATE hxm_members SET tname = '$tname' WHERE tuid = '$id2'");
mysql_query("UPDATE hxm_members SET tname = '$tname' WHERE tuid = '$id3'");
//End of Step 2.

//Step 3. Tell the database that these people are now on a team.
mysql_query("UPDATE hxm_members SET onteam = 'yes' WHERE tuid = '$id1'");
mysql_query("UPDATE hxm_members SET onteam = 'yes' WHERE tuid = '$id2'");
mysql_query("UPDATE hxm_members SET onteam = 'yes' WHERE tuid = '$id3'");
//End of Step 3.

//Step 4. Lets make it official. Lets give each person a role.
mysql_query("UPDATE hxm_members SET tassignment = '1' WHERE tuid = '$id1'");
mysql_query("UPDATE hxm_members SET tassignment = '2' WHERE tuid = '$id2'");
mysql_query("UPDATE hxm_members SET tassignment = '3' WHERE tuid = '$id3'");
//End of Step 4.
}

}

$query =  mysql_query("SELECT * FROM hxm_members WHERE member_id = '$memid'");
$row = mysql_fetch_array($query);

##Lets Declare Our Team Boolean Value Now

$boolean = stripslashes($row['tboolean']);
$onteam = stripslashes($row['onteam']);

##

if ($boolean == "0") {

    $genid = "yes";
    //f == first
    $fteam = "yes";

} else {
    $genid = "no";
    //f == first
    $fteam = "no";
}

if ($genid == "yes") {

function generate_password($p_length) {
$char_list = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$char_list .= "abcdefghijklmnopqrstuvwxyz";
$char_list .= "1234567890";
$random = "";
srand((float) microtime() * 1000000);
for($i = 0; $i < $p_length; $i++) {
$random .= substr($char_list, (rand() % (strlen($char_list))), 1);
}
return $random;
}

$tuidf = generate_password(128);

        #update sql booleans
        mysql_query("UPDATE hxm_members SET tboolean = '1' WHERE member_id = '$memid'");
        mysql_query("UPDATE hxm_members SET istid = '1' WHERE member_id = '$memid'");
        mysql_query("UPDATE hxm_members SET tuid = '$tuidf' WHERE member_id = '$memid'");
    }
else if ($genid == "no") {
    //lets get our previously generate tid
    $tuidcmd =  mysql_query("SELECT tuid FROM hxm_members WHERE member_id = '$memid'");
    $tuidcontainer = mysql_fetch_array($tuidcmd);
    //now lets set it
    $tuidf = stripslashes($tuidcontainer['tuid']);
}

if ($row['onteam'] == 'yes') {

$page = isset($_GET['m']) ? $_GET['m'] : (isset($_GET['id']) ? $_GET['id'] : '');
switch($page){
case "1":
include("playground/t/1/1.php");
break;
default:
include("team-tpl.php");
break;
}
}
 
if ($row['onteam'] != 'yes') {
    fetchtemplate();
    ?>

    <!--- Main Box --->
    <div id="rightcolumn">
    <div style="text-align:left; padding:3px; font-size:9px; margin-top:5px;" class="topbox">
    <div align="center" style="font-size:12px; font-weight:700; padding-bottom:2px">Team Missions Introduction</div>
    &raquo;
    Welcome to the HaxMe Team Mission category. These missions are designed to complete with a team of friends, and require multiple users. <br />
    &raquo;
    You are required and are limited to 3 members on your team. You are limited to be on one team. Choose your team mates wisely. <br />
    &raquo;
    You can create a team name and work with extended features. Do not abuse the privilege, and have fun!</div>
    <br />
    <div class="quicktop" style="border-bottom-style:solid;border-right-style:none;border-left-style:none;border-top-style:none;">HaxMe Team Missions</div>
    <div class="box"><div class="table">

    <div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">

    <!--Team Intro-->
    Team Missions are an in depth and extensive field of challenges that awaits every individual and their colleagues. HaxMe welcomes you to the <b>Team</b> category, and we hope you make great use of this
    opportunity.<br /><br />

    You currently are not enrolled on a team. You can create a team below, or, you can present your team id number to the person who you want to create the team.<br />
    Your unique team id number represents your account and the team system. Do not publically present it to a wide range of people, because once you are on a team, there is no leaving.<br /><br />

    This is a tough decision you will need to make;
    so choose your teammates wisely, and get ready to rumble!<br /><br />

    <form method="post">
    <center>
    <h1>Create Your Team</h1><br />
    Your UID<br /><input type="text" name="one" value="<?php echo $tuidf;?>" READONLY /><br /><br />
    Friend 1<br /><input type="text" name="two" value="Unique ID Code" /><br /><br />
    Friend 2<br /><input type="text" name="three" value="Unique ID Code" /><br /><br />
    Team Name<br /><input type="text" name="teamname" value="Team Name" /><br /><br />
    <input type="submit" value="Create Team!" name="createteam" /><br /><br />
    <?php echo $msg; ?>
    </center>
    </form>
    <br /><br />
    </span></div>
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
<?php }
?>
