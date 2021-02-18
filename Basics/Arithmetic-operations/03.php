<?php
$lowerBound = 1;
$upperBound = 100;

$sum = 0;
for($i = $lowerBound; $i <= $upperBound; $i++){
    $sum += $i;
}
$average = $sum / $upperBound;

echo 'The sum of ' . $lowerBound . ' to ' . $upperBound . ' is ' . $sum . PHP_EOL;
echo 'The average is ' . $average . PHP_EOL;
