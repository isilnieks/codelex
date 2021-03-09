<?php

require_once 'MovieCollection.php';

class Movie
{

    private string $title;
    private string $studio;
    private string $rating;


    public function __construct(string $title, string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function getRating(): string
    {
        return $this->rating;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getStudio(): string
    {
        return $this->studio;
    }


}

$movies = new MovieCollection();
$movies->addMovie(new Movie('Casino Royale', 'Eon Productions', 'PG13'));
$movies->addMovie(new Movie('Glass', 'Buena Vista International', 'PG13'));
$movies->addMovie(new Movie('Spider-Man: Into the Spider-Verse', 'Columbia Pictures', 'PG'));

foreach ($movies->getPG() as $movie) {
    echo $movie->getTitle() . '. Studio: ' . $movie->getStudio() . '. Rating: ' . $movie->getRating() . PHP_EOL;
}





