<?php

class CarCollection{

    private array $cars;

    public function getCars(): array
    {
        return $this->cars;
    }

    public function addCars($car): void
    {
        $this->cars[] = $car;
    }

}