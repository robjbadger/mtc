<div class="section-frame">
<?php

$sql = "SELECT catalogs.catalogid, catalogs.catalogname, catalogs.created, catalogs.end_date, categories.catid, categories.name FROM catalogs INNER JOIN categories 
ON catalogs.catalogid = categories.catalogid";

	$result = mysqli_query($dbc, $sql);
	while($row = mysqli_fetch_array($result, MYSLQI_ASSOC));
	{
	$catalogid = $row['catalogid'];
	}
SELECT catalogs.catalogid, catalogs.categoryname, catalogs.created, catalogs.end_date, categories.catid, categories.name
FROM catalogs
INNER JOIN categories
ON catalogs.catalogid = categories.catalogid;


category categoryid, categoryname FROM 


SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
FROM Orders
INNER JOIN Customers
ON Orders.CustomerID=Customers.CustomerID;



?>

</div>
