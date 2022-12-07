<?php
  require_once './class/Movie.php';
  $non_si_sevizia_un_paperino = new Movie("Non Si Sevizia Un Paperino", "102 minuti", "1972", "Lucio Fulci",["giallo","thriller"]);
  $milano_odia = new Movie("Milano Odia: La Polizia Non Può Sparare","100 minuti","1974","Umberto Lenzi",["noir", "poliziesco", "thriller"]);
  $macabro = new Movie("Macabro","89 minuti","1980","Lamberto Bava",["horror"]);

  $non_si_sevizia_un_paperino->takePoster("https://bmoviezone.files.wordpress.com/2011/01/nonsiseviziaunpaperino.jpg");
  $milano_odia->takePoster("https://bmoviezone.files.wordpress.com/2011/01/milanoodia-lapolizia-nonpuo-sparare.jpg");
  $macabro->takePoster("https://bmoviezone.files.wordpress.com/2011/02/macabro.jpg");

  $movieList = [$non_si_sevizia_un_paperino, $milano_odia, $macabro]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>Don't lose h-oop-e</title>
</head>
<body>

  <div class="container">
    <h1>B-Movie collection</h1>

    <div class="wrapper">
      <?php foreach($movieList as $movie): ?>
      <div class="card debug">
        <img src="<?php echo $movie->poster ?>" alt="<?php echo $movie->title ?>">
        <ul>
          <li><?php echo $movie->title ?></li>
          <li><?php echo $movie->duration ?></li>
          <li><?php echo $movie->year ?></li>
          <li><?php echo $movie->direction ?></li>
          <li>Genere: 
            <ul>
              <?php foreach($movie->genre as $genre): ?>
              <li><?php echo $genre ?></li>
              <?php endforeach; ?>
            </ul>
          </li>
        </ul>
      </div>
      <?php endforeach; ?>

    </div>

  </div>

</body>
</html>