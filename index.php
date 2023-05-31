<?php

class Movie{

    public $titolo;
    public $durata;
    public $genere;

    function __construct($titolo, $durata, $genere){
        $this -> titolo = $titolo;
        $this -> durata = $durata;
        $this -> genere = $genere;
    }
}

$Movie1 = new Movie('John Wick', 120, 'action');
$Movie2 = new Movie('Hulk', 180, 'fantasy');

var_dump($Movie1, $Movie2);

?>