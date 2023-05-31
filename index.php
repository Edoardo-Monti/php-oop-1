<?php

class Movie{

    public $titolo;
    public $durata;
    public $genere;

    //creazione dei valori delle nostre istanze
    function __construct($titolo, $durata, $genere){
        $this -> titolo = $titolo;
        $this -> durata = $durata;
        $this -> genere = $genere;
    }

    function contenutiAggiunti($durata){
      return $this -> durata = $durata;
    }
}

//istanza 1
$Movie1 = new Movie('John Wick', 120, 'action');
//istanza 2
$Movie2 = new Movie('Hulk', 180, 'fantasy');

var_dump($Movie1, $Movie2);

$Movie2 -> contenutiAggiunti(200);
var_dump($Movie2);

echo $Movie2 -> titolo . ' ' .$Movie2 -> contenutiAggiunti(200) .'min.'. ' ' .$Movie2 -> genere;




?>