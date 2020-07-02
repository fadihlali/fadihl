<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection , "usine_episte")
or die("Pas de connexion");
$sql = "DELETE FROM items";
if ($connection->query($sql) === TRUE) {
	$errore1="*delete full tab succes";
}
else{
	$errore1="*delete faild";
}
mysqli_close($connection);

?>