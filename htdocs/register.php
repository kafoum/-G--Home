<?php
include 'php admin crud\connexion_bd.php';

$warning_msg = []; // Initialize an array for warning messages

// Function to create a unique ID
function create_unique_id() {
   return uniqid();
}

if(isset($_POST['submit'])){
   // Form validation
   if(empty($_POST['NomClient']) || empty($_POST['PrenomClient']) || empty($_POST['AdresseMailClient']) || empty($_POST['TelephoneClient']) || empty($_POST['SexeClient']) || empty($_POST['SituationMatrimoniale']) || empty($_POST['pass']) || empty($_POST['c_pass'])) {
      $warning_msg[] = 'All fields are required!';
   } else {
      $nom = $_POST['NomClient'];
      $prenom = $_POST['PrenomClient'];
      $email = $_POST['AdresseMailClient'];
      $telephone = $_POST['TelephoneClient'];
      $sexe = $_POST['SexeClient'];
      $situation_matrimoniale = $_POST['SituationMatrimoniale'];
      
      $pass = $_POST['pass'];
      $pass = filter_var($pass, FILTER_SANITIZE_STRING);
      $c_pass = $_POST['c_pass'];
      $c_pass = filter_var($c_pass, FILTER_SANITIZE_STRING);

      // Hash the password
      $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

      $select_clients = $conn->prepare("SELECT * FROM `client` WHERE AdresseMailClient = ?");
      $select_clients->execute([$email]);

      if($select_clients->rowCount() > 0){
         $warning_msg[] = 'Email already taken!';
      } else {
         if($pass != $c_pass){
            $warning_msg[] = 'Passwords do not match!';
         } else {
            $id = create_unique_id();
            // Assuming your table structure matches with the column names
            $insert_client = $conn->prepare("INSERT INTO `client`(IDclient, NomClient, PrenomClient, AdresseMailClient, TelephoneClient, SexeClient, SituationMatrimoniale, Password) VALUES(?,?,?,?,?,?,?,?)");
            // Assuming `IDContrat` is set to some default value initially
            $insert_client->execute([$id, $nom, $prenom, $email, $telephone, $sexe, $situation_matrimoniale, $hashed_pass]);

            if($insert_client){
               // Redirect to user profile page
               header('location:profile.php');
               exit; // Exit to prevent further execution
            } else {
               $warning_msg[] = 'Something went wrong!';
            }
         }
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <link rel="stylesheet" href="CSS\style.css">
</head>
<body>

<?php include 'BASE\header.php'; ?>

<section class="form-container">
<h3>Créez un compte !</h3>
<form action="" method="post">
   <?php if(!empty($warning_msg)) { ?>
      <div class="warning">
         <?php foreach($warning_msg as $msg) {
            echo $msg . "<br>";
         } ?>
      </div>
   <?php } ?>
   <input type="text" name="NomClient" required maxlength="50" placeholder="Entrez votre nom de famille" class="box">
   <input type="text" name="PrenomClient" required maxlength="50" placeholder="Entrez votre prénom" class="box">
   <input type="email" name="AdresseMailClient" required maxlength="50" placeholder="Entrez votre adresse e-mail" class="box">
   <input type="tel" name="TelephoneClient" required pattern="(\+33|0)\s*[1-9](\s*\d{2}){4}" maxlength="14" placeholder="Entrez votre numéro de téléphone" class="box">

   <select name="SexeClient" required class="box">
      <option value="">Sélectionnez votre sexe</option>
      <option value="Male">Homme</option>
      <option value="Female">Femme</option>
      <option value="Other">Autre</option>
   </select>
   <select name="SituationMatrimoniale" required class="box">
      <option value="">Sélectionnez votre situation matrimoniale</option>
      <option value="Single">Célibataire</option>
      <option value="Married">Marié(e)</option>
      <option value="Divorced">Divorcé(e)</option>
      <option value="Widowed">Veuf/Veuve</option>
   </select>
   <input type="password" name="pass" required maxlength="20" placeholder="Entrez votre mot de passe" class="box">
   <input type="password" name="c_pass" required maxlength="20" placeholder="Confirmez votre mot de passe" class="box">
   <p>Vous avez déjà un compte ? <a href="login.php">Connectez-vous maintenant</a></p>
   <input type="submit" value="S'inscrire maintenant" name="submit" class="btn">
</form>

</section>

<?php include 'BASE\footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
