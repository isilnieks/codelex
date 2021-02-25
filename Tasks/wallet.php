<?php
$money = [1 => 10, 2 => 5, 5 => 3, 10 => 4, 20 => 2, 50 => 2, 100 => 2, 200 => 1];

function denomination($money) : array{
    $coinsTypes = [];
    foreach($money as $denomination => $amount){
        array_push($coinsTypes,$denomination);
    }
    return $coinsTypes;
}
$acceptableCoins = denomination($money);

function moneyCount(array $money): int
{
    $total = 0;
    foreach ($money as $key => $value) {
        $total += $key * $value;
    }
    return $total;
}

$wallet = moneyCount($money);

echo 'You have ' . $wallet . ' coins' . PHP_EOL;

$price = 200;
$coinsEntered = [];

while ($price > array_sum($coinsEntered)) {
    $leftToPay = $price - array_sum($coinsEntered);
    $customerInput = readline("Enter $leftToPay coins: ");
    if (isset($customerInput,$money) && $money[$customerInput] > 0) {
        array_push($coinsEntered, $customerInput);
        $money[$customerInput] = $money[$customerInput] - 1;
        var_dump($money[$customerInput]);
    }
    else {
        echo 'Invalid coin or insufficient amount of coins ' . PHP_EOL;
    }
}
$change = array_sum($coinsEntered) - $price;

function isThereChange(array $coinsEntered, int $price, int $change): string
{
    if (array_sum($coinsEntered) == $price) {
        return "Thank you for your purchase! Have a nice day!\n";
    } else {
        return 'Your change is ' . $change . ' coins' . PHP_EOL;
    }
}

echo isThereChange($coinsEntered, $price, $change);

