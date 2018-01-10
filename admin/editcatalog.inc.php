<?php 
$catalogid = $_GET['id'];
?>
<div class="section-frame">
<h1 class="section-title" align="center">Catalog Details</h1><hr>
<div class="container">
<form class="horizontal-form" action="changecatalog.inc.php" method="post">

<?php 
$sql = "SELECT name, created, modified, good_until FROM catalogs WHERE catalogid = $catalogid";
$result = mysqli_query($dbc, $sql);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
$name = $row['name'];
$created = $row['created'];
$modified = $row['modified'];
$good_until = $row['good_until'];
echo "<div class='row'>";
	echo "<div class='form-group'>";
	echo "<label class='col-sm-offset-3 col-sm-2 control-label'>Catalog ID:</label>";
	echo "<div class='col-sm-7'><strong>$catalogid</strong></div>";
	echo "</div>";
echo "</div>";

echo "<div class='row'>";
	echo "<div class='form-group'>";
	echo "<label class='col-sm-offset-3 col-sm-2 control-label'>Name:</label>";
	echo "<div class='col-sm-7'><strong>$name</strong></div>";
	echo "</div>";
echo "</div>";
echo "<div class='row'>";
	echo "<div class='form-group'>";
	echo "<label class='col-sm-offset-3 col-sm-2 control-label'>Created:</label>";
	echo "<div class='col-sm-7'><strong>$created</strong></div>";
	echo "</div>";
echo "</div>";
echo "<div class='row'>";
	echo "<div class='form-group'>";
	echo "<label class='col-sm-offset-3 col-sm-2 control-label'>Modified:</label>";
	echo "<div class='col-sm-7'><strong>$modified</strong></div>";
	echo "</div>";
echo "</div>";

echo "<div class='row'>";
	echo "<div class='form-group'>";
	echo "<label class='col-sm-offset-3 col-sm-2 control-label' for='good_until'>Good Until:</label>";
	echo "<div class='col-sm-7'><input type='date' class='form-control' placeholder='End Date'></div>";
	echo "</div>";
echo "</div>";
echo "<div class='row'>";
	echo "<div class='form-group'>";
		echo "<label class='col-sm-offset-3 col-sm-2 control-label'>Categories:</label>";
			echo "<div class='col-sm-7'>";
				$sql = "SELECT name FROM categories WHERE catalogid = $catalogid ORDER BY name ASC";
					$result2 = mysqli_query($dbc, $sql);
						while($row=mysqli_fetch_array($result2, MYSQLI_ASSOC)){
							$name = $row['name'];
							echo $name."<br>";
						}
			echo "</div>";
	echo "</div>";
echo "</div>";

echo "<div class='row'>";
	echo "<div class='form-group'>";
	echo "<label class='col-sm-offset-3 col-sm-2 control-label' for='good_until'>View Users:</label>";
	echo "<div class='col-sm-7'><a href='admin.php?content=usersbycatalog&catalogid=$catalogid' class='btn btn-meza' value=
	View'>View</a></div>";
	echo "</div>";
echo "</div>";







	}
?>



</form>
</div>

</div>
<br><br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>