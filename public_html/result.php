<?php
require_once(__DIR__ ."/../config/config.php");
require_once(__DIR__ ."/../Controller/vote.php");
require_once(__DIR__ ."/../Controller/artists.php");


$vote=new Vote();
$data=$vote->getResults();
 ?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, minimum-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/style.css">

    <title>Result</title>

  </head>
  <body>
    <section id="result">
      <div class="container-fluid">
        <img src="img/logo.png" id="top-logo">
        <h2>result...</h2>
        <div class="row">
          <?php for($i=0;$i<6;$i++): ?>
          <div class="item">
            <div class="artist" id="artist_<?= h($i); ?>" data-id="<?= h($i); ?>">
              <?= h($data[$i]); ?>
            </div>
          </div>
        <?php endfor; ?>
        </div>
        <div id="back"><a href="index.php">back</a></div>
      </div>
    </section>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/record.js"></script>
  </body>
</html>
