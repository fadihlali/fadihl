<?php
$emailError ="";
$passworderror ='';
$errore ="";

if(isset($_POST['submit'])){
include('test.php');	
include('login_user.php'); 

}
if(isset($_SESSION['login_user'])){
header("location: profile_user.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <form action="User.php" method="post">
  <h3><a class="a1" href="Home.php">Registration</a>  <a class="a2" href="Admin.php">Admin</a></h3> 
<div class="login-box">
  <h1>Connect(User)</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Email" name="email">
	<span class="error">* <?php echo $emailError;?></span>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="password">
	<span class="error">* <?php echo $passworderror;?></span>
  </div>

  <input type="submit" name="submit" class="btn" value="Sing in">
  <span class="error">* <?php echo $errore;?></span>
</div>
</form>
  </body>
</html>