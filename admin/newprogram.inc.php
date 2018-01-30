<?php
	echo "<div class='section-frame'>";
	echo "<h1 class='section-title'>Create Program</h1><hr>";
if(!isset($_SESSION['mesa_admin'])){
include "../mylibrary/loginalert.php";
}else{

echo "<div class='container'>";
	echo "<form action='admin.php' class='horizontal-form' method='post'>";
echo "<div class='form-group'>";
	echo "<label class='control-label col-sm-3' for='program'>Name:</label>";
		echo "<div class='col-sm-9'>";
			echo "<input type='text' class='form-control' name='program'>";
		echo "</div>";
echo "</div>";
echo "<div class='form-group'>";
	echo "<label class='control-label col-sm-3' for='program'start_date'>Start Date:</label>";
		echo "<div class='col-sm-9'>";
			echo "<input type='date' class='form-control' name='start_date'>";
		echo "</div>";
echo "</div>";







	echo "</form>";
	echo "</div>";
}


echo "</div>";

?>
<!--
echo "<div class='form-group'>";
	echo "<label class='control-label col-sm-3' for=''>   :</label>";
		echo "<div class='col-sm-9'>";
			echo "<input type='text' class='form-control' name=' '>";
		echo "</div>";
echo "</div>";
-->