<?php
$shop = [
    'bread' => 1,
    'milk' => 2,
    'hat' => 10,
    'water' => 3,
    'shoes' => 20,
];

function total(string $product, int $amount, array $shop): string
{
    foreach ($shop as $key => $value) {
        if ($product == $key) {
            $fullPrice = $shop[$key] * $amount;

            return 'Your order is to buy ' . $amount . ' ' . $key . '.' . ' Price : ' . $fullPrice . 'euros';
        }
    }

}

$product = readline('Bread = 1. Milk = 2. Hat = 10. Water = 3. Shoes = 20 . Enter the product you would like to buy: ');
$amount = readline('Enter the amount: ');
echo total($product, $amount, $shop);


