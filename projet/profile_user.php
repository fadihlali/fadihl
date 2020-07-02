<?php
$data="";
$data1="";
$data2="";
$data3="";

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db( $connection, "usine_episte");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query( $connection,"select email from user where email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['email'];
include('modifier.php');
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: Admin.php'); // Redirecting To Home Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>User template</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="shortcut icon" href=http://www.freshdesignweb.com/wp-content/themes/fv24/images/icon.ico />
    <link rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
	<link rel="stylesheet" type="text/css" href="new 2.css" media="all" />
</head>
<body>
<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <a href="User.php" target="_blank">Home User</a>
				


                <span class="right">
                   <strong><?php echo $login_session; ?></strong> <b class="freshdesignweb-top"><a href="logout1.php">Log Out</a></b>
                </span>
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
			<header>
				<h1>AVAILABLE SPICES</h1>
				
            </header>       
     <!-- start header here-->
	<header>
<div id="fdw-pricing-table">
    <div class="plan plan1">
        <div class="header">Cumin</div>
        <div class="price">$5</div>  
              
        <ul>
         <img src="cumin.jpg" alt="Trulli" width="150" height="130">
          		
        </ul>
        <a class="signup" href="https://harissa.com/news/article/petit-guide-des-%C3%A9pices-de-tunisie">ACHAT</a>         
    </div>
    <div class="plan plan2 popular-plan">
        <div class="header">Canelle</div>
        <div class="price">$2</div>
          
        <ul>
            <img src="la cannelle.jpg" alt="Trulli" width="150" height="130">
						
        </ul>
        <a class="signup" href="https://harissa.com/news/article/petit-guide-des-%C3%A9pices-de-tunisie">achat</a>            
    </div>
    <div class="plan plan3">
        <div class="header">Paprika</div>
        <div class="price">$9</div>
        
        <ul>
           <img src="le paprika.jpg" alt="Trulli" width="150" height="130">
        </ul>
        <a class="signup" href="https://harissa.com/news/article/petit-guide-des-%C3%A9pices-de-tunisie">ACHAT</a>        
    </div>
    <div class="plan plan4">
        <div class="header">Cari</div>
        <div class="price">$9</div>
        
        <ul>
            <img src="le cari.jpg" alt="Trulli" width="150" height="130">
        </ul>
        <a class="signup" href="https://harissa.com/news/article/petit-guide-des-%C3%A9pices-de-tunisie">ACHAT</a>        
    </div> 
	</div>
	</header>
	<form action="profile_user.php" method="post">
<table>
 <caption align="right">Tableau de données</caption>
  <tr>
  
    <td> <span class="error"> <?php echo $data1['ajout'];?></span></td>
</td>
  </tr>
  <tr>
   
    <td> <span class="error"> <?php echo $data2['ajout'];?></span> </td>
  </tr>
  <tr>
   
    <td><span class="error"> <?php echo $data3['ajout'];?></span>  </td>
  </tr>
    <tr>
   
    <td><span class="error"> <?php echo $data4['ajout'];?></span>  </td>
  </tr>
</table>	
</form>

	
    
</div>
</body>
</html>
