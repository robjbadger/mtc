<?php 

session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


<body>



<div class="section-frame">
<h1 align="center">Enter product number to view Product Details</h1><hr>
<form class="horizontal-form" action="productlookup.php" method="get">

	<div class="form-group">
<label class="control-label col-sm-2" for="mtcnum">MesaTech #:</label>
<div class="col-sm-8">
<input type="text" class="form-control" name="mtcnum"></div>

<div class="col-sm-offset-2 col-sm-2"><input type="submit" value="Search" class="btn btn-default btn-sm">
</div>
</div>

<br><br>
</form>


</div>
<?php
	if (isset($_SESSION['mesa_admin'])){
	div class='alert alert-danger alert-dismissable fade in'>
    <a href='admin.php?content=productlookup' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error:</strong> You must be logged in to view that information.</div>";
}else{

include "../mylibrary/connection.php";

echo $dbc." is connected!";

}











?>





</body>
</html>


<br><br>


















</div>
<br><br>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>