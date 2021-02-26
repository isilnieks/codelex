<?php

class AsciiFigure
{
    const SIZE = 3;
}

$pattern1 = '****';
$pattern2 = '////';
$pattern3 = '\\\\\\\\';


for ($i = 0; $i < AsciiFigure::SIZE; $i++) {
    for ($x = 0; $x < 1; $x++) {
        echo str_repeat($pattern2, (AsciiFigure::SIZE - $i) - 1) . str_repeat($pattern1, $i * 2);
        echo str_repeat($pattern3, (AsciiFigure::SIZE - $i) - 1) . PHP_EOL;

    }
}