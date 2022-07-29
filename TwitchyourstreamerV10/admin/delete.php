<?php
 require('db_conn.php');
 // Initialiser la session
 session_start();
 // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
 if(!isset($_SESSION["user_name"])){
 header("Location: login.php");
 exit(); 
 }

  
  if(isset($_POST['id'])) 
  
  
  {
  
  $requete = $bdd->prepare("DELETE FROM g_streamer WHERE id =?");
  $requete->execute(array($_POST['id']));
  }
  
  
  $change= $bdd->query('SELECT * FROM g_streamer')
  
  ?>
  
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
	  <meta charset="UTF-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Cadmin</title>
	  <link href="../style.css" type="text/css" rel="stylesheet">
	  <link rel="icon" width="350%"href="../img/logo2.svg" type="image/svg">
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
  
  
	  
  
  <body class=''>
  <div class="positionI">
  <div class='stream'>
  <?php while($fetch = $change->fetch()) { ?>
	
  
  
  
	
	  <form method="POST" action="" class="">
  
		 <section>
		  <div class="inputadmin">
		  <input class='insadeadmin' type="text" name="id" value="<?= $fetch['id']; ?>" >
  </div>
  <div class="inputadmin">
		  <input class='insadeadmin1'  type="text" name="Nom_streamer" value="<?= $fetch['Nom_streamer']; ?>">
  </div>
  <div class="inputadmin"> 
		  <input class='insadeadmin2'  type="text" name="liens_stream" value="<?= $fetch['liens_stream']; ?>">
  </div>
  <div class="inputadmin">
		  <input class='insadeadmin3'  type="submit" name="submit" value="supprimer">
  </div>
  
		  <div class="inputadmin">
		  <iframe  id="streamA" src="<?= $fetch['liens_stream']; ?>" height="300px" width="452px" preload>
		   </iframe>	
  </div>	
		   </section>
	   
  </form>
  
  
  <?php } ?>
  </div>
  </body>
  
  
  
  
  <footer class="footerall" style="">
  <div class="footer_0"style="">
	   <div> &copy; Gérald Saint-Pierre Tout droits réserver </div>
	   <div>Mentions Légales</div>
  </div>
	 </footer>
	
  </div>
  </html>
  