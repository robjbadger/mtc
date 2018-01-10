<?php 





 
echo "<div class='section-frame'>";

 $user = $_SESSION['mesa_user'];
 echo "<h1 class='section-title' align='center'>Welcome Back $user</h1><hr>";
 echo "<div class='table-responsive'>";
 echo "<div class='container'>";
 echo "<table class='table'>";

$sql = "SELECT firstname, lastname, phone, ext, email, custid FROM `users` WHERE userid = '$user'";
$result = mysqli_query($dbc, $sql);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$phone = $row['phone'];
	$ext = $row['ext'];
	$email = $row['email'];

	$custid = $row['custid'];

	 echo "<tr><th>First Name: </th><td>$firstname</td></tr>";
	echo "<tr><th>Last Name: </th><td>$lastname</td></tr>";
	echo "<tr><th>Phone: </th><td>$phone</td></tr>";
	echo "<tr><th>Ext: </th><td>$ext</td></tr>";
	echo "<tr><th>Email: </th><td>$email</td></tr>";
	echo "<tr><th>Password:</th><td><button type='button' class='btn btn-mesa' data-toggle='modal' data-target='#changePassword'>Change</button></td></tr>"; 
	echo "<tr><th>Acct: </th>";
	echo "<td >$custid <br>";
	include "company.php"; 
	echo "</td></tr>";
	
echo "</table>";}




 
echo "</table>";
echo "</div>";
echo "</div></div>";
?>



 <!-- Modal -->
  <div class="modal fade" id="changePassword" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Please enter your new password</h4>
        </div>
        <div class="modal-body">
      <form class="form-horizontal" action = "user.php?content=account" method = "post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="newpassword">New Password:</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="New Password">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="cnpassword">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" name="cnpassword" placeholder="Confirm Password">
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
     <input type="hidden" name="content" value="updatepassword"> <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default-sm" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>








