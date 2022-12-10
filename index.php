<?php
  require_once './Models/Movie.php';
  require_once './server.php';
  
  var_dump($non_si_sevizia_un_paperino);
  var_dump($movieList);
  var_dump($_GET);
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

  <header>

    <h1>B-Movie collection</h1>

    <button type="button" class="btn" id="add-bmovie">Add B-Movie</button>

  </header>

  <div class="container">

    <div class="my-modal" id="modal">
      <form action="./index.php" method="GET">
        
        <div class="my-form-container">
          <button type="button" class="btn">X</button>
  
          <div class="my-input-container">
            <label for="title">Titolo:</label>
            <input type="text" class="my-input" id="title" name="title">
          </div>
          <div class="my-input-container">
            <label for="duration">Durata:</label>
            <input type="text" class="my-input" id="duration" name="duration">
          </div>
          <div class="my-input-container">
            <label for="year">Anno:</label>
            <input type="text" class="my-input" id="year" name="year">
          </div>
          <div class="my-input-container">
            <label for="direction">Regia:</label>
            <input type="text" class="my-input" id="direction" name="direction">
          </div>
          <div class="my-input-container">
            <label for="poster">Locandina:</label>
            <input type="text" class="my-input" id="poster" name="poster">
          </div>
          <div class="my-input-container">
            <label for="genre1">Genere/i: #1</label>
            <input type="text" class="my-input" id="genre1" name="genre[genre1]">
          </div>
          <div class="my-input-container">
            <label for="genre2">#2</label>
            <input type="text" class="my-input" id="genre2" name="genre[genre2]">
          </div>
          <div class="my-input-container">
            <label for="genre3">#3</label>
            <input type="text" class="my-input" id="genre3" name="genre[genre3]">
          </div>
          <button type="submit" class="btn">Aggiungi</button>
        </div>
      </form>
    </div>

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

  <script src="./js/script.js"></script>
</body>
</html>