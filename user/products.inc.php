
<style>
#prodtable{
width:900px; 
margin:0px auto;
border:1px solid black; 

border-collapse:collapse;'
}
#prodtable td, th{
	border:1px solid #333;
	padding-left:4px;
}



</style>
</head>
<body>






      <?php include "../mylibrary/webconn.php"; ?>
<?php include "custnav.inc.php"; ?>

<div id="wrapper";>
<div class="container">
<div class="jumbotron">

<div style="align-content:center center;">
<img src="../images/mt-2.0@3x.png" alt="Mtech Logo">

</div>
</div>
</div>

<div class="container">
<?php

echo "<table id='prodtable'>";
	echo "<tr>
	<th>Picture</th>
	<th>Description</th>
	<th>Count</th>
	<th>Pack</th>
	<th>Core-Mark#</th>
	<th>MesaTech#</th></tr>";

$query = "SELECT  description, count, pack, cmno, mtcno FROM products WHERE catid = 2 ORDER BY description ASC";
$result = mysqli_query($dbc, $query) or die('didn work!');

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){


	$desc = $row['description'];
	$count = $row['count'];
	$pack =  $row['pack'];
	$catnum = $row['cmno'];
	$mtcnum = $row['mtcno'];
echo "<tr>
	<td></td>
	<td>$desc</td>
	<td>$count</td>
	<td>$pack</td>
	<td>$catnum</td>
	<td>$mtcnum</td>
	</tr>";
	
}

echo "</table>";
echo "<br>";echo "<br>";
?>




</div>

</div>
