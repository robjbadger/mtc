<div class="section-frame">
	
<?php
$catalogid = $_GET['catalogid'];
$query = "SELECT name FROM catalogs WHERE catalogid = $catalogid";
$result = mysqli_query($dbc, $query);
if($result){
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$name = $row['name'];
		echo "<h1 class='section-title' align='center'>$name Catalog Users</h1><hr>";
	}
}
echo "<div class='table-responsive'>";
echo "<table class='table table-bordered table-hover'>";
echo "<thead><tr><th>User Id</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Cust ID</th></tr></thead>";
echo "<tbody>";
$sql = "SELECT custid, company_name FROM customers WHERE catalogid = '$catalogid'";
$result = mysqli_query($dbc, $sql);
while($result = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$custid = $row['custid'];
	$company_name =$row['company_name'];

	$query = "SELECT userid, firstname, lastname, email, custid FROM users WHERE custid = '$custid' ORDER BY lastname ASC";
$result = mysqli_query($dbc, $query);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
	$userid = $row['userid'];
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$email = $row['email'];
	$custid = $row['custid'];
	
echo "<tr><td>$userid</td><td>$firstname</td><td>$lastname</td><td>$email</td><td>$custid</td></tr>";
	}

}
echo "</tbody>";
echo "</table>";
echo "</div>";







?>

</div>
<br><br>