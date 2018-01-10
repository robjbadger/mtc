<div class="section-frame">
	<h1 class="section-title" align='center'>Add New User</h1>
		<hr>
	
 
  <?php 
if(!isset($_SESSION['mesa_admin']))
{
	echo "<h2>Sorry, you must be logged in to access this feature.</h2><hr>";
	echo "<a href='admin.php'>Try Again</a>";
 }
 else{ 


		echo "<form class='form-horizontal admin-forms' action='adduser.inc.php' method='post'>";
	  		echo "<div class='form-group'>";
	echo "<label class='col-sm-2 control-label' for='userid'>User Name:</label>";
	echo "<div class='col-sm-10'>";
		echo "<input type='text' class='form-control' id='userid' name='userid' size='50' required>";
	echo "</div>";
	 echo "</div>";
;
		echo "<div class='form-group'>";
	echo "<label class='col-sm-2 control-label' for='firstname'>First Name:</label>
	<div class='col-sm-10'><input type='text' class='form-control' id='firstname' name='firstname' size='50' required></div>";
	 echo "</div>";
		echo "<div class='form-group'>";
	echo "<label class='col-sm-2 control-label' for='lastname'>Last Name:</label>
	<div class='col-sm-10'><input type='text' class='form-control' id='lastname' name='lastname' size='50'></div>";
	 echo "</div>";
	 		echo "<div class='form-group'>";
	echo "<label class='col-sm-2 control-label' for='phone'>Phone:</label>
	<div class='col-sm-10'><input type='tel' class='form-control' id='phone' name='phone' size='50' required></div>";
	
	 echo "</div>";
	 	 		echo "<div class='form-group'>";
	echo "<label class='col-sm-2 control-label' for='ext'>Ext:</label>
	<div class='col-sm-10'><input type='text' class='form-control' id='phone' name='ext' size='50'></div>";
	
	 echo "</div>";
	 	echo "<div class='form-group'>";
	echo "<label class='col-sm-2 control-label' for='email'>Email:</label>
	<div class='col-sm-10'><input type='email' class='form-control' id='email' name='email' size='50' auto-complete='off' required></div>";
	 echo "</div>";
	 	 		echo "<div class='form-group'>";
	echo "<label class='col-sm-2 control-label' for='roleid'>User Role:</label>
	<div class='col-sm-10'>";
		echo "<select class='form-control'  name='roleid'><option>Select</option>";
						
							$query = "SELECT roleid, name FROM roles WHERE roleid != '99' ORDER BY name ASC";
							$result = mysqli_query($dbc, $query);
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
								$roleid = $row['roleid'];
								$name = $row['name'];
								echo "<option name='$roleid'>$name</option>";
							}
						
					
					
				echo "</select>";

	echo  "</div>";
	 echo "</div>";
	echo "<div class='form-group'>";
	echo "<label class='col-sm-2 control-label' for='password1'>Password:</label>
	<div class='col-sm-10'><input type='password' class='form-control' id='password1' name='password1' size='41'></div>";
	 echo "</div>";

	 		echo "<div class='form-group'>";
	echo "<label class='col-sm-2 control-label' for='roleid'>Customer:</label>
	<div class='col-sm-10'>";
		echo "<select class='form-control'  name='custid'><option>Select</option>";
						
							$queryci = "SELECT custid, company_name FROM customers ORDER BY company_name";
							$resultci = mysqli_query($dbc, $queryci);
							while($row = mysqli_fetch_array($resultci, MYSQLI_ASSOC)){
								$custid = $row['custid'];
								$company_name = $row['company_name'];
								echo "<option name='$custid'>$company_name</option>";
							}
						
					
					
				echo "</select>";

	echo  "</div>";
	 echo "</div>";
	 echo "<div class='form-group'>";
	 echo "<div class='col-sm-offset-2 col-sm-10'><input type='hidden' name='content' value='adduser'><input type='submit' class='btn btn-mesa' value='Add'></div>";
 
	echo "</form>";
	
} 
 ?>
</div>
</div>
<br><br>