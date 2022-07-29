<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" width="350%"href="img/logo2.svg" type="image/svg">
    
    <title>Twitchyourstreamer_register</title>
</head>
<body class='loginb'>
<?php
require('config.php');
if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username); 
  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($conn, $email);
  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  //requéte SQL + mot de passe crypté
    $query = "INSERT into `users` (username, email, password)
              VALUES ('$username', '$email', '".hash('sha256', $password)."')";//blowfish pour mot de pass
  // Exécuter la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
        header('Location:login.php');
  exit();;
    }
}else{
?>

<div class="loginbox">
  
<div class="div1">
  
  <form class="box" action="" method="post" name="login">
 <div id="container">
            <!-- zone de connexion --> 
               <img src="img/logo1.svg" id="logo" width=200px height=200px > 
            <div style=""class="log"> 
              <div>
                <input  type="email" class="inputlogin" name="email" placeholder="Email"  title="Les caractères speciaux ne sont pas autorisé" required />
                
              </div>
              <div>
                 <input   type="text" class="inputlogin" name="username" placeholder="Nom d'utilisateur" minlength="4" pattern="[a-zA-Z@1-9]{4,15}" title="Les caractères speciaux ne sont pas autorisé"required />
              </div>
              <div>                                      
<input  type="password" class="inputlogin" name="password" placeholder="Mot de passe" minlength="" id='password' pattern="[a-zA-Z@1-9]{4,15}" title="Les caractères speciaux ne sont pas autorisé" required />
               <button class="input-group-text" type="button" onclick="showPassword()">
                 <img src="./public/img/eyes.svg" height="25px" alt="Voir">
                </button> 
  </div>
                <div>
                 <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>

                  </div>
<div  class="black-btn">
    
             <input  type="submit" name="submit" value="S'inscrire" class="inputlogin1" />
         
                </div>
   </div>
                </div>
            </form>
  
</div>
</div>

<?php } ?>
</body>

<footer class="" style="">
     <div class="footer_1"style="">
     <div> &copy; Gérald Saint-Pierre Tout droits réserver </div>
     <div>Mentions Légales</div>
</div>
   </footer>

</html>