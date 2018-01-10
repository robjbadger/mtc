<?php
include "../mylibrary/webconn.php";

if(!isset($_SESSION['mesa_user']))
{
	echo "<h2>Sorry, you must be logged in to access this feature.</h2><hr>";
	echo "<a href='user.php'>Try Again</a>";
 }
 else{ 
echo "<div class='section-frame'>";
/* echo "<div class='col-sm-12 ' algin='center'><h2>C-Store Product Catalog</h2><hr></div>"; */
echo "<div class='table-responsive'>";

echo "<table class='table table-bordered table-hover'>";
echo "<thead><tr><th>Picture</th><th>Cat Id</th><th>Prod Id</th><th>Description</th><th>CoreMark #</th><th>MesaTech#</th><th>Assoc. Prod</th><th>Assoc. Prod 2</th><th>Assoc. Prod 3</th></tr></thead>";
echo "<tbody>";

$query = "SELECT catid, prodid, description, cmnum, mtcnum, assocprod, assocprod2, assocprod3 FROM products ORDER BY catid ASC";
$result = mysqli_query( $dbc, $query );

while ( $row = mysqli_fetch_array( $result, MYSQLI_ASSOC ) ) {
	$catid = $row[ 'catid' ];
	$prodid = $row[ 'prodid' ];
	$description = $row[ 'description' ];
	$cmno = $row[ 'cmnum' ];
	$mtcno = $row[ 'mtcnum' ];
	$assoc1 = $row[ 'assocprod' ];
	$assoc2 = $row[ 'assocprod2' ];
	$assoc3 = $row[ 'assocprod3' ];
	echo "<tr><td><img src='showimage.php?id=$prodid' width='100' height='100' >";
	echo "<td>$catid</td><td>$prodid</td>";

	echo "<td>$description</td><td>$cmno</td><td>$mtcno</td><td>$assoc1</td><td>$assoc2</td><td>$assoc3</td></tr>";
}

echo "</table></div>";
echo "<br>";
echo "</div>";}

?>