<?php
$menu = [
    1 => [
        'name' => 'Latte',
        'price' => 190
    ],
    2 => [
        'name' => 'Cappuccino',
        'price' => 230
    ],
    3 => [
        'name' => 'Black Coffee',
        'price' => 203
    ],
];
$money = [1 => 10, 2 => 5, 5 => 3, 10 => 4, 20 => 2, 50 => 2, 100 => 2, 200 => 1];

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


for ($i = 1; $i < count($menu) + 1; $i++) {
    echo $i . ' ' . $menu[$i]['name'] . ' ' . number_format($menu[$i]['price'] / 100, 2) . '$' . PHP_EOL;
}

do {
    $choice = readline('Choose your product:');
    if ($choice < 1 || $choice > 3) {
        echo 'There is no such product. Try again.', PHP_EOL;
    }
} while ($choice < 1 || $choice > count($menu));

$price = $menu[$choice]['price'];

$coinsEntered = [];

while ($price > array_sum($coinsEntered)) {
    $leftToPay = $price - array_sum($coinsEntered);
    $customerInput = readline("Enter $leftToPay coins: ") . PHP_EOL;
    if ($customerInput == 1 && $money['1'] != 0) {
        array_push($coinsEntered, 1);
        $money['1'] = $money['1'] - 1;
    } elseif ($customerInput == 2 && $money['2'] != 0) {
        array_push($coinsEntered, 2);
        $money['2'] = $money['2'] - 1;
    } elseif ($customerInput == 5 && $money['5'] != 0) {
        array_push($coinsEntered, 5);
        $money['5'] = $money['5'] - 1;
    } elseif ($customerInput == 10 && $money['10'] != 0) {
        array_push($coinsEntered, 10);
        $money['10'] = $money['10'] - 1;
    } elseif ($customerInput == 20 && $money['20'] != 0) {
        array_push($coinsEntered, 20);
        $money['20'] = $money['20'] - 1;
    } elseif ($customerInput == 50 && $money['50'] != 0) {
        array_push($coinsEntered, 50);
        $money['50'] = $money['50'] - 1;
    } elseif ($customerInput == 100 && $money['100'] != 0) {
        array_push($coinsEntered, 100);
        $money['100'] = $money['100'] - 1;
    } elseif ($customerInput == 200 && $money['200'] != 0) {
        array_push($coinsEntered, 200);
        $money['200'] = $money['200'] - 1;
    } else {
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

if ($change > 0) {
    foreach (array_reverse($money, true) as $key => $value) {
        if ($key <= $change) {
            echo 'Returned coin: ' . $key . PHP_EOL;
            $money[$key] = $money[$key] + 1;
            $change -= $key;
        }
    }
}
$wallet = moneyCount($money);

echo $wallet . ' coins left in your wallet' . PHP_EOL;








