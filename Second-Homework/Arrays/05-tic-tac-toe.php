<?php

$board = [
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-']
];
foreach ($board as $boards) {
    echo PHP_EOL;
    foreach ($boards as $value) {
        echo '|' . $value;
    }
    echo '|';
}
echo PHP_EOL;
$fullBoard = 0;

while ($fullBoard != 9) {
    $fullBoard++;
    $xCount = 0;
    $oCount = 0;
    echo PHP_EOL;

    if ($fullBoard % 2 === 0) {
        $char = 'O';
    } else {
        $char = 'X';
    }

    invalidInput:
    $userInput = readline("$char make your move (row,column): ");
    if ($userInput != '1,1' && $userInput != '1,2' && $userInput != '1,3' &&
        $userInput != '2,1' && $userInput != '3,1' && $userInput != '2,2' &&
        $userInput != '2,3' && $userInput != '3,2' && $userInput != '3,3') {
        echo 'Invalid input. Try again.' . PHP_EOL;
        goto invalidInput;
    }
    foreach ($board as $boards) {
        foreach ($boards as $value) {
            if ($value === 'X') {
                $xCount++;
            }
            if ($value === 'O') {
                $oCount++;
            }
        }
    }
    if ($oCount >= $xCount) {
        $char = 'X';
    } else {
        $char = 'O';
    }

    if ($userInput === '1,1' && $board[0][0] === '-') {
        $board[0][0] = $char;
    } elseif ($userInput === '1,2' && $board[0][1] === '-') {
        $board[0][1] = $char;
    } elseif ($userInput === '1,3' && $board[0][2] === '-') {
        $board[0][2] = $char;
    } elseif ($userInput === '2,1' && $board[1][0] === '-') {
        $board[1][0] = $char;
    } elseif ($userInput === '2,2' && $board[1][1] === '-') {
        $board[1][1] = $char;
    } elseif ($userInput === '2,3' && $board[1][2] === '-') {
        $board[1][2] = $char;
    } elseif ($userInput === '3,1' && $board[2][0] === '-') {
        $board[2][0] = $char;
    } elseif ($userInput === '3,2' && $board[2][1] === '-') {
        $board[2][1] = $char;
    } elseif ($userInput === '3,3' && $board[2][2] === '-') {
        $board[2][2] = $char;
    } else {
        echo 'The area is already filled, try again ' . PHP_EOL;
        goto invalidInput;
    }
    foreach ($board as $boards) {
        echo PHP_EOL;
        foreach ($boards as $value) {
            echo '|' . $value;
        }
        echo '|';
    }

    if ($board[0][0] === $char && $board[0][1] === $char && $board[0][2] === $char) {
        echo "\n$char wins!\n";
        exit;
    }
    if ($board[1][0] === $char && $board[1][1] === $char && $board[1][2] === $char) {
        echo "\n$char wins!\n";
        exit;
    }
    if ($board[2][0] === $char && $board[2][1] === $char && $board[2][2] === $char) {
        echo "\n$char wins!\n";
        exit;
    }
    if ($board[0][0] === $char && $board[1][0] === $char && $board[2][0] === $char) {
        echo "\n$char wins!\n";
        exit;
    }
    if ($board[0][1] === $char && $board[1][1] === $char && $board[2][1] === $char) {
        echo "\n$char wins!\n";
        exit;
    }
    if ($board[0][2] === $char && $board[1][2] === $char && $board[2][2] === $char) {
        echo "\n$char wins!\n";
        exit;
    }
    if ($board[0][0] === $char && $board[1][1] === $char && $board[2][2] === $char) {
        echo "\n$char wins!\n";
        exit;
    }
    if ($board[0][2] === $char && $board[1][1] === $char && $board[2][0] === $char) {
        echo "\n$char wins!\n";
        exit;
    }
    if ($fullBoard === 9) {
        echo "\nTie!\n";
        exit;
    }

}

