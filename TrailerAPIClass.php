/*
Usage parameters
language : en, es, tr, fr, pr, de
Example : $api_url = 'http://trailerapi.com/api/api.php?language=fr';
*/

<?php
$api_url = 'http://trailerapi.com/api/api.php';
if($xml = simplexml_load_file($api_url)) {
  foreach( $xml as $film ) {
    $movie_name = $film->name,
    $movie_poster = $film->poster;
    $movie_id = $film->did;
    $movie_description = $film->description;
    $movie_year = $film->year;
    $movie_producer = $film->producer;
    $movie_imdb = $film->imdb;
    $movie_cast = $film->cast;
    $movie_genre = $film->genre;
    $movie_trailer = '<iframe src=”http://www.dailymotion.com/embed/video/’.$film->did.'” width=”720″ height=”480″ frameborder=”0″ allowfullscreen=”allowfullscreen”></iframe>';
  }
}
