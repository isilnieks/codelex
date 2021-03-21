<?php

namespace App;

class Car
{
    private string $name;
    private string $model;
    private int $litersPer;
    private int $price;
    private string $status;
    private $image;

    public function __construct(string $name,string $model,int $litersPer,int $price,string $status, $image)
    {
        $this->name = $name;
        $this->model = $model;
        $this->litersPer = $litersPer;
        $this->price = $price;
        $this->status = $status;
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getModel(): string
    {
        return $this->model;
    }
    public function getLitersPer(): int
    {
        return $this->litersPer;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}