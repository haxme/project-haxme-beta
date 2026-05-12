<?php

if (!defined('DENYDIRECT')){
include('../../config.php');
$redir = HOME;
die("<meta http-equiv='refresh' content='0;url=$redir'>");
}

session_start();
//include('sources/interface/lockdown.php');
include('config.php');
include('sources/inc/islogin.php');
require_once("sources/interface/template.php");

fetchtemplate();
?>
<!--- Main Box =-->
  <div id="rightcolumn">
    <div class="quicktop">
      <form method="POST">
      <select name="sort" onchange='this.form.submit()' class="sort">
      <option value="0" SELECTED>Latest HaxMe News</option>
      <option value="1">January</option>
      <option value="2">February</option>
      <option value="3">March</option>
      <option value="4">April</option>
      <option value="5">May</option>
      <option value="6">June</option>
      <option value="7">July</option>
      <option value="8">August</option>
      <option value="9">September</option>
      <option value="10">October</option>
      <option value="11">November</option>
      <option value="12">December</option>
      </select>
      </form>
    </div>

    <div class="box">
      <br />
      <?php
      if($islogin != 'true') 
		{
			guestnews(); 
		}
	  elseif($islogin == 'true')
		{
                        
			if(isset($_POST["sort"]))
			{
				hxmnews($_POST["sort"]);

			}
			else
			{
				hxmnews(0);
			}
		}
      ?><br />
    </div>
  </div><!--- End Main Box =-->
  <!--- Begin Footer =-->
  <?php
  footer();
  ?>
  <!--- End Footer =-->
  <!--- End Body =-->
  </body>
  </html>
