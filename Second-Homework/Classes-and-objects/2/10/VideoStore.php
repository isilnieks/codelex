<?php

class VideoStore
{
    public array $videos = [];


    public function addVideo(Video $video): void
    {
        $this->videos[] = $video;
    }

    public function checkOutVideo(string $videoTitle): void
    {
        foreach ($this->videos as $video) {
            if ($video->getTitle() === $videoTitle) {
                $video->checkOut();
            }
        }
    }

    public function returnVideo(string $videoTitle): void
    {
        foreach ($this->videos as $video) {
            if ($video->getTitle() === $videoTitle) {
                $video->return();
            }
        }
    }

    public function rateVideo(string $title, int $rating): void
    {
        foreach ($this->videos as $video) {
            if ($video->getTitle() === $title) {
                $video->rate($rating);
            }
        }
    }

    public function printInventory(): string
    {
        foreach ($this->videos as $video) {
            return 'Title: ' . $video->getTitle() . ' Rating: ' . $video->averageRating() . ' Available: ' . $video->availability() . PHP_EOL;
        }
    }
}