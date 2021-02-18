<?php

$integerOne = readline('Enter integer 1: ');
$integerTwo = readline('Enter integer 2: ');

$arrayOfIntegers = [$integerOne, $integerTwo];

if (in_array(15, $arrayOfIntegers) || array_sum($arrayOfIntegers) === 15 || abs($integerOne - $integerTwo) === 15) {
    echo "True\n";
} else {
    echo "False\n";
};
