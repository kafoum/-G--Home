<?php

require("config/commande.php");
$Maisons= afficher(); 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Toutes les annonces</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <link rel="stylesheet" href="style.css">

</head>
<body>
   

<?php include 'BASE\header.php'; ?>   


<section class="listings">
   <div class="box-container">
      <?php foreach ($Maisons as $maison): ?>
      <div class="box">
   
         <div class="admin">
            <p><?= $maison->nom ?></p>
            <div>
            <span><?= $maison->disponible ?></span>
            </div>
         </div>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>2</span></p>
            <p class="type"><span>Maison</span><span>Vente</span></p>
            <form action="" method="post" class="save">
               <button type="submit" name="save" class="far fa-heart"></button>
            </form>
            <img src=<?= $maison->image ?> alt="">
         </div>
         <h3 class="name">Maison</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= $maison->adresse ?></span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span><?= $maison->piece ?></span></p>
            <p><i class="fas fa-euro-sign"></i><span><?= $maison->prix ?>€</span></p>
            <p><i class="fas fa-maximize"></i><span><?= $maison->surface ?>m2</span></p>
         </div>
         <a href="view_property.html" class="btn">Voir la propriété</a>
      </div>
      <?php endforeach; ?>
   </div>
</section>

<section>
      <!-- Autres annonces -->



</section>

<?php include 'BASE\footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>
