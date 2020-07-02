<?php
session_start();

if ( empty($_POST['email']) || empty($_POST['password'])) {
	$errore = "email or Password is empty";
}
else{
$useremail= $_POST["email"];
$userpassword= $_POST["password"];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost","root","");
// To protect MySQL injection for Security purpose
$useremail = stripslashes($useremail);
$userpassword = stripslashes($userpassword);
$useremail=mysqli_real_escape_string ($connection , $useremail );
$userpassword = mysqli_real_escape_string ($connection , $userpassword);
// Selecting Database
$db = mysqli_select_db($connection , "usine_episte")
or die("Pas de connexion");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection , "select * from user where password='$userpassword' AND email='$useremail'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$useremail; // Initializing Session
$errore = "Useremail or Password is valid";
header("location: profile_user.php"); // Redirecting To Other Page
} else {
$errore = "Useremail or Password is invalid";
}
mysqli_close($connection); // Closing Connection
}



?>