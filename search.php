<?php
include('check.php');
include('config.php');
include('sources/inc/islogin.php');
include('sources/functions/functions.php');
setcookie("hxm_search","1", time()+30);
?>
<html>
<head>
<style type="text/css">
#search
{
    height: 36px;
    font-size: 24px;
}

#submit
{
    height: 36px;
    font-size: 24px;
}
</style>
<script type="text/javascript" src="/css/jquery-1.4.2.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function() {
 
  $('#members').hide();
  $('#missions').hide();
 
  $('a#memc').click(function() {
 $('#members').toggle(400);
 return false;
  });
 
    $('a#misc').click(function() {
 $('#missions').toggle(400);
 return false;
  });
 
});
</script>
</head>
<body>
<center>
<div>
<form method="GET">
<input type="text" name="s" id="search" value="<?php echo $_GET["s"]; ?>"/>
<input type="submit" value="Search!" id="submit" />
</form>
</div>
</center>
<hr />
<?php
if(isset($_GET["s"]))
{
    if($_COOKIE['hxm_search'] == 1)
       {
           die("Please wait 30 seconds before searching again.");
       }

    $search = mysql_real_escape_string($_GET["s"]);
    $search = trim($search);
		if(strlen($search) < 3) 
		{ 
			die("Please make sure your search is a legit search, and is over three characters.");
		}
		else
		{
			$query_mem = mysql_query("SELECT * FROM hxm_members WHERE members_display_name LIKE '%$search%' ORDER BY joined ASC LIMIT 25");
			if($query_mem)
				{
					$num_mem = mysql_num_rows($query_mem);
                    echo '<a href="#" name="memc" id="memc"><h2>Member results [' . $num_mem . ']</h2></a>'; 
					echo '<div id="members">';
					if($num_mem == 25)
					{
						echo '<strong>The term you have searched may be too broad. We have limited member results to the most relevant 25.</strong><br />';
					}
					while($row = mysql_fetch_array($query_mem, MYSQL_ASSOC))
					{
						echo 'Member: <a href="?p=stats&m=' . urlencode($row["members_display_name"]) . '">' . $row["members_display_name"] . '</a><br />';
					}
					echo '<hr />';
					echo '</div>';
				}
			$query_mis = mysql_query("SELECT * FROM hxm_members WHERE members_display_name = '$search'");
            $num_mis = mysql_num_rows($query_mis);
			if($num_mis > 0 && $num_mis < 2)
			{
			    echo '<a href="#" name="misc" id="misc"><h2>Mission results (' . $search . ')</h2></a>';
				echo '<div id="missions">';
				function chkmis($name,$bool)
				{
					if($bool == 0)
					{
						echo $name . ': <font color="red">False</font><br />';
					}
					else
					{
						echo $name . ': <font color="green">True</font><br />';
					}
				}
					
				while($row = mysql_fetch_array($query_mis, MYSQL_ASSOC)) 
				{
					chkmis("Novice 1",$row["n1"]);
					chkmis("Novice 2",$row["n2"]);
					chkmis("Novice 3",$row["n3"]);
					chkmis("Novice 4",$row["n4"]);
					chkmis("Novice 5",$row["n5"]);
					chkmis("Novice 6",$row["n6"]);
					chkmis("Novice 7",$row["n7"]);
					chkmis("Novice 8",$row["n8"]);
					chkmis("Novice 9",$row["n9"]);
					chkmis("Novice 10",$row["n10"]);
					chkmis("Novice 11",$row["n11"]);
					chkmis("Novice 12",$row["n12"]);
					chkmis("Novice 13",$row["n13"]);
					chkmis("Novice 14",$row["n14"]);
					chkmis("Novice 15",$row["n15"]);
					chkmis("Web 1",$row["w1"]);
					chkmis("Web 2",$row["w2"]);
					chkmis("Web 3",$row["w3"]);
					chkmis("Web 4",$row["w4"]);
					chkmis("Cryptography 1",$row["c1"]);
					chkmis("Cryptography 2",$row["c2"]);
					chkmis("Cryptography 3",$row["c3"]);
					chkmis("Cryptography 4",$row["c4"]);
					chkmis("Cryptography 5",$row["c5"]);
					chkmis("Cryptography 6",$row["c6"]);
					chkmis("Cryptography 7",$row["c7"]);
					chkmis("Cryptography 8",$row["c8"]);
					chkmis("Cryptography 9",$row["c9"]);
					chkmis("Cryptography 10",$row["c10"]);
					chkmis("Team 1",$row["t1"]);
					chkmis("Insane 1",$row["i1"]);
				}
				echo '</div>';
			}
		}
}
?>
</body>
</html>
