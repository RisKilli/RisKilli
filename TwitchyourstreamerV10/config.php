<?php
// Informations d'identification
/*define('DB_SERVER', 'db.3wa.io');
define('DB_USERNAME', 'geraldsaintpierre');
define('DB_PASSWORD', 'da02434a969adcc42f4bf5eeb44fca06');
define('DB_NAME', 'geraldsaintpierre_votev1');*/
 

// connection maison 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'login');


// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>