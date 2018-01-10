  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
$mtcnum = $_POST['mtcnum'];

include "../mylibrary/webconn.php";

	 
$query = "SELECT catid, prodid, description, count, pack, cmnum, mtcnum, assocprod, upca FROM products WHERE mtcnum = $mtcnum ";
$result = mysqli_query( $dbc, $query );

if($result == 0){
	echo "  <div class='alert alert-danger alert-dismissable fade in'>
    <a href='admin.php?content=productlookup' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error:</strong> Product \"$mtcnum \" not found!</div>";
}else{
	echo "<div class='table-responsive'>";
echo "<tr><td colspan='9'><h2 align='center'>C-Store Catalog</h2><hr></td></tr>";
echo "<table class='table table-bordered table-hover'>";
echo "<thead><tr><th>Picture</th><th>Description</th><th>Count</th><th>Pack</th><th>CoreMark #</th><th>MesaTech#</th><th>Assoc. Prod</th><th>Barcode</th></tr></thead>";
echo "<tbody>";
while ( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ) ) {
	$catid = $row['catid'];
	$prodid = $row[ 'prodid' ];
	$description = $row[ 'description' ];
	$count = $row['count'];
	$pack = $row['pack'];
	$cmno = $row[ 'cmnum' ];
	$mtcnum = $row[ 'mtcnum' ];
	$assoc1 = $row[ 'assocprod' ];
	$upca = $row['upca'];

	
	echo "<tr><td><img src='showimage.php?id=$prodid' width='80' height='auto' class='img-responsive' >";

	echo "<td>$description</td><td>$count</td><td>$pack</td><td>$cmno</td><td>$mtcno</td><td>$assoc1</td><td class='barcode'>$upca</td></tr>";
}
}
echo "</table></div>";



?>