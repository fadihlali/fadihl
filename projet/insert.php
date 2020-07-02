<?php
include("login.php");
if ( empty($_POST['name']) || empty($_POST['prenom']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['password1'])) {
	$errore = "One Element Is Empty !";
}
else{
$username= $_POST["name"];
$userlastname= $_POST["prenom"];
$useremail= $_POST["email"];
$userpassword= $_POST["password"];
$connection = mysqli_connect("localhost","root","");
$username = stripslashes($username);
$userlastname = stripslashes($userlastname);
$useremail = stripslashes($useremail);
$userpassword = stripslashes($userpassword);
$username = mysqli_real_escape_string ($connection , $username);
$userlastname = mysqli_real_escape_string ($connection , $userlastname);
$useremail = mysqli_real_escape_string ($connection , $useremail);
$userpassword = mysqli_real_escape_string ($connection , $userpassword);
$db = mysqli_select_db($connection , "usine_episte")
or die("Pas de connexion");

$query = mysqli_query($connection , "select email from user where email='$useremail'");
$rows = mysqli_num_rows($query);
if ($rows == 1) 
	$errore="Email Already exists";
else{
	$sql = "INSERT INTO user (nom,prenom,password,email)
VALUES ( '$username', '$userlastname' , '$userpassword' , '$useremail')";
if(mysqli_query($connection, $sql)){ 
   $errore1="insertion valid";
	header("location:user.php");
} else {
    $errore="insertion invalid";
}
}
mysqli_close($connection);
}
?>



