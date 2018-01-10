
<?php
	$idnow = $_GET['uid'];
//check if user submitted form:
if ($_SERVER['REQUEST_METHOD'] == 'POST'){


	
//create variables to grab form values:

	$demail = $_POST['xemail'];
	$ffname = $_POST['firstname'];
	$llname = $_POST['lastname'];
	
//create query to update values on database:	
	$q = "UPDATE users SET firstname='$ffname', lastname='$llname', email='$demail' WHERE id='$idnow'";

	$r = mysqli_query($dbc, $q);

//check if there are any affected rows:	
	if(mysqli_affected_rows($dbc) == 1){
	
		echo "The user info has been changed succesfully!<br><a href='admin.php?content=usermgt>Back</a>";
	
	}else{
	
		echo "Error! Something went wrong...<br><a href='admin.php?content=usermgt>Back</a>";
	
	}
	
}

?>
