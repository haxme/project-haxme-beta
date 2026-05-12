<?php

if(isset($_COOKIE["IPAddr"]))
{
	echo "Your IP has already been added to the 'allowed' list.";
}

elseif(!isset($_GET["IP"]) && !isset($_GET["ip"]))
{
	echo "No IP variable specified.";
}

elseif($_GET["IP"] != $_SERVER["REMOTE_ADDR"] && $_GET["ip"] != $_SERVER["REMOTE_ADDR"])
{
	header( "Location: index.php" );
}

else
{

	if(isset($_GET["IP"]))
	{
		$expireTime = time()+60*60*24;
		setcookie("IPAddr", $_GET["IP"], $expireTime);
		header( "Location: index.php" );
	}

	else
	{
		$expireTime = time()+60*60*24;
		setcookie("IPAddr", $_GET["ip"], $expireTime);
		header( "Location: index.php" );
	}
}

?>