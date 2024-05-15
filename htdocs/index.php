<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Accueil</title>

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <link rel="stylesheet" href="CSS\style.css">

</head>
<body>

<?php include 'BASE\header.php'; ?>   

   <div class="video-container">
      <video autoplay muted loop id="video-bg">
          <source src="video/homevid.mp4" type="video/mp4"> 
      </video> 
  </div>
  


<section class="services">

   <h1 class="heading">Nos services</h1>

   <div class="box-container">

      <div class="box">
         <a href="https://www.flaticon.com/free-icons/lease" title="lease icons"></a>
         <h3>Louer</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Vendre</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Acheter</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>Service 24/7</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
      </div>

   </div>

</section>


<section class="listings">

   <h1 class="heading">Dernières annonces</h1>

   <div class="box-container">

      <div class="box">
         <div class="admin">
            <h3>j</h3>
            <div>
               <p>john deo</p>
               <span>DISPONIBLE</span>
            </div>
         </div>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
            <p class="type"><span>maison</span><span>vente</span></p>
            <form action="" method="post" class="save">
               <button type="submit" name="save" class="far fa-heart"></button>
            </form>
            <img src="images/house-img-1.webp" alt="">
         </div>
         <h3 class="name">Appartements et maisons modernes</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>Paris</span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span>3</span></p>
            <p><i class="fas fa-euro-sign"></i><span>700</span></p>
            <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
         </div>
         <a href="view_property.html" class="btn">Voir la propriété</a>
      </div>


   </div>

   <div style="margin-top: 2rem; text-align:center;">
      <a href="listings.html" class="inline-btn">Voir tout</a>
   </div>

</section>


<?php include 'BASE\footer.php'; ?> 


<script src="js/script.js"></script>

</body>
</html>
