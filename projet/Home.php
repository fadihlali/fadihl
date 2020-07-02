<?php
// Initialize variables to null.
$errore="";
$prenomerror="";
$password1error="";
$nameError ="";
$emailError ="";
$phoneError ="";
$passworderror ="";
// On submitting form below function will execute.
if(isset($_POST['submit'])){
include("home_test.php");
include("insert.php");
}

//php code ends here
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Register form</title>
	<link rel="stylesheet" href="style1.css">
</head>
<body>
	<form action="Home.php" method="post">
		<label for="user">User Name</label>
		<input type="text" name="name" id="user">
		<span class="error">*<?php echo $nameError;?></span>
		<label for="user">Last Name</label>
		<input type="text" name="prenom" id="prenom">
		<span class="error">*<?php echo $prenomerror;?></span>
		<label for="email">Email</label>
		<input type="email" name="email" id="email">
		<span class="error">*<?php echo $emailError;?></span>
		<label for="pass">Password</label>
		<input type="password" name="password" id="pass">
		<span class="error">*<?php echo $passworderror;?></span>
		<label for="phone">Confirm Password</label>
		<input type="password" name="password1" id="pass1">
		<span class="error">*<?php echo $password1error;?></span>
		<input type="submit" name="submit" value="Registration">
		<span class="error">*<?php echo $errore;?></span>
		<p>If you are Admin member please <a href="Admin.php">Log In Here</a></p>
		<p>If you are User member please <a href="User.php">Log In Here</a></p>
	</form>
</body>
</html>