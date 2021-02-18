<?php

class Geometry
{
    public static function circleArea(int $r): string
    {
        if ($r < 0) {
            return 'Error';
        } else {
            return pi() * $r * 2;
        }
    }

    public static function rectangleArea(int $l, int $w): string
    {
        if ($l < 0 || $w < 0) {
            return 'Error';
        } else {
            return $l * $w;
        }
    }

    public static function triangleArea(int $b, int $h): float
    {
        if ($b < 0 || $h < 0) {
            return 'Error';
        } else {
            return $b * $h * 0.5;
        }
    }
}

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
$choice = readline('Enter your choice (1-4): ');

if ($choice == 1) {
    $r = readline('Enter the radius of circle: ');
    echo Geometry::circleArea($r) . PHP_EOL;
} elseif ($choice == 2) {
    $l = readline('Enter the length of rectangle: ');
    $w = readline('Enter the width of rectangle: ');
    echo Geometry::rectangleArea($l, $w) . PHP_EOL;
} elseif ($choice == 3) {
    $b = readline('Enter the base of triangle: ');
    $h = readline('Enter the height of triangle: ');
    echo Geometry::triangleArea($b, $h) . PHP_EOL;
} elseif ($choice == 4) {
    echo 'You just quit.' . PHP_EOL;
} else {
    echo 'Error' . PHP_EOL;
}


