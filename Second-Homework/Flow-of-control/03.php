<?php

$number = readline('Enter positive integer: ');

if($number > 0){
    echo(strlen((string)$number)) . PHP_EOL;
}else{
    echo 'Incorrect input' . PHP_EOL;
}