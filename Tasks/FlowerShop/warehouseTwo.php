<?php

include_once 'warehouseInterface.php';

class warehouseTwo implements warehouseInterface
{
    private array $warehouseTwo;

    public function shipmentSize(Flower $flower): void
    {
        $this->warehouseTwo[] = $flower;

    }

    public function delivery(): FlowerCollection
    {
        $flowers = new FlowerCollection();

        foreach($this->warehouseTwo as $flower)
        {
            $flowers->addFlowers($flower);
        }

        return $flowers;
    }
}