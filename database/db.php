<?php

require_once __DIR__ . '/../models/generi.php';
require_once __DIR__ . '/../models/movie.php';



$arrayMovies = [
    new Movie('John Wick', 120, new Generi('splatter', 'action')),
    new Movie('Hulk', 130, new Generi('fantasy', 'action')),
    new Movie('SpiderMan', 170, new Generi('heros', 'action')),
    new Movie('IronMan', 160, new Generi('funny', 'action')),
    new Movie('BlackPanter', 140, new Generi('documentary', 'action')),
];