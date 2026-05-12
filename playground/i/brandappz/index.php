<?php
include('../../../check.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BrandAppz - We shine your product</title>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />

<script type="text/javascript" src="js/script.js"></script>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script src="js/custom.js" type="text/javascript" charset="utf-8"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/PT_Sans_400.font.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8">
		$(document).ready(function(){
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});
	</script>
    
<script type="text/javascript">
			Cufon.replace('h1'); Cufon.replace('h2'); Cufon.replace('h3'); Cufon.replace('h4'); Cufon.replace('#middle-container p'); Cufon.replace('.desc')
		</script> 
   
</head>

<body>
<div id="main">
      <div id="slideshow">
                 <div class="slideshow">
                     <div id="slider">
                               <a rel="prettyPhoto[gallery1]" href="images/m1.jpg"><img src="images/m1.jpg" alt="" title="BrandAppz never fails" /></a>
                               <a rel="prettyPhoto[gallery1]" href="images/m2.jpg"><img src="images/m2.jpg" alt="" title="You only benefit" /></a>
                               <a rel="prettyPhoto[gallery1]" href="images/m3.jpg"><img src="images/m3.jpg" alt="" title="We never stop working for you" /></a>
                     </div>
                 </div>                        
        </div><!-- End Slidshow -->
        <div id="main-container"> 
            <div class="top"></div>        
                 <div id="middle-container">
                     <p>BrandAppz helps you produce your application. We help make your product a hit!</p>
                     <div class="clear"></div>
                 </div><!-- End Middle Container -->
                 <div class="line"></div>
                 <div id="bottom-container">
                        <div class="left-container">
                        <img src="images/1.png" alt="About" />
                        <h3>About Us</h3>
                        <span class="desc">who we are</span>
                        <p>BrandAppz has worked with many programmers and have helped create many hit projects. Some you may be familiar with are: Twhirl, Facebook Silverlight, Sandboxie, && FPS Creator.</p>
                        <p>We also work with websites! Our biggest project - <a href="http://anonym.to/?http://tinypaste.com/">TinyPaste</a>!</p>
                        </div><!-- End Left Container -->
                        <div class="centre-container">
                        <img src="images/2.png" alt="Features" />
                        <h3>Features</h3>
                        <span class="desc">our guarantees</span>
                        <ul>
                            <li>Clean, commented code</li>
                            <li>Valid XHTML/PHP web projects</li>
                            <li>No watermarks</li>
                            <li>5,000 customer guarantee</li>
                            <li>Your vision, our coders</li>
                            <li>End result - everyone wins</li>                            
                        </ul>    
                        </div><!-- End Centre Container -->
                        <div class="right-container">
                        <img src="images/3.png" alt="News" />
                        <h3>Latest News</h3>
                        <span class="desc">from the crew</span>
                        <div class="news">
                             <div class="article">
                                 <img src="images/5.jpg" />
                                 <h4>BrandAppz partners with SlackWare</h4>
                             </div><br />
                             <div class="article">
                                 <img src="images/3.jpg" />
                                 <h4>BrandAppz works with first game</h4>
                             </div><br />
                             <div class="article">
                                 <img src="images/4.jpg" />
                                 <h4>BrandAppz partners with GIMP</h4>
                             </div>
                        </div><!-- End News-->
                        </div><!-- End Right Container -->
                        <div class="clear"></div>
                 </div><!-- End Bottom Container-->
                 <div class="line"></div>
                 <div class="twit">
                     <h3>Follow on Twitter</h3>
                         <p>BrandAppz is back online!</p>
                 </div><!-- End Twitter -->                 
                 <div class="clear"></div>
           </div><!-- End Main Container -->                   
       <div id="footer">
           <div class="foot">
                       <ul class="social">
                          <li><a title="Watch on YouTube" href="http://youtube.com/brandappz"><img class="opacity" src="images/youtube.png" alt="" /></a></li>
                       </ul> 
                       <p>All content Copyright © 2010 || BrandAppz, All Rights Reserved.</p>                                             
           </div>            
       </div><!-- End Footer -->
</div><!-- End Main -->
<script type="text/javascript">
	var menu=new menu.dd("menu");
	menu.init("menu","menuhover");
</script>                 
</body>
</html>
