<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="bootstrap.bundle.js">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap.min.js">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.1/css/all.min.css">
</head>
<body>
<?php include("nav.php"); ?>
<section class="accueil">
    <div class="logo">Air <span>Travel</span>
    </div>
    <h2>Nous suivre</h2>
    <h4>Voyagez en toute sécurité</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Quod nostrum ut provident autem distinctio unde <br>soluta amet a repudiandae, voluptates eius qui <br>quos, dolorem harum rerum impedit eligendi doloremque. Sapiente.</p>
    <a href="#" class="btn-r">Reservez maintenant</a>
    <div class="find_trip">
        <form action="">
                 <div>
                <label>Ville</label>
                <input type="text" placeholder="Entrez une ville">
            </div>
            <div>
                <label>Région</label>
                <input type="text" placeholder="Entrez une région">
            </div>
<input type="submit" value="voir">
        </form>
    </div>
</section><br><br><br>
<!--- section destination -->
<section class="destination">
<h1 class="title">Destinations</h1>
<div class="content">
  <!---box -->
  <?php 
  $reponse = $bdd->query('SELECT * FROM destination');
  while($donnees = $reponse->fetch()){
    ?>
  <div class="box">
    <img src="<?php echo $donnees['image']; ?>" alt="">
    <div class="content">
      <div>
        <h1><?php echo $donnees['title']; ?></h1>
        <p><?php echo $donnees['contenu']; ?></p>
        <a href="#">Lire plus</a>
      </div>
    </div>
  </div>
  <?php 
}
?> 
<!---/box -->
</div>
</section><br><br><br>
<section>
  <?php 
  $reponse = $bdd->query('SELECT * FROM culture');
  while($donnees = $reponse->fetch()){
    ?>
  <h1 class="text-center"><?php echo $donnees['titre']; ?>
  </h1>
  <?php 
}
?> 
  <div class="nuit col-lg-6">
    <marquee behavior="" direction="left">
    <img height="100px" src="n1.jpg" alt="">
   <img height="100px" src="n1.jpg" alt="">
    <img height="100px" src="n1.jpg" alt="">
    <img height="100px" src="n1.jpg" alt=""> 
  </marquee>
 
  </div>
 
</section><br><br>
<!-- <section class="blog" id="blog">
  <h1>Quelques évènements culturels</h1>
  <div class="swiper blog-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide slide">
        <img src="i3.jpg" alt="">
        <div class="icon">
          <a href="#"><i class="fas fa-calendar">chaque 2 ans</i></a>
          <a href="#"><i class="fas fa-user">chaque 2 ans</i></a>
        </div>
        <h3>SNC</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="#">Read more</a>
      </div>
      <div class="swiper-slide slide">
        <img src="i3.jpg" alt="">
        <div class="icon">
          <a href="#"><i class="fas fa-calendar">chaque 2 ans</i></a>
          <a href="#"><i class="fas fa-user">chaque 2 ans</i></a>
        </div>
        <h3>SIAO</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="#">Read more</a>
      </div>
      <div class="swiper-slide slide">
        <img src="i3.jpg" alt="">
        <div class="icon">
          <a href="#"><i class="fas fa-calendar">chaque 2 ans</i></a>
          <a href="#"><i class="fas fa-user">chaque 2 ans</i></a>
        </div>
        <h3>FESPACO</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="#">Read more</a>
      </div>
      <div class="swiper-slide slide">
        <img src="i3.jpg" alt="">
        <div class="icon">
          <a href="#"><i class="fas fa-calendar">chaque 2 ans</i></a>
          <a href="#"><i class="fas fa-user">chaque 2 ans</i></a>
        </div>
        <h3>NAK</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="#">Read more</a>
      </div>
      <div class="swiper-slide slide">
        <img src="i3.jpg" alt="">
        <div class="icon">
          <a href="#"><i class="fas fa-calendar">chaque 2 ans</i></a>
          <a href="#"><i class="fas fa-user">chaque 2 ans</i></a>
        </div>
        <h3>SNC</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="#">Read more</a>
      </div>
      <div class="swiper-slide slide">
        <img src="i3.jpg" alt="">
        <div class="icon">
          <a href="#"><i class="fas fa-calendar">chaque 2 ans</i></a>
          <a href="#"><i class="fas fa-user">chaque 2 ans</i></a>
        </div>
        <h3>SNC</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="#">Read more</a>
      </div>
    </div>
  </div>

</section> -->
<?php include("footer.php"); ?>
<script src="bootstrap.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js/index.js"></script>
</body>
</html><br>