


<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: login.php");
    exit(); 
  }
 
?>

<?php 
define("C2SCRIPT","peut être n'importe quoi ici");
include("html/fonctions/fonctions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="icon" width="350%"href="img/logo2.svg" type="image/svg">
    <script src="script.js"> </script>
    <title>Twitchyourstreamer</title>
</head>

  <nav>

        <div class="test"> 
          
            <ul class="un">
             
                <li>
                  <input onkeyup="search_streamer()" id="search" pattern="[a-zA-Z@1-9]{4,15}" title="Les caractères speciaux ne sont pas autorisé" placeholder="Rechercher un streamer" >
                  <a href="#"></a>
                    <ul>
                        <li><a href="html/DomingoPhp.php" class="r">Domingo</a></li>
                        <li><a href="html/ZeratorPhp.php" class="r">Zerator</a></li>
                        <li><a href="#" class="r">aminematue</a></li>
                      <li><a href="#" class="r">Ponce</a></li>
                     </ul>
                  </input>
                </li>
             </ul>
</div>
 <div class="test">
            <ul class="un">
                <li><a href="indexC.php"><strong><img class="imagenav" src="img/logo1.svg"  height="110px"></strong></a>
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
                <li><a href="#"><strong class="txtcompte"><?php echo $_SESSION['username']?></strong></a>
                    <ul>
                        <li><a href="logout.php">se déconnecter</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="contact.html">contact</a></li>
                    </ul>
                </li>
            </ul>
</div>
</div>
</nav>

<body>
<div class="positionI">
<div class='stream'>
<div class="r">
     <iframe id="streamA" src="<?php echo  $stream?>" height="320px" width="452px" preload>
        <a class=hiddenR>PONCE</a>
     </iframe>				
</div>
<div class="r">
     <iframe id="streamA" src="<?php echo  $stream1?>" height="320px" width="452px" preload>
        <a class=hiddenR>PONCE</a>
     </iframe>				
 </div>
 <div class="r">
     <iframe id="streamA" src="<?php echo  $stream2?>" height="320px" width="452px" preload>
        <a class=hiddenR>PONCE</a>
     </iframe>				
 </div>
 <div class="r">
     <iframe id="streamA" src="<?php echo  $stream3?>" height="320px" width="452px" preload>
        <a class=hiddenR>PONCE</a>
     </iframe>				
</div>
<div class="r">
     <iframe id="streamA" src="<?php echo  $stream4?>" height="320px" width="452px" preload>
        <a class=hiddenR>PONCE</a>
     </iframe>				
 </div>
 <div class="r">
     <iframe id="streamA" src="<?php echo  $stream5?>" height="320px" width="452px" preload>
        <a class=hiddenR>PONCE</a>
     </iframe>				
 </div>
 <div class="r">
     <iframe id="streamA" src="<?php echo  $stream6?>" height="320px" width="452px" preload>
        <a class=hiddenR>PONCE</a>
     </iframe>				
</div>
<div class="r">
     <iframe id="streamA" src="<?php echo  $stream7?>" height="320px" width="452px" preload>
        <a class=hiddenR>PONCE</a>
     </iframe>				
 </div>
 <div class="r">
     <iframe id="streamA" src="<?php echo  $stream8?>" height="320px" width="452px" preload>
        <a class=hiddenR>PONCE</a>
     </iframe>				
 </div>
 <div class="r">
     <iframe id="streamA" src="<?php echo  $stream9?>" height="320px" width="452px" preload>
        <a class=hiddenR>PONCE</a>
     </iframe>				
 </div>


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



