Editing:  
/home/badgertex/public_html/mylibrary/showproducts.php
 Encoding:    Re-open Use Code Editor     Close  Save Changes

<?php
function showproducts($catid, $page, $currentpage, $newpage){
	error_reporting(0);
	include "webconn.php";
$catid = $_GET['cat'];
$name = $_GET['name'];
$sql = "SELECT COUNT(prodid) FROM `products` WHERE catid =$catid";
$result = mysqli_query($dbc, $sql);
$row = $result->fetch_row();
	if($row[0] == 0){
		echo "<h1 class='alert alert-warning alert-dismissable fade in'><a href='#'class='close' data-dismiss='alert' aria-label='close'>&times;</a>Sorry, there are no products in that category.</h1><hr>";
	}else{
	$ct = $row[0];

		$thispage = $page;
		$totalrecords = $row[0];
		$recordsperpage = 20;
		$offset = ($thispage - 1) * $recordsperpage;
		$totpages = ceil($totalrecords / $recordsperpage);
		echo "<div class='table-responsive'>";
echo "<div class='container'>";
		echo "<table class='table table-hover table-bordered'>";

		echo "<tr><th>Image</th><th>Prod Id</th><th>Product #</th><th>Catalog</th><th>Description</th><th>Count</th><th>Pack</th><th>Price</th><th>CoreMart #</th><th>MesaTech #</th><th>Assoc. Prod</th><th>Barcode</th></tr>";
		$sql = "SELECT prodid, product_num, catalogid, catid, description, count, pack, picture, price, cmn, mtc, assocprod, upca FROM products WHERE catid = $catid LIMIT $offset,$recordsperpage";
	
		$result = mysqli_query($dbc, $sql);
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$prodid = $row['prodid'];
			$catalogid = $row['catalogid'];
			$product_num = $row['product_num'];
			$catid = $row['catid'];
			$description = $row['description'];
			$count = $row['count'];
			$pack = $row['pack'];
			$price = $row['price'];
			$cmn  = $row['cmn'];
			$mtc  = $row['mtc'];
			$assocprod  = $row['assocprod'];
			$upca = $row['upca'];
	echo "<tr><td><img src='showimage.php?id=$prodid' alt='$description' width='80' height='60' class='img-responsive center-block'> </td>";
	echo "<td>$prodid </td><td>$product_num</td><td>$catalogid</td><td><a href='$newpage&prodid=$prodid'>$description</a></td>";
	echo "<td>$count</td><td>$pack</td><td>$price</td><td>$cmn</td><td>$mtc</td><td>$assocprod</td><td class='barcode'>$upca</td></tr>";
		}
		echo "</table>";
		echo "</div>";
echo "</div>";
		//pageing

		if($thispage >1){
			$page = $thispage - 1;
			$prevpage = "<li><a href='$currentpage&cat=$catid&page=$page&name=$name'><i class='fa fa-hand-o-left' aria-hidden='true'></i></a></li>";
		}else{
			$prevpage = " ";
		}
		if($thispage < $totpages)
		{

			$page = $thispage + 1;

			$nextpage = "<li><a href='$currentpage&cat=$catid&page=$page&name=$name'><i class='fa fa-hand-o-right' aria-hidden='true'></i></a><li>";
		}else{
			$nextpage = " ";
		}
		if($totpages > 1)
			echo "<center><ul class='pagination'>".$prevpage . " ".$nextpage."</ul></center>";
		
	}
}



?>
<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text|Libre+Barcode+39+Extended+Text" rel="stylesheet">



