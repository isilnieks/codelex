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
        'price' => 200
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
    $customerInput = readline("Enter $leftToPay coins: ");
    if (isset($customerInput, $money) && $money[$customerInput] > 0) {
        array_push($coinsEntered, $customerInput);
        $money[$customerInput] = $money[$customerInput] - 1;
    } else {
        echo 'Invalid coin or insufficient amount of coins ' . PHP_EOL;
    }
}

$change = array_sum($coinsEntered) - $price;

function isThereChange(array $coinsEntered, int $price, int $change): string
{
    if (array_sum($coinsEntered) == $price) {
        return "Thank you for your purchase! Have a nice day!\n";

    }
    return 'Your change is ' . $change . ' coins' . PHP_EOL;

}

echo isThereChange($coinsEntered, $price, $change);

if ($change > 0) {
    foreach (array_reverse($money, true) as $key => $value) {
        if ($change < $key) {
            continue;
        }
        $num = intdiv($change, $key);

        echo "Returned {$key} - {$num} coins\n";

        $change -= $key * $num;

        $money[$key]++;

        if ($change === 0) {
            break;
        }
    }
}

$wallet = moneyCount($money);
echo $wallet . ' coins left in your wallet' . PHP_EOL;