<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap.bundle.js">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap.min.js">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.1/css/all.min.css">
</head>
<body>
<?php include("nav.php"); ?>
<section class="cont">
  <h1>Nos services</h1>
</section>
<div class="b">
<button class="b1">Hébergement</button>
<button class="b2">Restauration</button>
<button class="b3">Santé</button>
<button class="b4">Tourisme</button>
<button class="b5">Transport</button>
</div>
<section class="service">
  <h1 class="title">Services</h1>
  
<div class="row row-cols-1 row-cols-md-3 g-4">
  <?php 
  $reponse = $bdd->query('SELECT * FROM services');
  while($donnees = $reponse->fetch()){
    ?>
  <div class="col-lg-4">
    <div class="card">
      <img src="<?php echo $donnees['image']; ?>" class="card-img-top" alt=""/>
      <div class="card-body">
        <h5 class="card-title"><?php echo $donnees['titre']; ?></h5>
        <p class="card-text">
          <?php echo $donnees['contenu']; ?>
        </p>
      </div>
      
    </div>
    
 </div>
 <?php 
}
?> 
  <!-- <div class="col-lg-4">
    <div class="card">
      <img src="s2.jpg" class="card-img-top" alt="Palm Springs Road"/>
      <div class="card-body">
        <h5 class="card-title">Hébergement et séjours</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <img src="t1.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Transport</h5>
        <p>additional content. This content is a little bit longer.</p>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div> -->
</div><br><br><br>
  <!-- <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col-lg-4">
    <div class="card">
      <img src="i9.jpg" class="card-img-top" alt="Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Santé</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <img src="t1.jpg" class="card-img-top" alt="Los Angeles Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Tourisme et loisirs</h5>
        <p>additional content. This content is a little bit longer.</p>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
    <div class="card">
      <img src="s2.jpg" class="card-img-top" alt="Skyscrapers"/>
      <div class="card-body">
        <h5 class="card-title">Sécurité</h5>
        <p class="card-text">
          This is a longer card with supporting text below as a natural lead-in to
          additional content. This content is a little bit longer.
        </p>
      </div>
    </div>
  </div>
</div>
</div> -->
</section><br><br>
<section>
    <h1 class="text-center">Hébergements</h1>
    <p class="text-center">Nous disposons des hotels 5 étoiles et des auberges pour vos séjours partout au Burkina</p>
  <div class="heb">
    <img src="" alt="">
    <img src="" alt="">
    <img src="" alt="">
  </div>
</section><br><br>
<?php include("footer.php"); ?>
</body>
</html>