<?php

$movie_db = 'movie_db.json';
if(!is_file($movie_db)){
    file_put_contents($movie_db, "[]");
}

$str_movie_db = file_get_contents($movie_db);
$json_movie_db = json_decode($str_movie_db, true);

//logica

$non_si_sevizia_un_paperino = new Movie("Non Si Sevizia Un Paperino", "102 minuti", "1972", "Lucio Fulci",["giallo","thriller"]);
$milano_odia = new Movie("Milano Odia: La Polizia Non Può Sparare","100 minuti","1974","Umberto Lenzi",["noir", "poliziesco", "thriller"]);
$macabro = new Movie("Macabro","89 minuti","1980","Lamberto Bava",["horror"]);

$non_si_sevizia_un_paperino->takePoster("https://bmoviezone.files.wordpress.com/2011/01/nonsiseviziaunpaperino.jpg");
$milano_odia->takePoster("https://bmoviezone.files.wordpress.com/2011/01/milanoodia-lapolizia-nonpuo-sparare.jpg");
$macabro->takePoster("https://bmoviezone.files.wordpress.com/2011/02/macabro.jpg");

file_put_contents($movie_db, json_encode($movieList, JSON_PRETTY_PRINT));