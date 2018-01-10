<div class="section-frame">
<h1 class="section-title">Database Tables</h1><hr>

<?php

include "../mylibrary/webconn.php";
echo "<h2>mezadb Tables:</h2>";

$sql = "SHOW TABLES FROM 'mezadb'";
$result = mysqli_query($dbc, $sql);
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
echo $row[0];
echo "*. -  *<br>";

}
echo "<hr>";

?>



</div>