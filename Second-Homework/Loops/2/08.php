<?php

class NumberSquare{


    public function range(): void{

        $min = readline('Min?');
        $max = readline('Max?');

        $range = range($min,$max);

        echo implode($range) . PHP_EOL;

        for($i = 0; $i < count(($range)) - 1; $i++){

            $firstNumber = $range[0];

            array_shift($range);

            array_push($range, $firstNumber);

            echo implode($range) . PHP_EOL;

        }
    }
}
$numberSquare = new NumberSquare();
$numberSquare->range();



