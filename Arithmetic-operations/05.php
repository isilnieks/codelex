<?php

$array = range(1, 100);

$playerChoice = strtoupper(readline('Im thinking of a number between 1-100. Try to guess it. '));

$randomNumber = array_rand($array);


if ($playerChoice === $randomNumber) {
    echo "You guessed it! What are the odds?!?!\n";
} elseif ($playerChoice > $randomNumber) {
    echo 'Sorry, you are too high. I was thinking of ' . $randomNumber . ".\n";
} elseif ($playerChoice < $randomNumber) {
    echo 'Sorry, you are too low. I was thinking of ' . $randomNumber . ".\n";
}



