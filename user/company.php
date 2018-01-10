<?php 

echo "<table>";
	$query = "SELECT company_name, address, address2, city, state, zip, catalogid FROM customers WHERE custid = $custid";
	$result = mysqli_query($dbc, $query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$company_name = $row['company_name'];
		$address = $row['address'];
		$address2 = $row['address2'];
		$city = $row['city'];
		$state = $row['state'];
		$zip = $row['zip'];
		$catalogid = $row['catalogid'];
				echo "<tr><td>$company_name</td></tr>";
		echo "<tr><td>$address</td></tr>";
		echo "<tr><td>$address2</td></tr>";
		echo "<tr><td>$city, $state $zip</td></tr>"; 
		echo "<tr><td>Catalog: $catalogid</td></tr>";
	}
	echo "</table>";


	?>