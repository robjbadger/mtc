 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<?php

session_start();



include ("webconn.php");



$userid = $_POST['userid'];

$password = $_POST['password'];


$query = "SELECT roleid, catalogid from users where userid = '$userid' and password = PASSWORD('$password')";

$result = mysqli_query($dbc, $query);

 

if (mysqli_num_rows($result) == 0)

{
echo "<div class='alert alert-danger alert-dismissable fade in'>
    <a href='index.php' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a>
    <strong>Error!</strong>  Username and password do not match our records </div>";

} else

{
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$userid = $row['userid'];
	$role = $row['roleid'];
  $catalog = $row['catalogid'];


if($role == 99){
   $_SESSION['mesa_admin'] = $userid;
   
   header("Location: ../admin/admin.php");
}elseif($role == 90){
   $_SESSION['mesa_admin'] = $userid;
  
   header("Location: ../admin/admin.php");
}else{
  
 $_SESSION['mesa_user'] =  $userid;
 $_SESSION['catalog_id'] = $catalog;
	header("Location: ../user/user.php");
} 
 




}


}

?>

<script src="https://use.fontawesome.com/5684041910.js"></script>