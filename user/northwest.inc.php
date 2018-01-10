<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text|Libre+Barcode+39+Extended+Text" rel="stylesheet">


<?php
if(!isset($_SESSION['mesa_user']))
{
	include "user.php?content=../mylibrary/loginalert";
 }
 else{ 
	 $catid = $_GET['cat'];
	$name = $_GET['name'];
echo "<div class='section-frame'>";
echo "<a href='printcat.php?cat=$catid' target='_blank'>Print Friendly View</a>";

echo "<h1 class='section-title' align='center'>Northwest Petroleum Catalog</h1><hr>";
echo "<div class='table-responsive'>";

echo "<table class='table table-bordered table-hover'>";



echo "<thead><tr><th align='center'>Picture</th><th >Description</th><th >Count</th><th >Pack</th><th>cmn</th><th >mtc</th><th>Barcode</th></tr></thead>";
echo "<tbody>";
	 		
	 
$query = "SELECT  prodid, catid, description, count, pack, cmn, mtc, upca FROM products WHERE  catalogid == 105 ORDER BY catid ASC";
$result = mysqli_query( $dbc, $query );
while ( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ) ) {

	$prodid = $row[ 'prodid' ];
	$description = $row[ 'description' ];
	$count = $row['count'];
	$pack = $row['pack'];
	$cmno = $row[ 'cmn' ];
	$mtcno = $row[ 'mtc' ];

	$upca = $row['upca'];
	
	echo "<tr><td align='center'><img src='showimage.php?id=$prodid' width='80' height='auto' class='img-responsive'>";
	

	echo "<td>$description</td><td style='font-size:12px'>$count</td><td>$pack</td><td>$cmno</td><td>$mtcno</td><td class='barcode'>$upca</td></tr>";
}

echo "</table></div>";
echo "<br>";
echo "</div><br>";
 }
?>