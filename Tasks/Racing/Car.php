<?php

include_once 'VehicleInterface.php';

class Car implements VehicleInterface
{
    private string $name;
    private int $min;
    private int $max;
    private string $symbol;
    private int $carLocation = 0;
    private int $time = 0;

    public function __construct(string $name, int $min, int $max, string $symbol)
    {
        $this->name = $name;
        $this->min = $min;
        $this->max = $max;
        $this->symbol = $symbol;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSpeed(): int
    {
        return rand($this->min, $this->max);
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function trackLocation(): int
    {
        return $this->carLocation;
    }

    public function drive(RaceTrack $track): string
    {
        $this->carLocation += $this->getSpeed();
        return substr_replace($track->createTrack(), $this->getSymbol(), $this->trackLocation(), 1) . PHP_EOL;
    }

    public function setTime(int $time): void
    {
        $this->time = $time;
    }

    public function getTime(): int
    {
        return $this->time;
    }

}