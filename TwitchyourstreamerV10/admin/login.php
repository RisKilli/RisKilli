<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <script src="script.js"></script>
    <link rel="stylesheet" href="../style.css" />
    <link rel="icon" width="350%"href="../img/logo2.svg" type="image/svg">
    
    <title>Twitchyourstreamer_login</title>
</head>
<body class='loginb'>
<?php
require('db_conn.php');
session_start();

if (isset($_POST['user_name'])){
  $username = stripslashes($_REQUEST['user_name']);
  $username = mysqli_real_escape_string($conn, $username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `admin` WHERE user_name='$username' and password='".hash('sha256', $password)."'";
  $result = mysqli_query($conn,$query) or die(mysql_error());
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['user_name'] = $username;
      header("Location:index.php");
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>





<section>
<div class="loginbox">
  
<div class="div1" >
  
  <form class="" action="" method="post" name="login">
 <div id="container">
            <!-- zone de connexion --> 
               <img src="../img/logo1.svg" id="logo" width=200px height=200px > 
            <div class=""> 
              <div>
                <input class="inputlogin" type="text" placeholder="Entrer le nom d'utilisateur" name="user_name" pattern="[a-zA-Z@1-9]{4,15}" title="Les caractères speciaux ne sont pas autorisé" required>
              </div>
              <div>
<input class="inputlogin" type="password" placeholder="Entrer le mot de passe" name="password" id='password' pattern="[a-zA-Z@1-9]{4,15}" title="Les caractères speciaux ne sont pas autorisé"  required>
                <button class="input-group-text" type="button" onclick="showPassword()">
                 <img src="./public/img/eyes.svg" height="25px" alt="Voir">
                </button>
  </div>
                
<div class="black-btn" >
    
                <input class="inputlogin1 submit1" type="submit" id='submit1' value='Se connecter'>
         
                </div>
   </div>
                </div>
            
  
</div>
</div>
</section>



<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
<footer class="" style="">
<div class="footer_1"style="">
     <div> &copy; Gérald Saint-Pierre Tout droits réserver </div>
     <div>Mentions Légales</div>
</div>
   </footer>
</html>