<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>MesaTech Corp</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon"  type="image/png" sizes="32x32" href="../favicon-16x16.png">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
<?php
include "../mylibrary/webconn.php"; 
		include "../mylibrary/getThumb.php";
	//	include "../mylibrary/showproducts.php";
?>

<div id="wrapper">

					<?php 
					echo "<div id='mesanav'>";
					include "../mylibrary/custnav.inc.php";  
echo "</div>";
					?>
					
		<?php
	if(!isset($_REQUEST['content'])){
			if(!isset($_SESSION['mesa_user']))
				
				{
					
				
					include "../mylibrary/login.html";

				}else{
					
					
				
					include "usermain.inc.php";}
				include "user.bottom.php";
				
				}else{
			$content = $_REQUEST['content'];
			$nextpage = $content.".inc.php";
			include ($nextpage);
			include "../mylibrary/user.bottom.php";			
		}
	
	
					echo "</div>";
	?>
    <!-- /end wrapper -->

</body>
</html>