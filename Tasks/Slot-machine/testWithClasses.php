<?php

require_once ('Classes.php');

$player = new Money();

$player->setMoney(readline('Please enter money you want to play with: '));


$slots = [
    [],
    [],
    []
];

echo 'Balance: ' . $player->getMoney() . PHP_EOL;

do {
    $bet = readline('Enter your bet (min 10, step 10) : ');

    if ($bet % 10 != 0 || $bet > $player->getMoney()) {
        echo 'Invalid bet or dont have enough coins' . PHP_EOL;
    }

} while ($bet % 10 != 0 || $bet > $player->getMoney());

$player->setMoney(-$bet);

do {

    echo 'Balance: ' . $player->getMoney() . PHP_EOL;


    $elements = ['X', 'Y', 'Q', 'K', 'O'];

    while (count($slots[0]) != 3 && count($slots[1]) != 3 && count($slots[2]) != 3) {
        $random = array_rand($elements);
        array_push($slots[0], $elements[$random]);
        $random = array_rand($elements);
        array_push($slots[1], $elements[$random]);
        $random = array_rand($elements);
        array_push($slots[2], $elements[$random]);
    }

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

    }

    $win = $multiplier * $bet * $coefficient;

    $player->setMoney( + $win);


    echo 'You won ' . $win . ' coins' . PHP_EOL;

    do {
        $choice = readline('Play again? y/n ');

        if ($choice == 'y' && $player->getMoney() > 10) {
            $money = $money - $bet;
            continue;
        } elseif ($choice == 'n') {
            exit('Returned ' . $player->getMoney() . 'coins');
        } elseif ($choice == 'y' && $player->getMoney() < 10) {
            exit("You ran out of coins\n");
        } else {
            echo 'Invalid input or ran out of coins' . PHP_EOL;
        }

    } while ($choice !== 'y');


    $slots = [
        [],
        [],
        []
    ];


} while ($player->getMoney() != 0);