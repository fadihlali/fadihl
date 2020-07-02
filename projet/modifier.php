<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection , "usine_episte")
or die("Pas de connexion");
$sql="select ajout from items where id='1'";
$req1= mysqli_query($connection,$sql) or die('Erreur SQL !<br />'.$sql.'<br />');
// on recupere le resultat sous forme d'un tableau
$data1 = mysqli_fetch_array($req1);


$sql1="select ajout from items where id='2'";
$req2 = mysqli_query($connection,$sql1) or die('Erreur SQL !<br />'.$sql1.'<br />');
// on recupere le resultat sous forme d'un tableau
$data2 = mysqli_fetch_array($req2);

$sql2="select ajout from items where id='3'";
$req3 = mysqli_query($connection,$sql2) or die('Erreur SQL !<br />'.$sql2.'<br />');
// on recupere le resultat sous forme d'un tableau
$data3 = mysqli_fetch_array($req3);

$sql3="select ajout from items where id='4'";
$req4 = mysqli_query($connection,$sql3) or die('Erreur SQL !<br />'.$sql3.'<br />');
// on recupere le resultat sous forme d'un tableau
$data4 = mysqli_fetch_array($req4);
mysqli_close($connection);
?>