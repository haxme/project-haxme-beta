<?php
  //Lets validate our functions.
function clean_input($string){
  if(preg_match('/^[ 0-9a-zA-Z\-\_\,]*$/', $string) == 1) { return true; } else { return false; }
}

//Hxmnews
 function hxmnews($month)
 {
        $month = (int)$month;

	if(checkdate($month,10,2010) == FALSE) 
	{
		require('db_core.php');
		$query = "SELECT id, title, author, post, DATE_FORMAT(date, '%M %d, %Y') as sd FROM news_posts ORDER BY date DESC LIMIT 3";
		$result = @mysql_query($query);
		
		if($result) 
		{
			while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
			{
				echo stripslashes('<div class="newsbox"><div align="center"><div class="name">'.$row['title'].'</div></div><div align="center"><div class="postuser"> By: '.$row['author'].' ~ Posted On: '.$row['sd'].
'</div></div><br /><div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">'.$row['post'].'</span></div><br/>
</div><div class="space2"></div>');

			}
		}
		else
		{
			echo 'Updating news archive. Please check back later! :)';
		}
	}
	else
	{
		require('db_core.php');
		$query = "SELECT id, title, author, post, DATE_FORMAT(date, '%M %d, %Y') as sd FROM news_posts WHERE DATE_FORMAT(date, '%m') = $month ORDER BY date DESC";
		$result = @mysql_query($query);
		
		if($result)
		{
			while($row = mysql_fetch_array($result, MYSQL_ASSOC))
			{
				echo '<div class="newsbox"><div align="center"><div class="name">'.$row['title'].'</div></div><div align="center"><div class="postuser"> By: '.$row['author'].' ~ Posted On: '.$row['sd'].
'</div></div><br /><div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">'.$row['post'].'</span></div><br/>
</div><div class="space2"></div>';
			}
		}
		else 
		{
			echo 'Updating news archive. Please check back later! :)';
		}
	}
}

  //Guests
function guestnews() {

?>
  <div class="newsbox">
    <div align="center">
      <div class="name">
        Project: HaxMe
      </div>
    </div>

    <div align="center">
      <div class="postuser">
        By: cwade12c @ 5/28/2010
      </div>
    </div><br />

    <div align="left">
      <div id="welcome">
        <span class="text" style="padding-left:2px;padding-right:2px;"><font size=
        "2">Welcome to Project: HaxMe. We are currently within our Beta stage; meaning,
        there may be a few bugs, and the site appearance + system is not finalized. The
        database + account system is however finalized; so any change in the future will
        not affect your account/status.</font></span>
      </div><span class="text" style="padding-left:2px;padding-right:2px;"><br /></span>

      <h1><span class="text" style="padding-left:2px;padding-right:2px;"><a href="#" id=
      "whata" name="whata">[What]</a></span></h1><span class="text" style=
      "padding-left:2px;padding-right:2px;"><br /></span>

      <div id="what">
        <span class="text" style="padding-left:2px;padding-right:2px;"><font size=
        "2">Project HaxMe is an extensive project powered by rich content, cunning
        challenges, and a powerful community. Our thing is security, computers, and...
        just about anything technical related. Rather you want to learn how to
        hack/protect your website, you want to learn networking - or, you just want to
        learn programming; we can help you get started today.</font></span>
      </div><span class="text" style="padding-left:2px;padding-right:2px;"><br /></span>

      <h1><span class="text" style="padding-left:2px;padding-right:2px;"><a href="#" id=
      "whya" name="whya">[Why]</a></span></h1><span class="text" style=
      "padding-left:2px;padding-right:2px;"><br /></span>

      <div id="why">
        <span class="text" style="padding-left:2px;padding-right:2px;"><font size="2">The
        goal of Project: HaxMe is to spread knowledge. We're not about becoming a big
        company, and we're not about becoming a famous site. We are simply about the
        spread of knowledge in a way in which anybody can feel welcomed to do so. There
        are no requirements to start learning; join our project, ask questions, complete
        missions, view code, lean to code, expand the project, and enjoy yourself. The
        possibilities here at Haxme are unlimited; and our goal is to keep on
        expanding.<br />
        <br />
        So, why should <b>you</b> join our Project... compared to other game hacking
        sites like <i>HackThisSite</i> and <i>HellBoundHackers</i>? First and foremost,
        we are the first gamehacking site to release the initial project as OpenSource.
        We believe that everybody should have the chance to expand their knowledge and
        improve the project; as a community. Our code is not closed to a select few
        developers; though the project was started solely, someday it may end with
        thousands of authors, and you can be one of them. Aside from the OpenSource; our
        system isn't a rip of other "game sites". Our system is unique and is always on
        the update. Missions are always being improved, and we are proud to serve users a
        fully working "team" system - so you can learn with friends! We're not trying to
        sell you a product here; we're opensource, free, and are always on the update.
        That, and, this site is legal. This site is not dedicated to blackhat hacking;
        this site is dedicated to security, so you can improve your own site, and,
        others.</font></span>
      </div><span class="text" style="padding-left:2px;padding-right:2px;"><br /></span>

      <h1><span class="text" style="padding-left:2px;padding-right:2px;"><a href="#" id=
      "abouta" name="abouta">[About]</a></span></h1><span class="text" style=
      "padding-left:2px;padding-right:2px;"><br /></span>

      <div id="about">
        <span class="text" style="padding-left:2px;padding-right:2px;"><font size=
        "2">HaxMe is ran throughout California. Our central servers are located in San
        Diego, and our central telecommunications are located in Los Angeles. Project:
        HaxMe first began in late October of 2009, and has turned into a major project
        which we are proud to continue on with. Aside from the Project itself; our
        community has been around for over 3 years. Our senior members are dedicated, and
        our admins are here to help. This project is and has always been free. Any sort
        of support, rather it be submitted content or a donation to help pay for the
        costs is highly appreciated. Thank you for stopping by
        <b>HaxMe</b>.</font></span>
      </div>
    </div><br />
  </div>

  <div class="space2"></div><?php
  }

    //RSS Functions
  function display_rs() {
  require_once 'mrss/rss_fetch.inc';
  $url = "http://community.HaxMe.com/index.php?act=rssout&id=2";
  $rss = fetch_rss($url);

  foreach($rss->items as $item) {
      $title = $item[title];
          $url   = $item[link];
          echo "<a style='font-size:11px;' href='".$url."'>".$title."</a><br />";
     }
  }

  function display_com() {
  require_once 'mrss/rss_fetch.inc';
  $url = "http://community.HaxMe.com/index.php?act=rssout&id=1";
  $rss = fetch_rss($url);

  foreach($rss->items as $item) {
      $title = $item[title];
          $url   = $item[link];
          echo "<a style='font-size:11px;' href='".$url."'>".$title."</a><br />";
     }
  }

  //Template Containers
  $description = "HaxMe is an opensource project - offering unlimited knowledge towards computer security, programming, and other tech-related fields.";
  $keywords = "HaxMe, Hax,Me,How,To,Hack,Computer,Hacking,Security,Training,Networking,Programming,Web,2.0,Open,Source,Free,Tutorials,Videos,Downloads,Forums,Penetration,Grounds,Missions,Game,Project,Help,Exploits,Tech,Internet";
  $author = "HaxMe Opensource";
  $copyright = "&copy; HaxMe 2010 - 2011 || All Rights Reserved";

   //Nav Links

  ###########################
  $main = array(
  "home-title"=>"HaxMe Home", "home"=>"Home",
  "forum-title"=>"Talk Security", "forum"=>"Forums",
  "mpanel-title"=>"Edit your profile information", "mpanel"=>"Edit Profile",
  "content-title"=>"Submit content to HaxMe", "submit"=>"Submit Content",
  "login-title"=>"Login to HaxMe to gain access to premium content and missions", "login"=>"Login",
  "logout-title"=>"Logout of HaxMe", "logout"=>"Logout",
  "reg-title"=>"Register an account to login", "reg"=>"Register");
  ###########################

  ###########################
  $missions = array(
  "novice-title"=>"Introductory security challenges", "novice"=>"Novice",
  "web-title"=>"Intermediate security challenges", "web"=>"Web",
  "crypt-title"=>"Introductory to intermediate cracking challenges", "crypt"=>"Cryptography",
  "code-title"=>"Learn how to code", "code"=>"Programming",
  "team-title"=>"Work with friends to complete security challenges", "team"=>"Team",
  "insane-title"=>"Advanced security challenges", "insane"=>"Insane");
  ###########################

  $source = array(
  "missrc-title"=>"Access source code to HaxMe missions", "missrc"=>"Missions",
  "haxmssrc-title"=>"Download the latest source code to haXMS", "haxmssrc"=>"haXMS 0.1A",
  "softsrc-title"=>"Access our base of user submitted source code.", "softsrc"=>"CodeBase");

  ###########################
  $exclusives = array(
  "paper-title"=>"Exclusive HaxMe papers", "paper"=>"Papers",
  "video-title"=>"Exclusive HaxMe videos", "video"=>"Videos",
  "download-title"=>"Exclusive HaxMe downloads", "download"=>"Downloads");
  ###########################

  ###########################
  $database = array(
  "tut-title"=>"Browse our collection of rich tutorials", "tut"=>"Tutorials",
  "vtut-title"=>"Watch and download high quality video presentations", "vtut"=>"Video Tutorials",
  "download-title"=>"Download free tools and documents", "download"=>"Downloads");
  ###########################

  ###########################
  $tools = array(
  "hasht-title"=>"Convert text to an array of hashes", "hasht"=>"Hash Tools",
  "irct-title"=>"Chat with the HaxMe community", "irc"=>"IRC",
  "radiot-title"=>"Listen to our live talk show", "radiot"=>"Talk Show",
  "theatert-title"=>"Watch live broadcasts / tutorials", "theatert"=>"Theater");
  ###########################

  ?>
