<?php

class FuelGauge
{

    private int $fuel = 0;

    public function current_fuel()
    {
        return $this->fuel;
    }

    public function add_fuel()
    {
        if ($this->fuel < 70) {
            $this->fuel++;
        }
    }

    public function remove_fuel()
    {
        if ($this->fuel > 0) {

            $this->fuel--;
        }
    }
}

class Odometer
{

    private int $mileage = 0;


    public function current_mileage()
    {
        return $this->mileage;
    }

    public function add_miles(FuelGauge $fuelGauge)
    {
        if ($this->mileage < 999999) {
            $this->mileage++;
        } elseif ($this->mileage > 999999) {
            $this->mileage = 0;
        }
        if ($this->mileage % 10 === 0) {
            $fuelGauge->remove_fuel();
        }
    }
}

$fuel = new FuelGauge();
$odometer = new Odometer();

echo 'Amount of fuel: ' . $fuel->current_fuel() . PHP_EOL ;

while($fuel->current_fuel() != 70) {
    $fuel->add_fuel();
}

echo 'Fuel tank filled full' . PHP_EOL;

while($fuel->current_fuel() != 0){

    if($odometer->current_mileage() % 10 === 0) {
        echo 'Current mileage: ' . $odometer->current_mileage() . PHP_EOL;
        echo 'Amount of fuel: ' . $fuel->current_fuel() . PHP_EOL;
    }
    $odometer->add_miles($fuel);

}
