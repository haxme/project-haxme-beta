<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>HaxMe - [Index->Home]</title>
	<link rel="stylesheet" type="text/less" media="screen" href="sources/templates/default/css/default.css" />
	<script type="text/javascript" src="sources/templates/default/js/less.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<!--[if IE]>
		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!--
		haxme.org/hhbk.txt
		haxme.org/manifesto.txt
	-->
</head>
<body>
	<!-- Navigation System -->
	<nav id="wrapper_menu">
		<ul class="menu" id="black">
			
			<!-- Home -->
			<li><a href="#" class="drop">Home</a>

				<div class="dropdown_2columns">
					<div class="col_2">
						<h2><?php echo $name;?> <img src="sources/templates/default/img/logout.png" class="img_right"  alt="Logout"/> </h2>
					</div>
					
					<div class="col_2">
						<p class="strong">Last IP: 99.99.99.99</p>
						<p class="strong">Your IP: 67.11.11.11</p>
						<p class="strong">Group: Root Admin</p>
						<p class="strong">Reputation: 220</p>
						<p class="strong">Missions Complete: 32</p>
					</div>
				
					<div class="col_2">
						<h2>Donate</h2>
					</div>
				
					<div class="col_1 firstcolumn">
						<img src="sources/templates/default/img/donate.png" width="125" height="48" alt="" />
					</div>
				
					<div class="col_1">
						<p>HaxMe is free and opensource. Any and all donations are appreciated!</p>
					</div>
				</div>
				
			</li>
			<!--/Home -->
			
			<!-- News -->
			<li><a href="#" class="drop">News</a>
			
				<div class="dropdown_5columns">
					<div class="col_5 firstcolumn">
						<div class="col_5">
							<h2>Latest HaxMe News</h2>
						</div>
					</div>
					
					<div class="col_5 firstcolumn">
						<p class="black_box">
						HaxMe is at its point during the year where most of us are busy with their new school and work seasons. 
						If I don't speak for you, know that I am very busy. Whenever possible, I'm going to continue to work on HaxMe. 
						Coding a better system, releasing updated HaXMS revisions and making the site more 2.0 is always a goal of mine... 
						I've been reading everyone's responses to the survey which has been on HaxMe for a few months, and the most 
						requested feature is a help system for the missions.

						I've started the system with a basic syntax of:
						1. Mission name
						2. Mission difficulty
						3. Requirements
						4. Objective
						5. Explanation of what is being required + mini-tutorial 6. Sources, which if studied upon, WILL get you through the mission... [READ MORE]
						</p>
					</div>
					
					<div class="col_5 firstcolumn">
						<div class="col_5">
							<h2>Other HaxMe News</h2>
						</div>
						
						<div class="col_3 firstcolumn">
							<img src="sources/templates/default/img/01.jpg" width="70" height="70" class="img_left imgshadow_light" alt="" />
							<p>Maecenas eget eros lorem, nec pellentesque lacus. Aenean dui orci, rhoncus sit amet tristique eu, tristique sed odio. Praesent ut interdum elit. Sed in sem mauris. Aenean a commodo mi. Praesent augue lacus.
								<br />
								<a href="#">Read more...</a>
							</p>
							
							<img src="sources/templates/default/img/02.jpg" width="70" height="70" class="img_left imgshadow_light" alt="" />
							<p>Aliquam elementum felis quis felis consequat scelerisque. Fusce sed lectus at arcu mollis accumsan at nec nisi. Aliquam pretium mollis fringilla. Nunc in leo urna, eget varius metus. Aliquam sodales nisi.
								<br />
								<a href="#">Read more...</a>
							</p>
						</div>
						
						<div class="col_2">
							<p class="black_box">This is a black box, you can use it to highlight some content. Sed sed lacus nulla, et lacinia risus. Phasellus vitae sapien ac leo mollis porta quis sit amet nisi. Mauris hendrerit, metus cursus accumsan tincidunt.Quisque vestibulum nisi non nunc blandit placerat. Mauris facilisis, risus ut lobortis posuere, diam lacus congue lorem, ut condimentum ligula est vel orci. Donec interdum lacus at velit varius gravida. Nulla ipsum risus.</p>
						</div>
						
					</div>
				</div>
				
			</li>
			<!--/News -->
			
			<!-- Resources -->
			<li><a href="#" class="drop">Resources</a>
			
				<div class="dropdown_4columns">
					<div class="col_4 firstcolumn">
						<h2>Today is June 25th, 2011</h2>
							
						<div class="col_2 firstcolumn">
							<p class="about">What exactly is HaxMe? If a few words could describe HaxMe: Opensource, Knowledge, Free. Click [Here] to learn more.</p>
						</div>
							
						<div class="col_2">
							<p class="bug">Found a bug or exploit within HaxMe? We appreciate any help we can get. Contact us. and get recognized [Here].</p>
						</div>
					</div>
						
					<div class="col_1 firstcolumn">
						<h3>Missions</h3>
						<ul>
							<li><a href="beginner_missions.html">Beginner</a></li>
							<li><a href="#">Intermediate</a></li>
							<li><a href="#">Advanced</a></li>
							<li><a href="#">Programming</a></li>
							<li><a href="#">Crypto/Stego</a></li>
						</ul>
					</div>
						
					<div class="col_1">
						<h3>Library</h3>
						<ul>
							<li><a href="#">Codebase</a></li>
							<li><a href="#">Downloads</a></li>
							<li><a href="#">Papers</a></li>
							<li><a href="#">Videos</a></li>
						</ul>
					</div>
						
					<div class="col_1">
						<h3>Community</h3>
						<ul>
							<li><a href="#">md5 utility [python]</a></li>
							<li><a href="#">Spoofing user agent...</a></li>
							<li><a href="#">Scoping for info on...</a></li>
							<li><a href="#">Signatures</a></li>
							<li><a href="#">New Guy</a></li>
						</ul>
					</div>
						
					<div class="col_1">
						<h3>Projects</h3>
						<ul>
							<li><a href="#">haXMS</a></li>
						</ul>
					</div>
						
				</div>
			</li>
			<!--/Resources -->
			
			<!-- Forums -->
			<li class="nodrop"><a href="#">Forums</a></li>
			<!--/Forums -->
			
			<!-- Services -->
			<li><a href="#" class="drop">Services</a>
				<div class="dropdown_2columns">
					<div class="col_1 firstcolumn">
						<h3>Community</h3>
						<ul>
							<li><a href="#">Bulletin Board</a></li>
							<li><a href="#">Internet Relay Chat</a></li>
							<li><a href="#">Classroom</a></li>
							<li><a href="#">Contribute</a></li>
							<li><a href="#">Survey</a></li>
						</ul>
					</div>
					
					<div class="col_1">
						<h3>Tools</h3>
						<ul>
							<li><a href="#">EncryptAll</a></li>
							<li><a href="#">SecurePaste</a></li>
							<li><a href="#">AnonyRedirect</a></li>
							<li><a href="#">Network Tools</a></li>
							<li><a href="#">Hacker's Webkit</a></li>
						</ul>
					</div>
					
					<div class="col_1 firstcolumn">
						<h3>VIP</h3>
						<ul>
							<li><a href="#">Downloads</a></li>
							<li><a href="#">Tools</a></li>
							<li><a href="#">HaxMe Test Drive</a></li>
							<li><a href="#">Customize Homepage</a></li>
						</ul>
					</div>
					
					<div class="col_1">
						<h3>Affiliates</h3>
						<ul>
							<li><a href="#">Darchoods</a></li>
							<li><a href="#">Affiliate With Us</a></li>
							<li><a href="#">Affiliate With Us</a></li>
							<li><a href="#">Affiliate With Us</a></li>
						</ul>
					</div>
				</div>
			</li>
			<!--/Services -->
			
			<!-- Contact -->
			<li class="right"><a href="#" class="drop">Contact</a>
				<div class="dropdown_2columns align_right">
					<div class="col_2 firstcolumn">
						<h2>Contact Us</h2>
						<form method="post">
							<fieldset>
								<p><label>Name</label><input type="text" name="name" size="30" /></p>
								<p><label>Email</label><input type="text" name="email" size="30" /></p>
								<p><label>Subject</label><input type="text" name="subject" size="30" /></p>
								<p><label>Message</label><textarea cols="30" name="message" rows="10"></textarea></p>
								<button type="submit" class="submit">Send</button>
							</fieldset>
						</form>
					</div>
					
					<div class="col_2 firstcolumn">
						<h2>Keep in touch</h2>
						<ul class="social">
							<li><a href="#"><img src="sources/templates/default/img/twitter.png" alt="" /><span>Twitter</span></a></li>
							<li><a href="#"><img src="sources/templates/default/img/facebook.png" alt="" /><span>Facebook</span></a></li>
						</ul>
					</div>
				</div>
			</li>
			<!--/Contact -->
		</ul>
	</nav>
	<!--/Navigation System -->
	
	<!-- Content -->
	<div class="container_12" id="mainbox">
		<?php if( $login_state == 1 ){ ?>

		<p><span id="font-byhand">Welcome back,</span>&nbsp;<span id="font-sketch"><?php echo $name;?></span> <span id="logout"><a href="?p=logout">Logout</a></span></p>

		<div class="grid_8">
			<div id="dashboard">
				<img src="https://haxme.org/forum/uploads/profile/photo-thumb-1.jpg" />
				<p>Group: Administrator</p>
				<p>Reputation: 220</p>
				<p>Your IP: 127.0.0.1</p>
				<p>Last IP: 127.0.0.1</p>
				<p>Missions complete: 32</p>
				<p>Threads started: 1092</p>
				<p>Replies posted: 5098</p>
				<p>Last Active: Apr 26 2010 02:23 PM</p>
			</div>

			<section id="news">
				<h2>Welcome back! | <span id="stamp">&raquo; cwade12c @ 20.12.2011</span></h2>
				<article>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non leo risus, eget hendrerit mauris. Praesent mollis interdum nulla, vitae vestibulum urna convallis eu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris et tellus urna. Nulla fringilla sem vitae purus laoreet condimentum. Suspendisse aliquam leo sed odio pellentesque a sodales mi volutpat. Donec iaculis congue tortor, vel tristique odio sollicitudin vitae. Donec facilisis sagittis dapibus.

				Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse arcu ligula, fermentum eget luctus eget, vestibulum vitae arcu. Cras turpis purus, volutpat eu egestas malesuada, molestie sed augue. Curabitur sed purus sed massa ultricies euismod. Etiam venenatis pulvinar cursus. Nullam lacinia viverra ipsum, vitae adipiscing risus lacinia sed. Nulla metus purus, pharetra nec fermentum quis, aliquet et quam. Mauris nunc leo, rhoncus eu aliquam placerat, pretium sit amet dolor. Sed lacinia, eros ut eleifend sagittis, sapien eros condimentum turpis, at faucibus erat diam eu magna. Mauris egestas mollis tortor, a pretium ante facilisis eu. Suspendisse aliquet blandit purus, et tempor justo ultrices non.
				</article>
				<hr />
				<a href="?p=news">[View All News]</a>
			</section>
		</div>

		<aside class="grid_4">
			<div id="twitter">
				<h2>Tweets</h2>
				<hr />
				<div id="tweets">
					<p>"Goin' hard on some hxm coding... soon enough friends"</p>
					<p>"Site is becoming more secure everyday. Making progress with hxm1.0 - another day, another day closer."</p>
				</div>
			</div>
			
			<div id="useful">
				<strong>IRC: </strong><a href="ircs://irc.darchoods.net:6697/haxme">ircs://irc.darchoods.net:6697/haxme</a>
				<br />
				<strong>New? </strong><a href="?p=welcome">Getting Started</a>
				<br />
				<strong>Courtesy: </strong><a href="?p=rules">Understand the Rules</a>
				<br />
				<strong>Opinion: </strong><a href="?p=survey">What's your take?</a>
				<br /><br />
				<img src="sources/templates/default/img/donate.png" />
			</div>
		</aside>
		<?php }else{ ?>

		<p><span id="font-byhand">Welcome to:</span>&nbsp;&nbsp;<span id="font-sketch">Project HaxMe</span></p>
		
		<div class="grid_7" id="numlist">
			<h2>Five reasons to join HaxMe</h2>
			<ol>
				<li><p><b>Free and Opensource</b> <br /> HaxMe requires no fee to register, and offers all of its resources free of charge. All source code is public.</p></li>
				<li><p><b>Flexible Mission System</b> <br /> HaxMe offers a mission system, feeding users scenarios and resources to learn in an interactive way.</p></li>
				<li><p><b>Array of Tools</b> <br />HaxMe has a large array of WebUI tools for registered members; from secure pastebin and codebase to encryption services and networking tools.</p></li>
				<li><p><b>Community</b> <br />HaxMe has a rich community full of members looking to share knowledge; from papers and tutorials to code and thoughtful discussions. Bulletin board + IRC.</p></li>
				<li><p><b>Hacking, Coding, Technology</b> <br />HaxMe claims no hat, as each member are their own. We are interested in contributing and learning, skillset regardless.</p></li>
			</ol>
		</div>
		
		<div class="grid_4" id="login">
			<center><span id="font-coal">LOGIN</span></center>
			<form method="post" action="https://haxme.org/forum/index.php?app=core&amp;module=global&amp;section=login&amp;do=process">
				<input type='hidden' name='auth_key' value='<?php echo $hash;?>' />
				<fieldset id="inputs" align="center">
					<input id="username" name="ips_username" type="text" placeholder="Username" required />
					<input id="password" name="ips_password" type="password" placeholder="Password" required />
				</fieldset>
				<fieldset id="actions" align="center">
					<input type="submit" id="submit" value="Login" />
					<br /><br />
					<a href="?p=forgot">Forgot password?</a>
				</fieldset>
			</form>
		</div>
		<?php } ?>

	</div>
	<!--/Content -->
</body>
</html>
