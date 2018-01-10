<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text|Libre+Barcode+39+Extended+Text" rel="stylesheet">


<?php
if(!isset($_SESSION['mesa_user']))
{
	echo "<h2>Sorry, you must be logged in to access this feature.</h2><hr>";
	echo "<a href='admin.php'>Please Login</a>";
 }
 else{ 
	$catalogid = 105;
echo "<div class='section-frame'>";
echo "<a href='printcat.php?cat=$catalogid' target='_blank'>Print Friendly View</a>";

echo "<h1 class='section-title' align='center'>$name</h1><hr>";
echo "<div class='table-responsive'>";

echo "<table class='table table-bordered table-hover'>";



echo "<thead><tr><th align='center'>Picture</th><th>Prod Id</th><th >Description</th><th >Count</th><th >Pack</th><th>cmn</th><th >mtc</th><th>Barcode</th></tr></thead>";
echo "<tbody>";
	 		
	 
$query = "SELECT  prodid, description, count, pack, cmn, mtc, upca FROM products WHERE  catalogid = 105 ORDER BY catid ASC";
$result = mysqli_query( $dbc, $query );
while ( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ) ) {

	$prodid = $row[ 'prodid' ];
	$description = $row[ 'description' ];
	$count = $row['count'];
	$pack = $row['pack'];
	$cmno = $row[ 'cmn' ];
	$mtcno = $row[ 'mtc' ];
	$assoc1 = $row[ 'assocprod' ];
$assoc2 = $row[ 'assocprod2' ];
	$assoc3 = $row[ 'assocprod3' ];
	$upca = $row['upca'];
	
	echo "<tr><td align='center'><img src='showimage.php?id=$prodid' width='80' height='auto' class='img-responsive'>";
	

	echo "<td>$prodid</td><td>$description</td><td style='font-size:12px'>$count</td><td>$pack</td><td>$cmno</td><td>$mtcno</td><td class='barcode'>$upca</td></tr>";
}

echo "</table></div>";
echo "<br>";
echo "</div><br>";
 }
?>