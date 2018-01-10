
<?php
include "webconn.php";
error_reporting(1);
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if(!$dbc){
	 echo "<div class='alert alert-danger alert-dismissable fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a>
    <strong>Error:</strong> unable to connect.</div>";
}else{
$userid = $_POST['userid'];
$firstn = $_POST['firstname'];
$lastn = $_POST['lastname'];
$phone = $_POST['phone'];
$ext = $_POST['ext'];
$email = $_POST['email'];
$password1 = $_POST['password1'];
$cpassword = $_POST['cpassword'];

$baduser = 0;



//check if userid was entered.
if(trim($userid) == '')
{
		 echo "<div class='alert alert-danger alert-dismissable fade in'>
    <a href='index.php?content=register' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a>
    <strong>Error:</strong> You must enter a user id.
  </div>"; 
	$baduser = 1;
}

//check if password was entered
if(trim($password1) == '')
{
	 echo "<div class='alert alert-danger alert-dismissable fade in'>
    <a href='index.php?content=register'  class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a>
    <strong>Error:</strong> You must enter a password.
  </div>"; 
	$baduser = 1;
}
//check if password and password2 matches
if($password1 != $cpassword)
{
	 echo "<div class='alert alert-danger alert-dismissable fade in'>
    <a href='#'  class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a>
    <strong>Error:</strong> your passwords do not match.
  </div>"; 
	$baduser = 1;

}

//check if user id is already in db

$query = "SELECT userid FROM users WHERE userid = '$userid'";
$result = mysqli_query($dbc, $query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


if ($row['userid'] == $userid)
{
	  echo "<div class='alert alert-danger alert-dismissable fade in'>
    <a href='#'  class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a>
    <strong>Error:</strong> this User Name is already in use.
  </div>"; 

	$baduser = 1;

}

if($baduser != 1)
{
	//enter user info in database
  $userid = msyqli_real_escape_string($userid);
  $fname = msyqli_real_escape_string($fname);
  $lname = msyqli_real_escape_string($lname);
  $phone = msyqli_real_escape_string($phone);
  $ext = msyqli_real_escape_string($ext);
  $email = msyqli_real_escape_string($email);
  $password1 = mysqli_real_escape_string($password1);
	$query  = "INSERT INTO users(userid, firstname, lastname, phone, ext, email, password) VALUES ('$userid', '$firstn', '$lastn', '$phone', '$ext','$email', '$roleid', PASSWORD('$password1'),$catalogid)";
	$result = mysqli_query($dbc, $query) or die ('<center>Sorry, unable to process your request'.mysqli_error().'</center>');
  $row = mysqli_affected_rows($dbc);
	if($row>0){
	 echo "<div class='alert alert-success alert-dismissable fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a>
    <strong>Success!</strong> Your user account has been created.
  </div>"; 
	
	}else{
		 echo "<div class='alert alert-danger alert-dismissable fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a>
    <strong>Error:</strong> there is a problem with your request.
  </div>"; 

	}
}
}
}
?>
