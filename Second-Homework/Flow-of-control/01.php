<?php
$numberOne = readline('Input the 1st number: ');
$numberTwo = readline('Input the 2nd number: ');
$numberThree = readline('Input the 3rd number: ');

echo 'Larger number: ' . max($numberOne, $numberTwo, $numberThree) . PHP_EOL;