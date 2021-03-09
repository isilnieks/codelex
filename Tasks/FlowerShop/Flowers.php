<?php

class Flowers
{
    private string $name;
    private int $price;
    private int $amount;
    private array $flowers = [];

    public function __construct(string $name, int $price, int $amount)
    {
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }

    public function getFlowers(): array
    {
        return $this->flowers;
    }

    public function addFlowers(Flowers $flower)
    {
        array_push($this->flowers, $flower);
    }
}