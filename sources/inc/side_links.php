<?php
include('config.php');
include('islogin.php');
$nav_stats = '?p=stats';
if ($islogin == 'true') {
    $memid = intval($_COOKIE['member_id']);
    $navquery = mysql_query("SELECT members_display_name FROM hxm_members WHERE member_id = '$memid'");
    $navmember = $navquery ? mysql_fetch_array($navquery) : false;
    if ($navmember) {
        $nav_stats = '?p=stats&m=' . urlencode($navmember['members_display_name']);
    }
}
?>
  <span class="label" style="margin-left:15px;">&nbsp; Main</span>

  <div class="space"></div>

  <div class="surroundlink">
    <span class="nav"><a href="<?php echo HOME;?>" title=
    "<?php echo $main['home-title']; ?>"><?php echo $main['home'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="?p=stats" title=
    "View HaxMe mission progress">Stats</a></span>
  </div><?php
  if ($islogin == 'true') {
      ?>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href=
    "<?php echo $nav_stats; ?>" title=
    "View HaxMe mission progress">My Stats</a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="?p=submit" title=
    "<?php echo $main['content-title']; ?>"><?php echo $main['submit'];?></a></span>
  </div><?php }
  if ($islogin == 'true') {
      ?>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="logout.php" title=
    "<?php echo $main['logout-title']; ?>"><?php echo $main['logout'];
        ?></a></span>
  </div><?php
  } else {
      ?>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="login.php" title=
    "<?php echo $main['login-title']; ?>"><?php echo $main['login'];
        ?></a></span>
  </div><?php
  }
  ?><?php
  if ($islogin == 'true') {
      echo '<br />';
  } else {
      ?>

  <br />
  <?php
  }
  ?> <span class="label" style="margin-left:15px">&nbsp; Missions</span>

  <div class="space"></div>

  <div class="surroundlink">
    <span class="nav"><a href="?p=novice" title=
    "<?php echo $missions['novice-title']; ?>"><?php echo $missions['novice'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="?p=web" title=
    "<?php echo $missions['web-title']; ?>"><?php echo $missions['web'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="?p=crypt" title=
    "<?php echo $missions['crypt-title']; ?>"><?php echo $missions['crypt'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="?p=programming" title=
    "<?php echo $missions['code-title']; ?>"><?php echo $missions['code'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="?p=team" title=
    "<?php echo $missions['team-title']; ?>"><?php echo $missions['team'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="?p=insane" title=
    "<?php echo $missions['insane-title']; ?>"><?php echo $missions['insane'];
    ?></a></span>
  </div><br />
  <span class="label" style="margin-left:15px;">&nbsp; Source</span>

  <div class="space"></div>

  <div class="surroundlink">
    <span class="nav"><a href="?p=msrc" title=
    "<?php echo $source['missrc-title']; ?>"><?php echo $source['missrc'];
    ?></a></span>
  </div>
    <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="?p=haxms" title=
    "<?php echo $source['haxmssrc-title']; ?>"><?php echo $source['haxmssrc'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="?p=base" title=
    "<?php echo $source['softsrc-title']; ?>"><?php echo $source['softsrc'];
    ?></a></span>
  </div><br />
  <span class="label" style="margin-left:15px;">&nbsp; Archive</span>

  <div class="space"></div>

  <div class="surroundlink">
    <span class="nav"><a href="?p=papers" title=
    "<?php echo $exclusives['paper-title']; ?>"><?php echo $exclusives['paper'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="?p=videos" title=
    "<?php echo $exclusives['video-title']; ?>"><?php echo $exclusives['video'];
    ?></a></span>
  </div>

  <div class="surroundlink" style="border-top:none;">
    <span class="nav"><a href="?p=downloads" title=
    "<?php echo $exclusives['download-title']; ?>"><?php echo $exclusives['download'];
    ?></a></span>
  </div><br />
  <span class="label" style="margin-left:15px;">&nbsp; Services</span>

  <div class="space"></div>

  <div class="surroundlink">
    <span class="nav"><a href="?p=hash" title=
    "<?php echo $tools['hasht-title']; ?>"><?php echo $tools['hasht']; ?></a></span>
  </div>

<?php 
/*
  <div class="surroundlink">
    <span class="nav"><a href="?p=radio" title=
    "<?php echo $tools['radiot-title']; ?>"><?php echo $tools['radiot']; ?></a></span>
  </div>

  <div class="surroundlink">
    <span class="nav"><a href="?p=theater" title=
    "<?php echo $tools['theatert-title']; ?>"><?php echo $tools['theatert']; ?></a></span>
  </div> 
*/
?>
