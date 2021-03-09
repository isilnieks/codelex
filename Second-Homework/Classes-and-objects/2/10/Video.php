<?php

class Video
{
    private string $title;
    private bool $checkingOut = false;
    private array $rating = [];

    public function __construct(string $title)
    {
        $this->title = $title;

    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function checkOut(): void
    {
        $this->checkingOut = false;
    }

    public function return(): void
    {
        $this->checkingOut = true;
    }

    public function rate(int $rating): void
    {
        $this->rating[] = $rating;
    }

    public function averageRating(): float
    {
        return sprintf('%01.2f', array_sum($this->rating) / count($this->rating));
    }

    public function availability(): string
    {
        if ($this->checkingOut) {
            return 'No';
        } else {
            return 'Yes';
        }

    }
}