
<link href='https://fonts.googleapis.com/css?family=Libre Barcode 128 Text' rel='stylesheet'>
<?php

if(!isset($_SESSION['mesa_admin']))
{
	echo "<h2>Sorry, you must be logged in to access this feature.</h2><hr>";
	echo "<a href='admin.php'>Try Again</a>";
 }
 else{ 
echo "<div class='section-frame'>";
echo "<h1 class='section-title' align='center'><class='col-sm-3'>C-Store Catalog</h1><hr>";
echo "<div class='table-responsive'>";

echo "<table class='table table-bordered table-hover'>";



echo "<thead><tr><th align='center'>Picture</th><th >Description</th><th >Count</th><th >Pack</th><th>CM#</th><th >MT#</th><th >Assoc. Prod</th><th>Assoc. Prod2</th><th>Assoc. Prod3</th><th>Barcode</th></tr></thead>";
echo "<tbody>";
	 		
	 
$query = "SELECT  prodid, catid, description, count, pack, cmn, mtc, assocprod, assocprod2, assocprod3, upca FROM products ORDER BY catid ASC";
$result = mysqli_query( $dbc, $query );
while ( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ) ) {
		$prodid = $row[ 'prodid' ];
	$catid = $row['catid'];
	$description = $row[ 'description' ];
	$count = $row['count'];
	$pack = $row['pack'];
	$cmno = $row[ 'cmn' ];
	$mtcno = $row[ 'mtc' ];
	$assoc1 = $row[ 'assocprod' ];
	$assoc2 = $row[ 'assocprod2' ];
	$assoc3 = $row[ 'assocprod3' ];
	$upca = $row['upca'];

	
	echo "<tr><td><img src='showimage.php?id=$prodid' width='80' height='auto' class='img-responsive' >";

	echo "<td>$description</td><td>$count</td><td>$pack</td><td>$cmno</td><td>$mtcno</td><td>$assoc1</td><td>$assoc2</td><td>$assoc3</td><td class='barcode'>$upca</td></tr>";
}

echo "</tbody></table></div>";
echo "<br>";
echo "</div>";}
echo "<br><br>";

?>