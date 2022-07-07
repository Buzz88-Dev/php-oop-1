<?php 

 // creo un file per la classe Movie

 class Movie 
 {
    public $titolo;
    public $anno_di_uscita;
    public $durata;
    public $intervallo_cinema;
    public $regista = 'Peter Jackson';

    public function __construct(string $title, int $year, int $duration)
    {
        $this -> titolo = $title;  // titolo senza $
        $this -> anno_di_uscita = $year;
        $this -> durata = $duration;
        $this -> intervallo(); // richiamo dentro al constructor la funzione intervallo(); modifico cosi il valore della variabile $intervallo_cinema
    }


    public function intervallo(){
        if ($this -> durata > 170){
            $this -> intervallo_cinema = 'SI';
        } else {
            $this -> intervallo_cinema = 'NO';
        }
    }
 }

?>