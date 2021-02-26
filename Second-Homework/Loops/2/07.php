<?php
class RollTwoDice
{
    private int $start = 1;
    private int $end = 6;

    public function rollDice(): int{
        return rand($this->start, $this->end);
    }

}

$randomRoll = new RollTwoDice();

$desiredSum = readline('Desired sum: ');

do{
    $randomOne = $randomRoll->rollDice();
    $randomTwo = $randomRoll->rollDice();

    $randomSum = $randomOne + $randomTwo;

    echo $randomOne . ' and ' . $randomTwo . ' = ' . $randomSum . PHP_EOL;

}while($desiredSum != $randomSum);

