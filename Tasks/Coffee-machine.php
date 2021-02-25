<?php

$money = [1 => 10, 2 => 5, 5 => 3, 10 => 4, 20 => 2, 50 => 2, 100 => 2, 200 => 1];
foreach ($money as $key => $value) {
    $total[] = $key * $value;
}
$wallet = array_sum($total);

echo "You have $wallet coins in your wallet\n";

if ($wallet < 190) {
    echo "You dont have enough money in your wallet to buy anything\n";
    exit;
}
tryAgain:

echo "Latte[1] 1.90$\nCappuccino[2] 2.30$ \nBlack coffee[3] 2.03$\n";
$choice = readline('Choose your product: ') . PHP_EOL;
if ($choice != 1 && $choice != 2 && $choice != 3) {
    print("\033[2J\033[;H");
    echo 'There is no such product. Try again.' . PHP_EOL;
    goto tryAgain;
}

if ($choice == 1) {
    $price = 190;
    $coinsEntered = [];
    while ($price > array_sum($coinsEntered)) {
        $leftToPay = $price - array_sum($coinsEntered);
        $customerInput = readline("Enter $leftToPay coins: ") . PHP_EOL;
        if ($customerInput == 1 && $money['1'] != 0) {
            array_push($coinsEntered, 1);
            $money['1'] = $money['1'] - 1;
        } elseif ($customerInput == 2 && $money['2'] != 0) {
            array_push($coinsEntered, 2);
            $money['2'] = $money['2'] - 1;
        } elseif ($customerInput == 5 && $money['5'] != 0) {
            array_push($coinsEntered, 5);
            $money['5'] = $money['5'] - 1;
        } elseif ($customerInput == 10 && $money['10'] != 0) {
            array_push($coinsEntered, 10);
            $money['10'] = $money['10'] - 1;
        } elseif ($customerInput == 20 && $money['20'] != 0) {
            array_push($coinsEntered, 20);
            $money['20'] = $money['20'] - 1;
        } elseif ($customerInput == 50 && $money['50'] != 0) {
            array_push($coinsEntered, 50);
            $money['50'] = $money['50'] - 1;
        } elseif ($customerInput == 100 && $money['100'] != 0) {
            array_push($coinsEntered, 100);
            $money['100'] = $money['100'] - 1;
        } elseif ($customerInput == 200 && $money['200'] != 0) {
            array_push($coinsEntered, 200);
            $money['200'] = $money['200'] - 1;
        } else {
            echo 'Invalid coin or insufficient amount of coins ' . PHP_EOL;
        }
    }
    $changeCalculation = array_sum($coinsEntered) - $price;
    $change = $changeCalculation;
    if (array_sum($coinsEntered) == $price) {
        echo "Thank you for your purchase! Have a nice day!\n";
    } else {
        echo 'Your change is ' . $change . ' coins' . PHP_EOL;
    }
    if ($change > 0) {
        foreach (array_reverse($money, true) as $key => $value) {
            if ($key <= $change) {
                echo 'Returned coin: ' . $key . PHP_EOL;
                $money[$key] = $money[$key] + 1;
                $change -= $key;
            }
        }
    }
    foreach ($money as $key => $value) {
        $total2[] = $key * $value;
    }
    $wallet = array_sum($total2);
    echo $wallet . ' coins left in your wallet' . PHP_EOL;
}
if ($choice == 2) {
    $price = 230;
    $coinsEntered = [];
    while ($price > array_sum($coinsEntered)) {
        $leftToPay = $price - array_sum($coinsEntered);
        $customerInput = readline("Enter $leftToPay coins: ") . PHP_EOL;
        if ($customerInput == 1 && $money['1'] != 0) {
            array_push($coinsEntered, 1);
            $money['1'] = $money['1'] - 1;
        } elseif ($customerInput == 2 && $money['2'] != 0) {
            array_push($coinsEntered, 2);
            $money['2'] = $money['2'] - 1;
        } elseif ($customerInput == 5 && $money['5'] != 0) {
            array_push($coinsEntered, 5);
            $money['5'] = $money['5'] - 1;
        } elseif ($customerInput == 10 && $money['10'] != 0) {
            array_push($coinsEntered, 10);
            $money['10'] = $money['10'] - 1;
        } elseif ($customerInput == 20 && $money['20'] != 0) {
            array_push($coinsEntered, 20);
            $money['20'] = $money['20'] - 1;
        } elseif ($customerInput == 50 && $money['50'] != 0) {
            array_push($coinsEntered, 50);
            $money['50'] = $money['50'] - 1;
        } elseif ($customerInput == 100 && $money['100'] != 0) {
            array_push($coinsEntered, 100);
            $money['100'] = $money['100'] - 1;
        } elseif ($customerInput == 200 && $money['200'] != 0) {
            array_push($coinsEntered, 200);
            $money['200'] = $money['200'] - 1;
        } else {
            echo 'Invalid coin or insufficient amount of coin left ' . PHP_EOL;
        }
    }
    $changeCalculation = array_sum($coinsEntered) - $price;
    $change = $changeCalculation;
    if (array_sum($coinsEntered) == $price) {
        echo "Thank you for your purchase! Have a nice day!\n";
    } else {
        echo 'Your change is ' . $change . ' coins' . PHP_EOL;
    }
    if ($change > 0) {
        foreach (array_reverse($money, true) as $key => $value) {
            if ($key <= $change) {
                echo 'Returned coin: ' . $key . PHP_EOL;
                $money[$key] = $money[$key] + 1;
                $change -= $key;
            }
        }
    }
    foreach ($money as $key => $value) {
        $total2[] = $key * $value;
    }
    $wallet = array_sum($total2);
    echo $wallet . ' coins left in your wallet' . PHP_EOL;
}
if ($choice == 3) {
    $price = 203;
    $coinsEntered = [];
    while ($price > array_sum($coinsEntered)) {
        $leftToPay = $price - array_sum($coinsEntered);
        $customerInput = readline("Enter $leftToPay coins: ") . PHP_EOL;
        if ($customerInput == 1 && $money['1'] != 0) {
            array_push($coinsEntered, 1);
            $money['1'] = $money['1'] - 1;
        } elseif ($customerInput == 2 && $money['2'] != 0) {
            array_push($coinsEntered, 2);
            $money['2'] = $money['2'] - 1;
        } elseif ($customerInput == 5 && $money['5'] != 0) {
            array_push($coinsEntered, 5);
            $money['5'] = $money['5'] - 1;
        } elseif ($customerInput == 10 && $money['10'] != 0) {
            array_push($coinsEntered, 10);
            $money['10'] = $money['10'] - 1;
        } elseif ($customerInput == 20 && $money['20'] != 0) {
            array_push($coinsEntered, 20);
            $money['20'] = $money['20'] - 1;
        } elseif ($customerInput == 50 && $money['50'] != 0) {
            array_push($coinsEntered, 50);
            $money['50'] = $money['50'] - 1;
        } elseif ($customerInput == 100 && $money['100'] != 0) {
            array_push($coinsEntered, 100);
            $money['100'] = $money['100'] - 1;
        } elseif ($customerInput == 200 && $money['200'] != 0) {
            array_push($coinsEntered, 200);
            $money['200'] = $money['200'] - 1;
        } else {
            echo 'Invalid coin or insufficient amount of coins ' . PHP_EOL;
        }
    }
    $changeCalculation = array_sum($coinsEntered) - $price;
    $change = $changeCalculation;
    if (array_sum($coinsEntered) == $price) {
        echo "Thank you for your purchase! Have a nice day!\n";
    } else {
        echo 'Your change is ' . $change . ' coins' . PHP_EOL;
    }
    if ($change > 0) {
        foreach (array_reverse($money, true) as $key => $value) {
            if ($key <= $change) {
                echo 'Returned coin: ' . $key . PHP_EOL;
                $money[$key] = $money[$key] + 1;
                $change -= $key;
            }
        }
    }
    foreach ($money as $key => $value) {
        $total2[] = $key * $value;
    }
    $wallet = array_sum($total2);
    echo $wallet . ' coins left in your wallet' . PHP_EOL;
}