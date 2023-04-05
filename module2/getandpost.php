<?php
if( $_GET["name"] || $_GET["weight"] )
{
	echo "Welcome ". $_GET['name']. "<br>";
	echo "You are ". $_GET['weight']. " kgs in weight.";
	exit();
}
?>
<html>
<body>
<form action="getandpost.php" method="GET">
	Name: <input type="text" name="name" >
	Weight:<input type="text" name="weight">
	<input type="submit">
</form>
</body>
</html>
