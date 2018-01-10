
<?php

//include connection script to database:
		include "../mylibrary/webconn.php";
	echo "<div class='section-frame'>";
	echo "<div class='col-sm-12 section-title'><h2 align='center'>MesaTech User Accounts</h2><hr></div>";
//Select user_name, last_name, first_name, email and  field values:
	$q = "SELECT  userid, user_name, email, first_name, last_name,  created, custid FROM users ORDER BY last_name ASC";
	
//Create the query:
	$r = mysqli_query($dbc, $q);
	
//Count the number of returned rows:
	$num = mysqli_num_rows($r);

//If any rows returned, display records:
	if ($num > 0){
	
	

	//Inform how many users are registered:
		echo "<h5 align='center'>There are $num registered users.</h5>";
	}else{
	
			echo "There are currently no registered users!";
	
	} 	
	
	//create table:	
		echo "<table class='table table-responsive table-hover table-bordered'>";
	echo "<thead><tr>
			<th>Edit</th>
			<th>Delete</th>
			<th>User Name</th>
				<th>Email</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Created</th>
			<th>Customer #</th>
		
			</tr></thead>";

		$sql = "SELECT userid, user_name, email, first_name, last_name, created, custid FROM users ORDER BY last_name ASC";;
	$result = mysqli_query($dbc, $sql);
	while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){


			$userid = $row['userid'];
			$user_name = $row['user_name'];
			$email = $row['email'];
			$first_name = $row['first_name'];
			$last_name = $row['last_name'];
			$created = $row['created'];
			$custid = $row['custid'];
			
		echo "<tr>

			<td align='left'>
			<a href='admin.php?content=edit_user.user_name=".$row['user_name']."&first_name=".$row['first_name']."&last_name=".$row['last_name']."&email=".$row['email']."'>Edit</a></td>
				<td align='left'><a href='admin.php?content=delete.php?user_name=".$row['user_name']."&first_name=".$row['first_name']."&last_name=".$row['last_name']."'>Delete</a></td>
				<td align='left'>$user_name</td>
				<td align='left'>$email</td>
				<td align='left'>$first_name</td>
				<td align='left'>$last_name</td>
				<td align='left'>$created</td>
				<td align='left'>$custid</td>
				
				</tr>";
			
		
		
	}
	
	echo "</table>";
	

	echo "</div>";
	//close mysql connection:
mysqli_close($dbc);

?>