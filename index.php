<?php
  require_once './class/Movie.php';
  $non_si_sevizia_un_paperino = new Movie("Non Si Sevizia Un Paperino", "102 minuti", "1972", "Lucio Fulci",["giallo","thriller"]);
  $milano_odia = new Movie("Milano Odia: La Polizia Non Può Sparare","100 minuti","1974","Umberto Lenzi",["noir", "poliziesco", "thriller"]);

  $non_si_sevizia_un_paperino->takePoster("https://bmoviezone.files.wordpress.com/2011/01/nonsiseviziaunpaperino.jpg");
  $milano_odia->takePoster("https://bmoviezone.files.wordpress.com/2011/01/milanoodia-lapolizia-nonpuo-sparare.jpg");

  var_dump($non_si_sevizia_un_paperino);
  var_dump($milano_odia);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Never lose h-oop-e</title>
</head>
<body>

  
  
</body>
</html>