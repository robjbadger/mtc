<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text|Libre+Barcode+39+Extended+Text" rel="stylesheet">
<style>
.body{
visibility:hidden;
}
.section-frame{
	max-width:90%;
	margin:auto;

}
.table-print{
	width:100%;
	border:1px solid #444;
	margin:auto;
	border-collapse:collapse;

}
.table-print td th{
	border:1px solid #00fff0;
}
.barcode{

font-family: 'Libre Barcode 128 Text';
font-size: 30px;
visibility:visible;
}
.noprint{visibility:hidden;}
.print {visibility:visible;}
</style>



</head>
<body>
<!-- user/printcat.php -->
<?php
include "../mylibrary/webconn.php";


if(!isset($_SESSION['mesa_user']))
{
	include "../mylibrary/loginalerts.php";
 }
 else{ 

	
 	$catid = $_GET['cat'];
        $name = $_GET['name'];
        $catalog = $_SESSION['catalog_id'];
 	echo "<div style='max-width:90% margin:auto;>";
 	echo "<h6 class='noprint'>To print or save a copy of this catalog, click the print button. <div class='button-group'><button class='btn btn-primary' onclick='window.print();return false;' title='Print Catalog' ><i class='fa fa-print' aria-hidden='true'></i></button></div></h6>";
echo "<div class='section-frame'>";
echo "<h1 class='section-title' align='center'>$name</h1><hr>";
echo "<div class='table-responsive'>";
echo "";
echo "<table class='table table-bordered table-hover'>";



echo "<thead><tr><th align='center'>Picture</th><th >Description</th><th >Count</th><th>Pack</th><th >CoreMark #</th><th >MesaTech#</th><th >Assoc. Prod</th><th >Assoc. Prod 2 </th><th >Assoc. Prod 3</th><th >Barcode</th></tr></thead>";
echo "<tbody>";
	 		
	 
$query = "SELECT prodid, description, count, pack, cmn, mtc, assocprod, assocprod2, assocprod3, upca FROM products WHERE catid = $catid AND catalogid = $catalog ORDER BY catid ASC";
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
	
	echo "<tr><td align='center'><img src='../mylibrary/showimage.php?id=$prodid' width='80' height='auto' class='img-responsive'>";
	

	echo "<td>$description</td><td style='font-size:12px'>$count</td><td>$pack</td><td>$cmno</td><td>$mtcno</td><td>$assoc1</td><td>$assoc2</td><td>$assoc3</td>";
	echo "<td class='barcode'>$upca</td>";
	echo "</tr>";
}

echo "</table></div>";
echo "<br>";
echo "</div><br>";
 }
 echo "</div>";
?>

<script src="https://use.fontawesome.com/3c6ff366c0.js"></script>
</body>
</html>