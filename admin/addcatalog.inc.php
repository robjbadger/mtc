<?php
$catalogid = $_POST['catalogid'];
$name = mysqli_real_escape_string($dbc, $_POST['name']);
$start_date = mysqli_real_escape_string($dbc, $_POST['start_date']);
$good_until = mysqli_real_escape_string($dbc, $_POST['good_until']);

$start = DATE_FORMAT($start_date, "%Y-%b-%D  %H:%i %p");
$end = DATE_FORMAT($good_until, "%Y-%b-%D  %H:%i %p");


$query = "INSERT INTO catalogs (catalogid, name, stat_date, good_until) VALUES ('$catalogid', '$name','$start','$good)";
$result = mysqli_query($dbc, $query);
if($result){
	echo "<div class='alert alert-success alert-dismissable fade in'> <a href='admin.php?content=catalogs'  class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success! </strong> $n rows affected.</div> " ;
}
echo "<div class='alert alert-danger alert-dismissable fade in'> <a href='admin.php?content=catalogs' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error: </strong> $name not added</div> " ;

/* header( "refresh:2; url=admin.php?content=catalogs" );  */

?>

