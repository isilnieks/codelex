<?php

require_once 'Race.php';
require_once 'Car.php';
require_once 'CarCollection.php';
require_once 'RaceTrack.php';
require_once 'FlyingCar.php';

$raceTrack= new RaceTrack();
$rivals = new CarCollection();
$rivals->addCars($mcqueen = new Car('McQueen', 3, 5,'Q'));
$rivals->addCars($dinoco = new Car('Dinoco', 2, 5,'D'));
$rivals->addCars($chickhick = new Car('Chick Hicks', 2, 3,'C'));
$rivals->addCars($magicCar = new FlyingCar('Magician',5,5, '^'));
$race = new Race($rivals,$raceTrack);
$race->race();

$place = 1;
foreach($race->getLeaderboard() as $racer)
{
    foreach ($rivals->getCars() as $rival)
    {
        if($rival->getSymbol() === $racer){
            echo $place . '.' . $rival->getName() . ' | ' . $rival->getTime() . ' seconds'. PHP_EOL;
            $place++;
        }
    }
}



//while everybody hasnt finished continue race
//foreach make a move
//set speed for car
//replace the track index with symbol
//get leaderboard
//count how long it took to reach finish
//


