<?php
echo "Welcome to piglet!\n";
$score = 0;

do {
    $randomNumber = rand(1, 6);
    if ($randomNumber == 1) {
        echo 'You rolled a 1!' . PHP_EOL . 'You got 0 points' . PHP_EOL;
        exit;
    } else {
        echo "You rolled $randomNumber\n";
        $toContinue = readline('Roll again? (y/n)');
        if ($toContinue === 'y') {
            $score += $randomNumber;
        } elseif ($toContinue === 'n') {
            $score += $randomNumber;
            echo "You got $score points!" . PHP_EOL;
            exit;
        }
    }
} while ($randomNumber != 1);