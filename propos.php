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
<section class="acc">

</section>
<section class="propos">
    <h1 class="title">à propos</h1>
    <div class="img-doesc">
        <div class="left">
        <video src="video.mp4"autoplay loop></video>
        </div>
    <div class="right">
      <?php 
  $reponse = $bdd->query('SELECT * FROM propos');
  while($donnees = $reponse->fetch()){
    ?>
      <h1><?php echo $donnees['title']; ?></h1>
      <h2><?php echo $donnees['contenu']; ?></h2>
        <a href="#">Lire plus</a>
    </div>
    </div>
    <?php 
  }
  ?> 
</section><br><br>

<?php include("footer.php"); ?>
</body>
</html>
