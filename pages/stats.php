<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

include('check.php');

$getm = mysql_real_escape_string($_GET['m']);
$query =  mysql_query("SELECT * FROM hxm_members WHERE members_display_name = '$getm'");
$results = mysql_fetch_array($query);
$total = 31;

function printcolor($minput){

$getm = mysql_real_escape_string($_GET['m']);
$query =  mysql_query("SELECT * FROM hxm_members WHERE members_display_name = '$getm'");
$results = mysql_fetch_array($query);

 if($results[$minput] != '1') {
  echo '<font color="red">False</font><br />'; }
 else {
  echo '<font color="green">True</font><br />';
  }
 }

function total(){
$getm = mysql_real_escape_string($_GET['m']);
$query =  mysql_query("SELECT * FROM hxm_members WHERE members_display_name = '$getm'");
$results = mysql_fetch_array($query);

$total = $results['n1'] + $results['n2'] + $results['n3'] + $results['n4'] + $results['n5'] + $results['n6'] + $results['n7'] + $results['n8'] + $results['n9'] + $results['n10'] + $results['n11'] + $results['n12'] + $results['n13'] + $results['n14'] + $results['n15'] + $results['w1'] + $results['w2'] + $results['w3'] + $results['w4'] + $results['c1'] + $results['c2'] + $results['c3'] + $results['c4'] + $results['c5'] + $results['c6'] + $results['c7'] + $results['c8'] + $results['c9'] + $results['c10'] + $results['t1'] + $results['i1'];
return $total;
}


require_once("sources/interface/template.php");
fetchtemplate();

if($results) {

?>

<!--- Main Box --->
<div id="rightcolumn"><div class="quicktop">HaxMe Stats</div>

<div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">User: <?php echo $results['members_display_name']; ?>
</div></div>
<br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">

<center>
<?php echo $results['members_display_name'] . " has completed <font color=\"green\">" . total() . "</font>/<font color=\"orange\">$total</font> missions!"; ?>
</center>

<br />
<br />

Novice 1: <?php printcolor(n1); ?>
Novice 2: <?php printcolor(n2); ?>
Novice 3: <?php printcolor(n3); ?>
Novice 4: <?php printcolor(n4); ?>
Novice 5: <?php printcolor(n5); ?>
Novice 6: <?php printcolor(n6); ?>
Novice 7: <?php printcolor(n7); ?>
Novice 8: <?php printcolor(n8); ?>
Novice 9: <?php printcolor(n9); ?>
Novice 10: <?php printcolor(n10); ?>
Novice 11: <?php printcolor(n11); ?>
Novice 12: <?php printcolor(n12); ?>
Novice 13: <?php printcolor(n13); ?>
Novice 14: <?php printcolor(n14); ?>
Novice 15: <?php printcolor(n15); ?>

<br />

Web 1: <?php printcolor(w1); ?>
Web 2: <?php printcolor(w2); ?>
Web 3: <?php printcolor(w3); ?>
Web 4: <?php printcolor(w4); ?>

<br />

Cryptography 1: <?php printcolor(c1); ?>
Cryptography 2: <?php printcolor(c2); ?>
Cryptography 3: <?php printcolor(c3); ?>
Cryptography 4: <?php printcolor(c4); ?>
Cryptography 5: <?php printcolor(c5); ?>
Cryptography 6: <?php printcolor(c6); ?>
Cryptography 7: <?php printcolor(c7); ?>
Cryptography 8: <?php printcolor(c8); ?>
Cryptography 9: <?php printcolor(c9); ?>
Cryptography 10: <?php printcolor(c10); ?>

<br />

Team 1: <?php printcolor(t1); ?>

<br />

Insane 1: <?php printcolor(i1); ?>

</span></div><br/>
</div><div class="space2"></div>

<?php 
} else {
?>

<!--- Main Box --->
<div id="rightcolumn">
<div class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">HaxMe Stats</div></div>
<br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<center>Look up a user through this page.<br />
<i>?p=stats&m=DISPLAY_NAME</i>
</center>
</span></div><br/>
</div><div class="space2"></div>

<?php 
}
?>
