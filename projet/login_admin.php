<?php
session_start();

if ( empty($_POST['email']) || empty($_POST['id'])) {
	$errore = "email or Id is empty";
}
else{
$useremail= $_POST["email"];
$userid= $_POST["id"];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost","root","");
// To protect MySQL injection for Security purpose
$userid = stripslashes($userid);
$useremail = stripslashes($useremail);
$userid=mysqli_real_escape_string ($connection , $userid );
$useremail = mysqli_real_escape_string ($connection , $useremail);
// Selecting Database
$db = mysqli_select_db($connection , "usine_episte")
or die("Pas de connexion");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection , "select * from admin where id='$userid' AND email='$useremail'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_admin']=$email; // Initializing Session
$errore = "Useremail or Id is valid";
header("location: profil_admin.php"); // Redirecting To Other Page
} else {
$errore = "Useremail or Id is invalid";
}
mysqli_close($connection); // Closing Connection
}
?>