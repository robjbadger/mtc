<?php
	error_reporting(1);
	include "webconn.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
if(!$dbc){
	 echo "<div class='alert alert-danger alert-dismissable fade in'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a>
    <strong>Error:</strong> unable to connect.</div>";
}else{
	$userid = $_SESSION['mesa_user'];
$newpassword = msyqli_real_escape_string($_POST['newpassword']);
$cnewpassword = msyqli_real_escape_string($_POST['cnewpassword']);

if($newpassword == $cnewpassword){
	$sql = sqli_query($dbc, "INSERT INTO users (password) VALUES (PASSWORD('$newpassword')) where userid = $userid");
	$result = mysqli_affected_rows($dbc);
	if($result > 0){
		echo "<div class='alert alert-success alert-dismissable fade in'><a href='../user/user.php?content=account' class='close' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a><strong>Success!</strong> Your password has been updated</div>";
	}else{
		echo "div class='alert alert-danger alert-dismissable fade in'><a href='../user/user.php?content=account' class='close' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a><strong>Error:</strong> Unable to update your password, try again later.</div>";
	}
}else{
	echo "div class='alert alert-danbger alert-dismissable fade in'><a href='../user/user.php?content=account' class='close' aria-label='close'><i class='fa fa-window-close' aria-hidden='true'></i></a><strong>Error: </strong> Your passwords do not match</div>";
}











}










?>