<?php



define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'mezdec17');
define('DB_PASSWORD', 'K96,C}kK0K}J');
define('DB_NAME', 'mezadb');
 
/* Attempt to connect to MySQL database */
$dbc = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($dbc === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
/*
else{




	$result = mysqli_query($dbc, "SHOW DATABASES");
	while ($row = mysqli_fetch_assoc($result)) {
		$dname = $row['Database'];
		echo "<div class='alert alert-success alert-dismissable fade-in'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <strong>Success!</strong> connected to database: $dname </div>"; 
}
	
	
*/	


mysqli_set_charset($dbc,"utf8");








?>