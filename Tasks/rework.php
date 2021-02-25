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

do {
    for ($i = 1; $i < count($menu) + 1; $i++) {
        echo $i . ' ' . $menu[$i]['name'] . ' ' . number_format($menu[$i]['price'] / 100, 2) . '$' . PHP_EOL;
    }
    $choice = readline('Choose your product: ') . PHP_EOL;
    if ($choice < 1 || $choice > 3) {
        print("\033[2J\033[;H");
        echo 'There is no such product. Try again.' . PHP_EOL;
    }
} while ($choice < 1 || $choice > count($menu));


