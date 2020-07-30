<?php
require_once(__DIR__ ."/../config/config.php");
require_once(__DIR__ ."/../Controller/vote.php");
require_once(__DIR__ ."/../Controller/artists.php");


$vote=new Vote();

if($_SERVER["REQUEST_METHOD"]==="POST"){
  $vote->vote();
}
 ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, minimum-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/style.css">

    <title>Index</title>

  </head>
  <body>
    <section id="top-menu">
      <div class="container-fluid">
        <img src="img/logo.png" id="top-logo">
        <h2>which do you like best?</h2>
        <p id="direction">choose and click one!</p>
        <div class="row">
          <form method="post">
            <?php foreach($artists as $artist): ?>
            <?php if(!isset($i)){
                   $i=0;
                  }else{
                   $i++;
                  }
             ?>
          <div class="item">
            <h><?= h($artist->getName()); ?></h>
            <div class="artist" id="artist_<?= h($i); ?>" data-id="<?= h($i); ?>"></div>
            <p class="review"><a href="review.php?name=<?= h($artist->getName()); ?>">review</a></p>
          </div>
          <?php endforeach; ?>
            <input id="answer" type="hidden" name="answer" val="">
          </form>
          <div id="btn">vote and see result!</div>
        </div>
      </div>
    </section>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/record.js"></script>
  </body>
</html>
