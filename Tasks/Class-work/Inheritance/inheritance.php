<?php

abstract class Food
{
    /*public abstract function isTasty(): bool;*/
    public bool $isTasty = true;

    public abstract function size(): string;

    public function bread(): string
    {
        return 'Default';
    }
}


class Burger extends Food
{
    public function size(): string
    {
        return '15x10';
    }
}

class Sushi extends Food
{
    public function size(): string
    {
        return '2x8';
    }
}

class Brokolis extends Food
{
    public bool $isTasty = false;

    public function size(): string
    {
        return '1x1';
    }
}


$foods = [
    new Burger, new Sushi, new Brokolis
];

foreach ($foods as $food){
    if($food->isTasty){
        var_dump($food);
    }
}
foreach ($foods as $food){

    echo $food->size() . PHP_EOL;
}
foreach ($foods as $food){

    echo $food->bread() . PHP_EOL;
}