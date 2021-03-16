<?php

class Race
{
    private CarCollection $cars;
    private RaceTrack $track;
    private array $leaderboard = [];

    public function __construct(CarCollection $cars,RaceTrack $track){
        $this->cars = $cars;
        $this->track = $track;
    }

    public function getCars(): array
    {
        return $this->cars->getCars();
    }

    public function getTrack(): RaceTrack
    {
        return $this->track;
    }

    public function getLeaderboard(): array
    {
        return array_unique($this->leaderboard);
    }

    public function race(): void
    {
        $carsFinished = [];
        $start = microtime(true);
        do {
            print_r("\033[2J\033[;H");
            foreach ($this->getCars() as $racer) {
                $racer->getSpeed();
                print_r($racer->drive($this->getTrack()));
                if($racer->trackLocation() >= RaceTrack::LENGTH && in_array($racer->getSymbol(),$this->getLeaderboard()) === false){
                    array_push($this->leaderboard, $racer->getSymbol());
                    array_push($carsFinished,$racer);
                    $time_elapsed_secs = microtime(true) - $start;
                    $racer->setTime($time_elapsed_secs);
                }
            }
            sleep(1);
        } while (count($carsFinished) < count($this->getCars()));
    }
}