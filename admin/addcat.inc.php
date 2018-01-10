<?php
error_reporting(0);
$name = $_POST['name'];
$catalogid = $_POST['catalogid'];


$query = "INSERT INTO categories (name, catalogid) VALUES ('$name','$catalogid')";
$result = mysqli_query($dbc, $query);
if($result){

    echo "<div class='alert alert-success alert-dismissable fade in'><a href='admin.php?content=catview' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a><strong>Success!</strong> New Category Added</div>";
header( "refresh:2; url=admin.php?content=catview" );
}
else{
echo "<div class='alert alert-danger alert-dismissable fade in'><a href='admin.php?content=catview' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a><strong>Error!</strong> Unable to add category at this time</div>";

  }
header( "refresh:2; url=admin.php?content=catview" );

?>