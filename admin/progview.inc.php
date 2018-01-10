 
  <?php 

if(!isset($_SESSION['mesa_admin']))
{
include "../mylibrary/loginalert.php";
 }
 else{ 
echo "<div class='section-frame'>";
echo "<h1 class='section-title' align='center'>Programs</h1><hr>";






   $query = "SELECT progid, url, progname, start_date, end_date FROM programs ORDER BY progid ASC LIMIT 0, 30 ";
   $fudge = mysqli_query($dbc, $query);
echo "<table class='table table-hover table-bordered'>";
echo "<thead><tr><th>Prog Id</th><th>Name</th><th>Edit</th></tr></thead>";
echo "<tbody>";
   while($row = mysqli_fetch_array($fudge, MYSQLI_ASSOC))  {
	   $programid = $row['progid'];
$url = $row['url'];
$program = "admin.php?content=".$progurl;
      $name = $row['progname'];

	 
	   echo "<tr><td>$programid</td><td><a href='$url'>$name</a></td>";
     echo "<td><a href='admin.php?content=editprograms&programid=$programid&name=$name'><i class='fa fa-edit style='font-size:14px'></i></a>";
     echo "&nbsp; &nbsp; <a href='admin.php?content=deleteprogramt&programid=$programid'>Delete</a></td></tr>";
   }
		echo "<tr><td colspan='3'><a type='button' class='btn btn-mesa' href='admin.php?content=newcat'>Add New</a></td></tr>";
echo "</tbody>";
   echo"</table>";
         echo "<br>";
	   echo "</div>";

 } 
 ?>
  <br><br>