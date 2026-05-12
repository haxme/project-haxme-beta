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
<link rel="stylesheet" href="css/thickbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="css/jquery.js"></script>
<script type="text/javascript" src="css/thickbox.js"></script>
<script type="text/javascript" src="/css/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
function update_status(){
    $('#status').load('sources/inc/status.php');
}
setInterval( "update_status()", 10000 );
</script>
<div id="rightcolumn"><div class="quicktop">HaxMe Radio Talk Show</div><div

class="box"><br />
<div class="newsbox">
<div align="center">
<div class="name">HaxMe Radio Talk Show</div></div>
<br />
<div align="left"><span class="text" style="padding-left:2px;padding-right:2px;">
<center>

<!-- Status Update -->
<div id="status" style="border: black 1px solid; border-width: thin; height:auto; width:500px; background-color:#363435">

</div>
<!-- End -->

<br />

<!-- Radio Embed -->
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.adobe.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" name="M128793" width="210" height="270" id="M128793">  <param name="movie" value="http://www.blogtalkradio.com/btrplayer.swf?file=http://www.blogtalkradio.com%2Fhaxme%2Fplay_list.xml%3Fitemcount%3D5&autostart=false&bufferlength=5&volume=80&corner=rounded&callback=http://www.blogtalkradio.com/flashplayercallback.aspx" />  <param name="quality" value="high" />  <param name="wmode" value="transparent" />   <param name="menu" value="false" />  <param name="allowScriptAccess" value="always" /><embed src="http://www.blogtalkradio.com/BTRPlayer.swf" flashvars="file=http://www.blogtalkradio.com%2fhaxme%2fplay_list.xml%3Fitemcount%3D5&autostart=false&shuffle=false&callback=http://www.blogtalkradio.com/FlashPlayerCallback.aspx&width=210&height=270&volume=80&corner=rounded" width="210" height="270" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" quality="high" wmode="transparent" menu="false" allowScriptAccess="always"  name="M128793" id="M128793"></embed></object><div style="font-size: 10px;text-align: center; width:220px;"></div>
<!-- End -->

<!-- Chat Embed -->
<object id="99chats70263" type="application/x-shockwave-flash" data="http://www.99chats.com/chat.swf?r=70263&l=www" width="550" height="250"><param name="movie" value="http://www.99chats.com/chat.swf?r=70263&l=www" /><param name="bgcolor" value="#000000" /><embed src="http://www.99chats.com/chat.swf?r=70263&l=www" type="application/x-shockwave-flash" width="550" height="250" bgcolor="#000000"></embed><br><a href="http://www.online-poker-index.com/">POKER</a> <a href="http://www.fxbeing.com/">FX</a> <a href="http://www.bingolines.com/">Bingo</a> <a href="http://www.casinoschule.com/">Casino</a> <a href="http://www.casinostadt.com/">Online Casino</a> <a href="http://www.99chats.com/">Chat</a></object>
<!-- End -->
</center>
</span></div><br/>
</div><div class="space2"></div>
