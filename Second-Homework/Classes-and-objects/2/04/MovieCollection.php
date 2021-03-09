<?php

class MovieCollection
{
    private array $movies = [];

    public function addMovie($movie): void
    {
        $this->movies[] = $movie;
    }

    public function getPG(): array
    {
        return array_filter($this->movies, function (Movie $movie): string {
            return $movie->getRating() === 'PG';
        });
    }

}