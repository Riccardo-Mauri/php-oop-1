<?php
// Definisco la classe  Movie

class Movie {

// Dichiaro delle variabili d'istanza
    public $title;
    public $director;
    public $year;
    public $genre;


    // Definisco il costruttore 
    function __construct($title, $director, $year, $genre)
    {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genre = $genre;
    }


//Funzione per ottenere le informazioni del film / le scorporo per provare 
    public function getMovieTitle(){
        return
        $this->title;
    }
    public function getMovieDirector(){
        return
       $this->director;
    }
    public function getMovieYear(){
        return
       $this->year;
    }
    public function getMovieGenre(){
        return
       $this->genre;
    }
}
//Defunisco quindi le mie varibili da riempire 
$Movie1 = new Movie('Inception', 'Christopher Nolan', 2010, 'thriller');
$Movie2 = new Movie('Una Tomba per le Lucciole', 'Isao Takahata', 1988, 'drammatico');

//stampo a schermo il risultato
echo '<div>' . $Movie1 ->getMovieTitle() . '</div>' . '<div>' . $Movie1 ->getMovieDirector() .'</div>' . '<div>' . $Movie1 ->getMovieYear() . '</div>' . '<div>' . $Movie1 ->getMovieGenre() . '</div>' . '<br>';
echo '<div>' . $Movie2 ->getMovieTitle() . '</div>' . '<div>' . $Movie2 ->getMovieDirector() .'</div>' . '<div>' . $Movie2 ->getMovieYear() . '</div>' . '<div>' . $Movie2 ->getMovieGenre() . '</div>';
?>
