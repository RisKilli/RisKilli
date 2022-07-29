
<?php
//on définit notre variable pour pouvoir inclure les fichier
//define("C2SCRIPT","peut être n'importe quoi ici");
//include("fonctions/fonctions.php");
//include("\Twitchyourstreamer\config.php")
//on se connecte à la base de données (à adapter/remplacer avec votre système de connexion)

/*$BDD = array();
$BDD['serveur'] = "db.3wa.io";
$BDD['login'] = "geraldsaintpierre";
$BDD['pass'] = "da02434a969adcc42f4bf5eeb44fca06";
$BDD['bdd'] = "geraldsaintpierre_votev1";
$mysqli = mysqli_connect($BDD['serveur'],$BDD['login'],$BDD['pass'],$BDD['bdd']);
if(!$mysqli) exit('Connexion MySQL non accomplie!');*/


define("C2SCRIPT","peut être n'importe quoi ici");
include("fonctions/fonctions.php");
//include("fonctions/stream.php");
require("fonctions/connectioncommentaire.php");
//on se connecte à la base de données (à adapter/remplacer avec votre système de connexion)

 // Initialiser la session
  session_start();
 //  Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
 
  header("Location:../login.php");
      
  
  
  
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Domingo_page</title>
    <link href="../style.css" type="text/css" rel="stylesheet">
    <link rel="icon" width="350%"href="../img/logo2.svg" type="image/svg">
</head>

<body class="backgroundcom">  
  <nav>

        <div class="test"> 
          
            <ul class="un">
             
                <li>
                  <input onkeyup="search_streamer()" id="search" placeholder="Rechercher un streamer" >
                  <a href="#"></a>
                     <ul>
                        <li><a href="Domingo.php" class="r">Domingo</a></li>
                        <li><a href="Zerator.php" class="r">Zerator</a></li>
                        <li><a href="#" class="r">aminematue</a></li>
                      <li><a href="#" class="r">Ponce</a></li>
                      
                     </ul>
                  </input>
                </li>
             </ul>
</div>
 <div class="test">
            <ul class="un"> 
                <li><a href="../index.php"><strong><img class="imagenav" src="../img/logo1.svg"  height="110px"></strong></a>
                    <ul>
                        <li><a href="login.php"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="contact.html"></a></li>
                    </ul>
                </li>
            </ul>
</div>
<div class="test">
             <ul class="un">
                <li><a href="../login.php"><strong class="txtcompte">Crée un compte</strong></a>
                    <ul>
                        <li><a href="../login.php">se connecter</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </li>
            </ul>
</div>
</div>
</nav>
</body>
    

    <div class="espace_commentaire" style="">
<div class="streamcom">
  
     <iframe id="streamcom1"src="https://player.twitch.tv/?channel=DOMINGO&parent=geraldsaintpierre.sites.3wa.io" height="700px" width="90%" preload> <!-- it's work !!!! -->
        
     </iframe>
     </div>
  <div class="commentaire">
    <div class="centrecommentaire">
     <h1>Tu pense quoi de Domingo ?</h1>
     <p>Merci d'etre constructif !!</p>
	<h2>Écrire un commentaire</h2>
     </div>
	<?php
	//$zerator=un chiffre par exemple 123 (pour la base de donnée)
	//on affiche le formulaire pour poster un commentaire
	afficherFormulaireCommentaire("Domingo.php",12);// indiquer la page actuelle avec ou sans query du type ?id=123&... et l'id de la'rticle pour affiche les commentaire de cette article seulement, si vous utilisez ce système de commentaire pour un livre d'or par exemple, vous pouvez l'enlever et mettre seulement la page actuelle: afficherFormulaireCommentaire("page.php");
	?>
    <div class="centrecommentaire">
	<h2>Commentaires postés</h2>
     </div>
	<?php
	afficherCommentaires(12);// 1 est une valeur qui permet de faire le lien entre les pages 
    ?>



  </div>
  
<footer class="footerall" style="">
<div class="footer_1" style="">
     <div> &copy; Gérald Saint-Pierre Tout droits réserver </div>
     <div>Mentions Légales</div>
</div>
   </footer>
     </div>

</html>