<?php

namespace App;

class CarCollection
{
    private array $cars;

    public function getCars(): array
    {
        return $this->cars;
    }

    public function addCars(array $cars): void
    {
        foreach($cars as $car){
           $this->cars[] = new Car($car["name"],$car["model"],$car["litersPer"],$car["price"],$car["status"],$car["image"]);
        }
    }



}