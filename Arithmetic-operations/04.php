<?php
$integral = 10;
$factorial = 1;
for ($i = $integral; $i >= 1; $i--) {
    $factorial = $factorial * $i;
}
echo 'Factorial of ' . $integral . ' is ' . $factorial . PHP_EOL;