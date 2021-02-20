<?php

$weight = readline('Enter weight: ');
$height = readline('Enter height: ');

$bmi = round($weight * 2.20462) * 703 / (round($height * 0.393701) ** 2);

if ($bmi >= 18.5 && $bmi <= 25) {
    echo "Your weight is optimal\n";
} elseif ($bmi < 18.5) {
    echo "You are considered underweight\n";
} elseif ($bmi > 25) {
    echo "You are considered overweight\n";
}
