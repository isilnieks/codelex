<?php
echo "Input number of terms:\n";
$number = readline('Number : 
');
$multiply = readline('Multiplicator : ');
$eachLoopResults = 1;

for ($i = $multiply; $i > 0; $i--) {
    $eachLoopResults *= $number;
}
echo "Result : $eachLoopResults\n";