<?php
function strip_back($string){
  $clean = str_replace("\\", "", $string);
  return $clean;
}
/*
Lets create a function called "fetchtemplate", that we will use in almost every PHP file. We will have it require other PHP functions
from main.php, and it will hold / echo our main template HTML code, so we don't have to paste repetitive BIG BLOCKS of code.
*/
function fetchtemplate() { require_once('main.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" type="text/css" href="sources/style/site/default1680.css" id="1680" />
  <link rel="stylesheet" type="text/css" href="sources/style/site/default1440.css" id="1440" />
  <link rel="stylesheet" type="text/css" href="sources/style/site/default1360.css" id="1360" />
  <link rel="stylesheet" type="text/css" href="sources/style/site/default1280.css" id="1280" />


  <link rel="shortcut icon" href="<?php echo HOME; ?>/favicon.ico" />
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
  <meta name="google-site-verification" content="m45zOxwW9KgQVSL28Fb50xY7penqV6jOCgFaBtpgAOo" />
  <meta name="description" content="<?php echo $description; ?>" />
  <meta name="keywords" content="<?php echo $keywords; ?>" />
  <meta name="author" content="<?php echo $author; ?>" />
  <meta name="copyright" content="<?php echo $copyright; ?>" />
<script type="text/javascript" src="/css/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

  $('#what').hide();
  $('#why').hide();
  $('#about').hide();
  $('#welcome').hide();
  $('#welcome').show(500);

  $('a#whata').click(function() {
 $('#what').toggle(400);
 return false;
  });

  $('a#whya').click(function() {
 $('#why').toggle(400);
 return false;
  });

  $('a#abouta').click(function() {
 $('#about').toggle(400);
 return false;
  });

});

if (window.innerWidth >= 1680){
 document.getElementById("1680").disabled=false;
 document.getElementById("1440").disabled=true;
 document.getElementById("1360").disabled=true;
 document.getElementById("1280").disabled=true;
}
else if (window.innerWidth >= 1440){
 document.getElementById("1680").disabled=true;
 document.getElementById("1440").disabled=false;
 document.getElementById("1360").disabled=true;
 document.getElementById("1280").disabled=true;
}
else if (window.innerWidth >= 1360){
 document.getElementById("1680").disabled=true;
 document.getElementById("1440").disabled=true;
 document.getElementById("1360").disabled=false;
 document.getElementById("1280").disabled=true;
}
else if (window.innerWidth <= 1280){
 document.getElementById("1680").disabled=true;
 document.getElementById("1440").disabled=true;
 document.getElementById("1360").disabled=true;
 document.getElementById("1280").disabled=false;
}
</script>

  <title>HaxMe - Your Security</title>
</head><!--- End Header =-->
<!--- Begin Body =-->

<body>
  <!--- Start Wrapper =-->

  <div id="wrapper">
    <!--- Start Banner =-->

    <!--- Start Hot Column =-->
    <?php #include('sources/inc/hot.php'); ?>
    <!--- End Hot Column =-->

    <div id="header">
      <a href="#" title="Home"></a>
    </div><!--- End Banner =-->
    <!--- Begin Left Holder =-->

    <div id="leftholder">
      <!--- Begin Nav Column =-->

      <div class="navcolumn">
        <div class="quicktop">
          Navigation Panel
        </div>

        <div class="space"></div>

        <div align="left">
          <?php include("sources/inc/side_links.php"); ?>

          <div class="space"></div>
        </div>
      </div><!--- End Nav Column =-->
      <!--- Begin Donate Box =-->
      <?php include("sources/inc/donate.php"); ?><!--- End Theme Box =-->
      <!--- Begin Affiliates Box =-->
      <?php include("sources/inc/affiliate.php"); ?><!--- End Affiliates Box =-->
    </div><!--- End Nav Box =-->
    <?php
        }
        function footer() {
        include ("sources/inc/footer.php");
        }
        ?>
