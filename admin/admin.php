 <?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>MesaTechCorp - Admin Pages</title>
 <meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+128+Text|Libre+Barcode+39+Extended+Text" rel="stylesheet">

<link rel="stylesheet" href="../css/style.css">
</head>
<body>
   
  <?php include "../mylibrary/webconn.php"; 
date_default_timezone_set("America/Chicago");
		include "../mylibrary/getThumb.php";
          if(!isset($_REQUEST['content'])){
            if(!isset($_SESSION['mesa_admin'])){
			
              include "adminlogin.html";
            }else{
				echo "<div id='wrapper'>";
				include "adminnav.inc.php";
				include "adminmain.inc.php";
				include "adminfooter.inc.php";
				echo "</div>";
		
            }
          }else{
			echo "<div id='wrapper'>";
			 include "adminnav.inc.php";
            $content = $_REQUEST['content'];
            $nextpage = $content.".inc.php";
            include($nextpage);
			include "adminfooter.inc.php";
			  echo "</div>";
          }



        ?>




	

	
	




<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<script type="text/javascript" src="jquery-barcode.js"></script>
<script src="https://use.fontawesome.com/5684041910.js"></script>

</body>
</html>
