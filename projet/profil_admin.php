<?php
$erroree1="";
$erroree2="";
$erroree3="";
$erroree4="";
$errore1="";
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db( $connection, "usine_episte");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_admin'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query( $connection,"select email from admin where email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['email'];
if(isset($_POST['ajout'])){
include('ajout_element.php');
}
if(isset($_POST['supprimer'])){
include('delete.php');
}
if(isset($_POST['modifier'])){
include('modifier_element.php');
}
if(!isset($login_session)){
mysqli_close($connection);
header('Location: Home.php'); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Template</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv24/images/icon.ico />
    <link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
	<link rel="stylesheet" type="text/css" href="new 2.css" media="all" />
</head>
<body>
<form action="profil_admin.php" method="post">
<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <a href="Admin.php" target="_blank">Home Admin</a>
				


                <span class="right">
                   <strong><?php echo $login_session; ?></strong> <b class="freshdesignweb-top"><a href="logout1.php">Log Out</a></b>
                </span>
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
			<header>
				<h1>EDIT SPICES</h1>
				<input class="btn" type="submit" name="ajout" value="Add">
				<input class="btn" type="submit" name="supprimer" value="Romove">
				<input class="btn" type="submit" name="modifier" value="Update">
            </header>       
     <!-- start header here-->
	<header>
	 

	<table>
  <tr>
  <td width="20"><input type="checkbox" name="1"></td>
    <td> <input type="text" name="t1" value=""size="100"/>	<span class="error"><?php echo $erroree1;?></span>  </td>
</td>
  </tr>
  <tr>
   <td  width="20"><input type="checkbox" name="2"></td>
    <td><input type="text" name="t2" value=""size="100"/>		<span class="error"> <?php echo $erroree2;?></span>  </td>
  </tr>
  <tr>
    <td width="20"><input type="checkbox" name="3"></td>
    <td><input type="text" name="t3" value=""size="100"/>	<span class="error"><?php echo $erroree3;?></span>	  </td>
  </tr>
    <tr>
    <td width="20"><input type="checkbox" name="4"></td>
    <td><input type="text" name="t4" value=""size="100"/>	<span class="error"> <?php echo $erroree4;?></span>	  </td>
  
</table>
<span class="error"> <?php echo $errore1;?></span>

	</header><!-- end header -->
    
</div>
</form>
</body>
</html>
