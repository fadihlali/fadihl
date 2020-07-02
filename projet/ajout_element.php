<?php
$element1=$_POST["t1"];
$element2=$_POST["t2"];
$element3=$_POST["t3"];
$element4=$_POST["t4"];
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection , "usine_episte")
or die("Pas de connexion");
$element1= stripslashes($element1);
$$element2 = stripslashes($element2);
$element3 = stripslashes($element3);
$element4 = stripslashes($element4);
$element1 = mysqli_real_escape_string ($connection , $element1);
$element2 = mysqli_real_escape_string ($connection , $element2);
$element3 = mysqli_real_escape_string ($connection , $element3);
$element4 = mysqli_real_escape_string ($connection , $element4);

if (isset($_POST['1'])) {	
$sql1 = "INSERT INTO items (id,ajout)
VALUES ( 1,'$element1')";
if(mysqli_query($connection, $sql1)){ 
   $erroree1="*insertion valid element 1";
   $element11=mysqli_query($connection,"select ajout from items where id='1'");
} else {
    $erroree1="*Espace Reserved";
}
}
if (isset($_POST['2'])) {
$sql2 = "INSERT INTO items (id,ajout)
VALUES ( 2,'$element2')";
if(mysqli_query($connection, $sql2)){ 
   $erroree2="*insertion valid element 2";
   $element12=mysqli_query($connection,"select ajout from items where id='1'");
} else {
    $erroree2="Espace Reserved";
}
}
if (isset($_POST['3'])) {
$sql3 = "INSERT INTO items (id,ajout)
VALUES ( 3,'$element3')";
if(mysqli_query($connection, $sql3)){ 
   $erroree3="*insertion valid element 3";
   $element11=mysqli_query($connection,"select ajout from items where id='1'");
   $element13=$_POST["t3"];
} else {
    $erroree3="*Espace Reserved";
}
}
if (isset($_POST['4'])) {
$sql4 = "INSERT INTO items (id,ajout)
VALUES ( 4,'$element4')";
if(mysqli_query($connection, $sql4)){ 
   $erroree4="*insertion valid element 4";
   $element11=mysqli_query($connection,"select ajout from items where id='1'");
   $element14=$_POST["t4"];
} else {
    $erroree4="*Espace Reserved";
}
}
mysqli_close($connection);

?>


