<?php
include 'php admin crud\connexion_bd.php';
require("config/commande.php");
if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
   header('location:home.html'); // Redirect if user is already logged in
   exit();
}

if(isset($_POST['submit'])){
   $email = $_POST['AdresseMailClient'];
   $pass = $_POST['pass'];
   $pass = filter_var($pass, FILTER_SANITIZE_STRING); 

   $select_client = $conn->prepare("SELECT * FROM `client` WHERE AdresseMailClient = ?");
   $select_client->execute([$email]);
   $row = $select_client->fetch(PDO::FETCH_ASSOC);

   if($select_client->rowCount() > 0 && password_verify($pass, $row['password'])){ // Assuming password is stored securely hashed in the database
      setcookie('user_id', $row['IDclient'], time() + 60*60*24*30, '/');
      header('location:home.html');
      exit();
   } else {
      $error_msg = 'Invalid email or password!';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="CSS\style.css">
</head>
<body>

<header class="header">

<nav class="navbar nav-1">
   <section class="flex">
      <a href="home.html" class="logo">
         <img src="IMG\LOGO.png">
         G(E)-house
       </a>
</nav>

<nav class="navbar nav-2">
   <section class="flex">
      <div id="menu-btn" class="fas fa-bars"></div>

      <div class="menu">
         <ul>
            <li><a href="#">Acheter<i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="#">Maison</a></li>
                  <li><a href="#">Appartement</a></li>
                  <li><a href="#">Studio</a></li>
               </ul>
            </li>
            <li><a href="#">Louer</a>
               <ul>
                  <li><a href="#">Maison</a></li>
                  <li><a href="#">Appartement</a></li>
                  <li><a href="#">Studio</a></li>
               </ul>
            </li>
            <li><a href="#">Aide<i class="fas fa-angle-down"></i></a>
               <ul>
                  <li><a href="about.html">À propos de nous</a></i></li>
                  <li><a href="contact.html">Contactez-nous</a></i></li>
                  <li><a href="contact.html#faq">FAQ</a></i></li>
               </ul>
            </li>
         </ul>
      </div>

      <ul>
         <li><a href="#">Enregistré <i class="far fa-heart"></i></a></li>
         <li><a href="#">Compte <i class="fas fa-angle-down"></i></a>
            <ul>
               <li><a href="login.php">Connexion</a></li>
               <li><a href="register.php">Inscription</a></li>
            </ul>
         </li>
      </ul>
   </section>
</nav>

</header>   
<section class="form-container">

   <?php if(isset($_COOKIE['user_id'])) { ?>
      <div class="info">
         Vous êtes déjà connecté(e) !
      </div>
   <?php } ?>

   <form action="" method="post">
      <h3>Bonjour !</h3>
      <?php if(isset($error_msg)) { ?>
         <div class="error">
            <?php echo $error_msg; ?>
         </div>
      <?php } ?>
      <input type="email" name="AdresseMailClient" required maxlength="50" placeholder="Entrez votre email" class="box">
      <input type="password" name="pass" required maxlength="20" placeholder="Entrez votre mot de passe" class="box">
      <p>Vous n'avez pas encore de compte ? <a href="register.php">Inscrivez-vous maintenant</a></p>
      <input type="submit" value="Connexion" name="submit" class="btn">
   </form>


</section>

<script src="js/script.js"></script>

</body>
</html>
