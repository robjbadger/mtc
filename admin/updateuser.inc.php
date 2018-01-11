<?php
$uid = $_GET['id'];
$nuserid = $_POST['nuserid'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$nphone = $_POST['nphone'];
		$next = $_POST['next'];
		$nemail = $_POST['nemail'];
		$nroleid = $_POST['nroleid'];
		$ncustid = $_POST['ncustid'];
		$ncatalogid = $_POST['ncatalogid'];
		$modified = now();

$sql = "UPDATE users SET userid= '$nuserid', firstname = '$fname', lastname = '$lname', phone = '$nphone', ext = '$next', email = '$nemail', roleid = '$nroleid', custid = '$ncustid', catalogid = '$ncatalogid', modified = '$modified'";
$result = mysqli_query($dbc, $sql);
$row = mysqli_affected_rows($dbc);
if($row > 0){
	echo "<div class='alert alert-success alert-dismissable fade in'><a href='#' class='close' aria-label='close' data-dismiss='alert'><i class='fa fa-window-close' aria-hidden='true'></i></a></div>";
}else{
	echo "<h1> Meh! Try Again</h1>";
}


?>