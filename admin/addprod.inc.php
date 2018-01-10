
<?php
error_reporting(1);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if(!$dbc){
	 echo "<div class='alert alert-danger alert-dismissable fade in'>
    <a href='index.php?content=mylibrary/register' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a>
    <strong>Error:</strong> unable to connect.</div>";
}else{
$product_num = $_POST['product_num'];
	$catalogid = $_POST['catalogid'];
	$catid = $_POST['catid'];
	$description = $_POST['description'];
	$count = $_POST['count'];
	$pack = $_POST['pack'];
	$price = $_POST['price'];
	$cmn = $_POST['cmn'];
	$mtc = $_POST['mtc'];
	$assocprod = $_POST['assocprod'];
	$upca = $_POST['ucpa'];
	
	$sql = mysqli_query($dbc, "INSERT INTO products (product_num, catalogid, catid, description, count, pack, price, cmn, mtc, assocprod, upca) VALUES ('$product_num','$catalogid','$catid', '$description','$count','$pack','$price','$cmn','$mtc','$assocprod','$upca'");
						$result = mysqli_fetch_array($sql,MYSQLI_ASOC);
	$row = mysqli_affected_rows($dbc);
	if($row == 0){
		echo "<div class='alert alert-danger alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a><strong>Error:</strong> Unable to add product</div>";
	}else{
		echo "<div class='alert alert-success alert-dismissable fade in'><a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a><strong>Success:</strong> New product, $description added</div>";
	}
}
}
?>
