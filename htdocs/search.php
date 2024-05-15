<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Search Page</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <link rel="stylesheet" href="style.css">

</head>
<body>
   


   <?php include 'BASE\header.php'; ?> 

<section class="filters" style="padding-bottom: 0;">

   <form action="" method="post">
      <div id="close-filter"><i class="fas fa-times"></i></div>
      <h3>Chercher</h3>
         
         <div class="flex">
            <div class="box">
               <p>Location</p>
               <input type="text" name="location" required maxlength="50" placeholder="ville" class="input">
            </div>
            <div class="box">
               <p>offrir</p>
               <select name="offer" class="input" required>
                  <option value="sale">louer</option>
                  <option value="resale">acheter</option>
               </select>
            </div>
            <div class="box">
               <p>Type de bien</p>
               <select name="type" class="input" required>
                  <option value="flat">Maison</option>
                  <option value="house">Appartement</option>
                  <option value="shop">Studio</option>
               </select>
            </div>
            <div class="box">
               <p>Nombre de piece</p>
               <select name="piece" class="input" required>
                  <option value="1">50m^2</option>
                  <option value="1">75m^2</option>
                  <option value="2">100m^2</option>
                  <option value="3">125m^2</option>
                  <option value="4">150^2</option>
                  <option value="5">175m^2</option>
                  <option value="1">200m^2</option>
                  <option value="2">225m^2</option>
                  <option value="3">250m^2</option>
                  <option value="4">275^2</option>
                  <option value="5">300m^2</option>
                  
               </select>
            </div>
            <div class="box">
               <p>Surface :</p>
               <select name="piece" class="input" required>
                  <option value="1">1-3</option>
                  <option value="2">2-6</option>
                  <option value="3">7-9</option>
                  <option value="4">10-13</option>
                  <option value="5">14+</option>
               </select>
           </div>                  
            <div class="box">
               <p>Budget :</p>
                <select name="piece" class="input" required>
                  <option value="1">-500</option>
                  <option value="2">501-1000</option>
                  <option value="3">1001-1500</option>
                  <option value="4">1501-2000</option>
                  <option value="5">2000+</option>
               </select>
            </div>
         </div>
         <input type="submit" value="Chercher" name="search" class="btn">
   </form>

</section>





<div id="filter-btn" class="fas fa-filter"></div>







<section class="listings">

   <h1 class="heading">Resultats</h1>

   <div class="box-container">
      <div class="box">
         <div class="admin">
            <h3>j</h3>
            <div>
               <p>john deo</p>
               <span>10-11-2022</span>
            </div>
         </div>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span>4</span></p>
            <p class="type"><span>flat</span><span>sale</span></p>
            <form action="" method="post" class="save">
               <button type="submit" name="save" class="far fa-heart"></button>
            </form>
            <img src="images/house-img-3.jpg" alt="">
         </div>
         <h3 class="name">modern flats and appartments</h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span>andheri, mumbai, india - 401303</span></p>
         <div class="flex">
            <p><i class="fas fa-bed"></i><span>3</span></p>
            <p><i class="fas fa-euro-sign"></i><span>2</span></p>
            <p><i class="fas fa-maximize"></i><span>750sqft</span></p>
         </div>
         <a href="view_property.html" class="btn">view property</a>
      </div>

   </div>

</section>

<!-- listings section ends -->









<?php include 'BASE\footer.php'; ?> 

<script src="js/script.js"></script>

<script>

document.querySelector('#filter-btn').onclick = () =>{
   document.querySelector('.filters').classList.add('active');
}

document.querySelector('#close-filter').onclick = () =>{
   document.querySelector('.filters').classList.remove('active');
}

</script>

</body>
</html>