<?php

class Product
{
    private string $name;
    public float $price_at_start;
    public int $amount_at_start;

    public function __construct(string $name, float $price_at_start, int $amount_at_start)
    {
        $this->name = $name;
        $this->price_at_start = $price_at_start;
        $this->amount_at_start = $amount_at_start;
    }

    public function print_product():void
    {

        echo $this->name . ', price ' . $this->price_at_start . ' amount ' . $this->amount_at_start . PHP_EOL;

    }
}

$mouse = new Product('Logitech mouse', 70.00,14);
$phone = new Product('iPhone 5s', 999.99,3);
$projector = new Product('Epson EB-U05',440.46,1);

$projector->price_at_start = 500.50;

$mouse->print_product();
$phone->print_product();
$projector->print_product();