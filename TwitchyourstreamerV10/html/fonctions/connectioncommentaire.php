<?php
/*
$BDD = array();
$BDD['serveur'] = "db.3wa.io";
$BDD['login'] = "geraldsaintpierre";
$BDD['pass'] = "da02434a969adcc42f4bf5eeb44fca06";
$BDD['bdd'] = "geraldsaintpierre_votev1";
//$BDD['bdd'] = "geraldsaintpierre_votev1";
$mysqli = mysqli_connect($BDD['serveur'],$BDD['login'],$BDD['pass'],$BDD['bdd']);
if(!$mysqli) exit('Connexion MySQL non accomplie!');
*/


// connexion maison 
$BDD = array();
$BDD['serveur'] = "localhost";
$BDD['login'] = "root";
$BDD['pass'] = "root";
$BDD['bdd'] = "login";
//$BDD['bdd'] = "geraldsaintpierre_votev1";
$mysqli = mysqli_connect($BDD['serveur'],$BDD['login'],$BDD['pass'],$BDD['bdd']);
if(!$mysqli) exit('Connexion MySQL non accomplie!');

?>

 
