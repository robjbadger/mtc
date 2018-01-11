

<div class="section-frame">
<?php

//check if user submitted form:
$uid = $_GET['id'];

echo "<form class='horiztonal-form' action:'admin.php?contet=updateuser&id=$uid' method='post'>";
//connect to database:

	$sql = mysqli_query($dbc, "SELECT id, userid, firstname, lastname, phone, ext, email, roleid, custid, catalogid, created, last_login FROM users WHERE id = $uid");
	while($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
	
		$nuserid = $row['userid'];
		$fname = $row['firstname'];
		$lname = $row['lastname'];
		$nphoe = $row['phone'];
		$next = $row['ext'];
		$nemail = $row['email'];
		$nroleid = $row['roleid'];
		$ncustid = $row['custid'];
		$ncatalogid = $row['catalogid'];
		$created = $row['created'];
		echo "<h1 class='section-title' align='center'>Edit User ID: $nuserid</h1><hr>";
		echo "<div class='form-group'>";
			echo "<label class='col-sm-offset-2 col-sm-2  control-label' for='nuserid'>User Id:</label>";
			echo "<div class='col-sm-8'>";
				echo "<input type='text' class='form-control' name='nuserid' placeholder='$nuserid'>";
			echo "</div>";

		echo "</div>";
				echo "<div class='form-group'>";
			echo "<label class='col-sm-offset-2 col-sm-2  control-label' for='fname'>First Name:</label>";
			echo "<div class='col-sm-8'>";
				echo "<input type='text' class='form-control' name='fname' placeholder='$fname'>";
			echo "</div>";

		echo "</div>";
				echo "<div class='form-group'>";
			echo "<label class='col-sm-offset-2 col-sm-2  control-label' for='lname'>Last Name:</label>";
			echo "<div class='col-sm-8'>";
				echo "<input type='text' class='form-control' name='lname' placeholder='$lname'>";
			echo "</div>";
			echo "<div class='form-group'>";
			echo "<label class='col-sm-offset-2 col-sm-2  control-label' for='nphone'>Phone:</label>";
			echo "<div class='col-sm-8'>";
				echo "<input type='text' class='form-control' name='nphone' placeholder='$nphone'>";
			echo "</div>";
		echo "</div>";
					echo "<div class='form-group'>";
			echo "<label class='col-sm-offset-2 col-sm-2  control-label' for='next'>Ext:</label>";
			echo "<div class='col-sm-8'>";
				echo "<input type='text' class='form-control' name='next' placeholder='$next'>";
			echo "</div>";
		echo "</div>";
						echo "<div class='form-group'>";
			echo "<label class='col-sm-offset-2 col-sm-2  control-label' for='nemail'>Email:</label>";
			echo "<div class='col-sm-8'>";
				echo "<input type='email' class='form-control' name='nemail' placeholder='$nemail'>";
			echo "</div>";

		echo "</div>";
		
		echo "</div>";
				echo "<div class='form-group'>";
			echo "<label class='col-sm-offset-2 col-sm-2  control-label' for='nroledi'>Role Id:</label>";
			echo "<div class='col-sm-8'>";
				echo "<input type='text' class='form-control' name='nroleid' placeholder='$nroleid'>";
			echo "</div>";

		echo "</div>";
				echo "<div class='form-group'>";
			echo "<label class='col-sm-offset-2 col-sm-2  control-label' for='ncustid'>Customer:</label>";
			echo "<div class='col-sm-8'>";
				echo "<input type='text' class='form-control' name='ncustid' placeholder='$ncustid'>";
			echo "</div>";
					echo "<div class='form-group'>";
			echo "<label class='col-sm-offset-2 col-sm-2  control-label' for='ncatlogid'>Catalog:</label>";
			echo "<div class='col-sm-8'>";
				echo "<input type='text' class='form-control' name='ncatalogid' placeholder='$ncatalogid'>";
			echo "</div>";
echo "</div>";
echo "<br>";
				echo "<div class='form-group'>";
			echo "<label class='col-sm-offset-2 col-sm-2  control-label' for='disabledTextInput' id='inputDisabled'>Created:</label>";
			echo "<div class='col-sm-8'>";
				echo "<input type='text' class='form-control' placeholder='$created' readonly>";
			echo "</div>";

		echo "</div>";
				echo "<div class='form-group'>";
			echo "<div class='col-sm-offset-4 col-sm-8>";
		echo 	"<div class='btn-group' role='group' aria-label='...'>";
		 	echo "<input type='hidden' name='content' value='updateuser'><button type='submit' class='btn btn-mesa'><i class='fa fa-save' aria-hidden='true'></i></button>";
  	echo "<a href='admin.php?content=deleteuser&id=$uid' class='btn btn-danger'><i class='fa fa-trash' style='color:white;'></i></a></td></tr>";
  	echo "<button type='button' class='btn btn-default'><a href='admin.php?content=usermgt'>Back</a></button>";
echo "</div>";
			

		echo "</div>";
		
	}
echo "</form>";
?>





</div>
<br><br>


<script src="https://use.fontawesome.com/5684041910.js"></script>
