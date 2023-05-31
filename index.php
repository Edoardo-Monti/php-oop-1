<?php

require_once __DIR__ . '/models/generi.php';
require_once __DIR__ . '/models/movie.php';




//istanza 1
$Movie1 = new Movie('John Wick', 120, new Generi('splatter', 'action'));
//istanza 2
$Movie2 = new Movie('Hulk', 180, 'fantasy');

var_dump($Movie1, $Movie2);

//cambio dato 
$Movie1 -> contenutiAggiunti(200);
var_dump($Movie1);

//stampa film 2
echo $Movie2 -> titolo . ' ' .$Movie2 -> contenutiAggiunti(200) .'min.'. ' ' .$Movie2 -> genere;



?>