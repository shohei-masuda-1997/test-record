<?php
require_once(__DIR__ ."/../config/config.php");
require_once(__DIR__ ."/../Controller/vote.php");
require_once(__DIR__ ."/../Controller/artists.php");

$vote=new Vote();
?>


<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, minimum-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/style.css">


    <title>Review</title>

  </head>
  <body>
<?php foreach($artists as $artist): ?>
  <?php if($artist->getName()===$_GET["name"]): ?>
    <div class="review">
      <h1><?= h($artist->getName()); ?></h1>
      <p>genre:<?= h($artist->getGenre()); ?></p>
      <p>from:<?= h($artist->getFrom()); ?></p>
      <p>recommended song:</p>
      <iframe id="youtube" src="<?= h($artist->getRecommendation()); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>
  <?php  endif; ?>
<?php endforeach; ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/record.js"></script>
  </body>
</html>
