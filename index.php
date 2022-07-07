<?php

    include __DIR__ . '/Movie_class.php';

    $movie_1 = new Movie("Il Signore degli Anelli: La compagnia dell'anello", 2001, 178);
    var_dump($movie_1);

    $movie_2 = new Movie("Il Signore degli Anelli: Le due torri", 2002, 179);
    var_dump($movie_2);

    $movie_3 = new Movie("Il Signore degli Anelli: Il ritorno del Re", 2002, 200);
    var_dump($movie_3);

    $movie_4 = new Movie("Lo Hobbit - Un viaggio inaspettato", 2012, 169);
    var_dump($movie_4);

    $movie_5 = new Movie("Lo Hobbit - La desolazione di Smaug", 2013, 161);
    var_dump($movie_5);

    $movie_5 = new Movie("Lo Hobbit - La battaglia delle cinque armate", 2014, 144);
    var_dump($movie_5);

?>