<?php

include_once 'warehouseInterface.php';

class warehouseOne implements warehouseInterface
{
    private string $name;
    private int $amount = 0;

    public function shipmentSize(string $name, int $amount)
    {
        $this->name = $name;
        $this->amount = $amount;
    }

    public function delivery(): FlowerCollection
    {
        $flowers = new FlowerCollection();

        $flowers->addFlowers(new Flower($this->name, $this->amount));

        return $flowers;
    }
}