<?php

require_once __DIR__ . '/models/generi.php';
require_once __DIR__ . '/models/movie.php';
require_once __DIR__ . '/database/db.php';



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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>film</title>
</head>
<body>
    
<?php foreach( $arrayMovies as $elem ) { ?>

    <h1><?php echo $elem->titolo?></h1>

    <span><?php echo $elem->durata?></span>
    <li><?php echo $elem->genere->genere1?></li>
    <li><?php echo $elem->genere->genere2?></li>

<?php } ?>



</body>
</html>