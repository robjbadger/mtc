
	<div class="col-sm-12 section-title">
		<h2 align="center">Add new product category</h2>
		<hr>
	</div>
 
  <?php 
	if(!isset($_SESSION['mesa_admin']))
{
	include "newcatalog.inc.php";
 }
 else{ 

	echo "<div class='container'>";
		echo "<form class='form-horizontal ' action='admin.php' method='post'>";
		echo "<div class='form-group'>";
	echo "<label class='col-sm-2 control-label' for='name'>New Category:</label>
	<div class='col-sm-10'><input type='text' class='form-control' name='name' ></div>";
	 echo "</div>";
	 echo "<div class='form-group'>";
	 echo "<label class='col-sm-2 control-label' for='catalogid'>Catalog:</label>";
	 echo "<div class='col-sm-10'>";
	 echo "<select class='form-control' name='catalogid'><option>Select</option>";

	 		$sql = "SELECT catalogid, cname FROM catalogs ORDER BY cname";
	$result = mysqli_query($dbc, $sql);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
			$catalogid = $row['catalogid'];
			$cname = $row['cname'];
			echo "<option value='$catalogid'>$cname</option>";
		}
		echo "</select>";
	 echo "</div>";
	 echo "</div>";
	 echo "<div class='form-group'>";
	 echo "<div class='col-sm-2'><input type='hidden' name='content' value='addcat'></div><div class='col-sm-10'><input type='submit' class='btn btn-mesa' value='Add'></div>";
 echo "</div>";
	echo "</form>";
	
	echo "</div>";
} 
 ?>
