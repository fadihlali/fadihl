<?php
$emailError ="";
$iderror ='';
$errore ="";

if(isset($_POST['submit'])){
include('test_admin.php');	
include('login_admin.php'); 
}
if(isset($_SESSION['login_admin'])){
header("location: profil_admin.php");
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
  <form action="Admin.php" method="post">
  <h3><a class="a1" href="Home.php">Registration</a>  <a class="a2" href="user.php">User</a></h3>
  
<div class="login-box">
  <h1>Connect(Admin)</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Email" name="email">
	<span class="error">* <?php echo $emailError;?></span>
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="ID" name="id">
	<span class="error">* <?php echo $iderror;?></span>
  </div>

  <input type="submit" name="submit" class="btn" value="Sing in">
  <span class="error">* <?php echo $errore;?></span>
</div>
</form>
  </body>
</html>
