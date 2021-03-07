<?php

Class Movie{

    private string $title;
    private string $studio;
    private string $rating;
    private array $movies = [];


    public function __construct(string $title,string $studio, string $rating)
    {
        $this->title = $title;
        $this->studio = $studio;
        $this->rating = $rating;
    }

    public function addMovies($movie):void
    {
        $this->movies = $movie;
    }

    public function getPG(): array
    {
        return array_filter($this->movies,function (Movie $movie) {
            return $movie->rating === 'PG';
        });
    }


}

$casino = new Movie('Casino Royale','Eon Productions' ,'PG13');
$glass = new Movie('Glass','Buena Vista International' ,'PG13');
$spiderMan = new Movie('Spider-Man: Into the Spider-Verse','Columbia Pictures' ,'PG');

$movies = [
    $casino,
    $glass,
    $spiderMan
];





