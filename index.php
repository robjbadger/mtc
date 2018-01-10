<?php  
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>MesaTechCorp</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon"  type="image/png" sizes="16x16" href="favicon-16x16.png">
	<!-- Latest compiled and minified CSS -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="css/style.css">
</head>

<body>




	<div id="wrapper">
	<div id="mesanav">
	<?php include "mylibrary/pubnav.php"; ?>
</div>
			<!-- /top common code -->
		<!-- content -->	
<?php
		if(!isset($_REQUEST['content'])){
			
	
					include "mylibrary/carousel-home.inc.php";
				
				
				}else{
			$content = $_REQUEST['content'];
			$nextpage = $content.".inc.php";
			include ($nextpage);}
						
		
		
		
		
		
		?>

	


		
		<!-- End content -->
		

		<hr>
		<?php include "mylibrary/bottom.php" ?>

	 </div>
    <!-- /end wrapper -->
    
    <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins)  --> 
  <script src="mylibrary/pubnav.php"></script>

 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>