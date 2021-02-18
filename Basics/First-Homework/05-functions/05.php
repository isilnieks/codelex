<?php
$fruits = [
    [
        'fruit' => 'banana',
        'weight' => 12
    ],
    [
        'fruit' => 'apple',
        'weight' => 6
    ],
    [
        'fruit' => 'mango',
        'weight' => 22
    ],
    [
        'fruit' => 'orange',
        'weight' => 9
    ],
];

function weight($weight)
{
    $shippingCosts = [
        'over10' => 2,
        'under10' => 1
    ];
    if ($weight >= 10) {
        return $shippingCosts['over10'];
    }
    return $shippingCosts['under10'];
}

foreach ($fruits as $fruit) {

    echo 'Shipping cost for ' . $fruit['fruit'] . ' is ' . weight($fruit['weight']) . " euros\n";
}
