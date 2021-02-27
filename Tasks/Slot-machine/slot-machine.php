<?php


$money = readline('Please enter money you want to play with: ');

$slots = [
    [],
    [],
    []
];

echo "Balance : $money\n";

//get players bet
do {
    $bet = readline('Enter your bet (min 10, step 10) : ');

    if ($bet % 10 != 0 || $bet > $money) {
        echo 'Invalid bet or dont have enough coins' . PHP_EOL;
    }

} while ($bet % 10 != 0 || $bet > $money);

$money = $money - $bet;

do {

    echo 'Balance: ' . $money . PHP_EOL;

    $freespins = 1;

    $elements = ['X', 'X', 'X', 'X', 'X', 'Y', 'Y', 'Y', 'Y', 'Q', 'Q', 'Q', 'K', 'K', 'O'];

    do {

        $freespins--;

        //clears array if there's freespins
        $slots = [
            [],
            [],
            []
        ];

        //fills array
        while (count($slots[0]) != 3 && count($slots[1]) != 3 && count($slots[2]) != 3) {
            $random = array_rand($elements);
            array_push($slots[0], $elements[$random]);
            $random = array_rand($elements);
            array_push($slots[1], $elements[$random]);
            $random = array_rand($elements);
            array_push($slots[2], $elements[$random]);
        }

        //prints slots
        foreach ($slots as $slot) {
            echo PHP_EOL;
            foreach ($slot as $element) {
                echo '|' . $element;
            }
            echo '|';
            sleep(1);
        }
        echo PHP_EOL;

        $multiplier = 1;
        $coefficient = 0;

        //checks winnings
        for ($i = 0; $i < count($elements); $i++) {
            if ($slots[0][0] === $elements[$i] && $slots[0][1] === $elements[$i] && $slots[0][2] === $elements[$i]) {
                if ($i > 0) {
                    $multiplier += $i;
                }
                $coefficient++;
            }
            if ($slots[1][0] === $elements[$i] && $slots[1][1] === $elements[$i] && $slots[1][2] === $elements[$i]) {
                if ($i > 0) {
                    $multiplier += $i;
                }
                $coefficient++;
            }
            if ($slots[2][0] === $elements[$i] && $slots[2][1] === $elements[$i] && $slots[2][2] === $elements[$i]) {
                if ($i > 0) {
                    $multiplier += $i;
                }
                $coefficient++;
            }
            if ($slots[0][0] === $elements[$i] && $slots[1][1] === $elements[$i] && $slots[2][2] === $elements[$i]) {
                if ($i > 0) {
                    $multiplier += $i;
                }
                $coefficient++;
            }
            if ($slots[0][2] === $elements[$i] && $slots[1][1] === $elements[$i] && $slots[2][0] === $elements[$i]) {
                if ($i > 0) {
                    $multiplier += $i;
                }
                $coefficient++;
            }
            if ($slots[0][0] === 'O' && $slots[1][1] === 'O' && $slots[2][2] === 'O') {
                $freespins = +5;
            }
            if ($slots[0][2] === 'O' && $slots[1][1] === 'O' && $slots[2][0] === 'O') {
                $freespins = +5;
            }
        }
    } while ($freespins != 0);

    //calculates win
    $win = $multiplier * $bet * $coefficient;

    //adds win to money
    $money += $win;

    echo 'You won ' . $win . ' coins' . PHP_EOL;

    //offers to play again or exit
    do {
        $choice = readline('Play again? y/n ');

        if ($choice == 'y' && $money > 10) {
            $money = $money - $bet;
            continue;
        } elseif ($choice == 'n') {
            exit("Returned $money coins\n");
        } elseif ($choice == 'y' && $money < 10) {
            exit("You ran out of coins\n");
        } else {
            echo 'Invalid input or ran out of coins' . PHP_EOL;
        }
    } while ($choice !== 'y');

} while ($money != 0);