<div class="section-frame">
	<?php
	$catalogid = $_GET['catalogid'];
	$cname =$_GET['name'];
	echo "<h1 class='section-title' align='center'>$cname Catalog</h1><hr>";
	$sql = mysqli_query($dbc, "SELECT created, end_date FROM catalogs WHERE catalogid = $catalogid");
	while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
	$created = $row['created'];
	$end_date = $row['end_date'];

	echo "<table style='width:500px; margin:0px auto; border-collapse:collapse; border:none'>";
	echo "<tr><th>Catalog:</th><td>$catalogid</td></tr>";
	echo "<tr><th>Name:</th><td>$cname</td></tr>";
	echo "<tr><th>Start Date:</th><td>$created</td></tr>";	
	echo "<tr><th>End Date:</th><td>$end_date</td></tr>";
	echo "<tr><th style='vertical-align:top'>Categories:</th><td>";
		echo "<table>";
				$query = "SELECT catid, name FROM categories WHERE catalogid = $catalogid";
				$result = mysqli_query($dbc, $query);
					while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
						$catid = $row['catid'];
						$name = $row['name'];
						echo "<tr><td width='50px'>$catid</td><td>$name</td></tr>";
					}
					echo "</table>";
					echo "</td></tr>";
					echo "</table>";
	}



?>
</div>
<br><br>