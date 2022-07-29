
<?php
require('db_conn.php');
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if(!isset($_SESSION["user_name"])){
header("Location: login.php");
exit(); 
}


if(isset($_POST['Nom_streamer']) 
AND isset($_POST['liens_stream']))


{

$requete = $bdd->prepare("INSERT INTO `g_streamer`(`Nom_streamer`, `liens_stream`) VALUES (?,?)");
$requete->execute(array($_POST['Nom_streamer'],
$_POST['liens_stream']));


  
}
?>
  <!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script src="script.js"></script>
    <link rel="stylesheet" href="../style.css" />
    <link rel="icon" width="350%"href="../img/logo2.svg" type="image/svg">
    
    <title>Insertion</title>
</head>
<nav>
  
		  <div class="test"> 
		  <h1>
        <a class="txtcompte" href="index.php" >Accueil</a>
      </h1>
		   
  </div>
   <div class="test">
   <a><img class="imagenav1" src="../img/logo1.svg"  height="110px"></a>
  </div>
  <div class="test">
	<h1>
  <a value="logout" class="txtcompte" href="logout.php">Déconnexion</a>
  </h1>
  </div>
  </div>
  </nav>
<body class="positionI">
  <form method="POST" action="" class="">
  
  <section class="">
  <div class="inputadmin">
  <h1 class='titreadmin'>Ajouter un streamer</h1>
</div>
  
<div class="inputadmin">

   <input class='insadeadmin1'  type="text" name="Nom_streamer" placeholder="nomStreamer">
</div>
<div class="inputadmin"> 
   <input class='insadeadmin2'  type="text" name="liens_stream" value="https://player.twitch.tv/?channel=icinomstream&parent=localhost">
</div>
<div class="inputadmin">
   <input class='insadeadmin3'  type="submit" name="submit">
</div>

    </section>

</form>
</body>
<footer class="" style="">
<div class="footer_2"style="">
     <div> &copy; Gérald Saint-Pierre Tout droits réserver </div>
     <div>Mentions Légales</div>
</div>
   </footer>
</html>