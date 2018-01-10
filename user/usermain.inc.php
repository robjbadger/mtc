<?php
date_default_timezone_set("America/Chicago");
				echo "<div class='section-frame'>";
echo "<div class='container'>";
/* print_r($_SESSION); */
   $user = $_SESSION['mesa_user'];
   $catalog = $_SESSION['catalog_id'];
   echo "<h1 class='section-title' align='center'>Welcome, $user</h1><hr>";
   $date = date("l, F j, Y");

   echo "<p>Today's date: $date  ". date("h:i") ."</p><br>";

include "c-store-slider.inc.php";

 


  
		echo "</div></div>";
				
?>