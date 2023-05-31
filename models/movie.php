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