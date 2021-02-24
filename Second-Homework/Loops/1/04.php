<?php
$userInput = readline('Max value? ');

for ($i = 1; $i <= $userInput; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo 'FizzBuzz ';
    } elseif ($i % 3 === 0) {
        echo 'Fizz ';
    } elseif ($i % 5 === 0) {
        echo 'Buzz ';
    } else {
        echo "$i ";
    }
    if ($i % 20 === 0) {
        echo PHP_EOL;
    }
}
