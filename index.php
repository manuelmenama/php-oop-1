<?php
  require_once './Models/Movie.php';
  require_once './server.php';
  
  var_dump($non_si_sevizia_un_paperino);
  var_dump($movieList);
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
      <?php foreach($json_movie_db as $movie): ?>
      <div class="card">
        <img src="<?php echo $movie["poster"] ?>" alt="<?php echo $movie["title"] ?>">
        <ul>
          <li>Titolo: <?php echo $movie["title"] ?></li>
          <li>Durata: <?php echo $movie["duration"] ?></li>
          <li>Anno: <?php echo $movie["year"] ?></li>
          <li>Regia: <?php echo $movie["direction"] ?></li>
          <li>Genere: 
            <ul>
              <?php foreach($movie["genre"] as $genre): ?>
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