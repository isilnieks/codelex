<?php

//classes cannot be static
class Enum
{
    //only one should be static
    public static int $number = 10;
    public const VALUE = 20;

    public static function addNumber(int $number)
    {
        self::$number += $number;
    }
}


var_dump(Enum::$number); //10
Enum::$number++;
var_dump(Enum::$number); //11

$enum = new Enum;
$enum2 = new Enum;
var_dump($enum::$number); //11
Enum::addNumber(10);
var_dump($enum2::$number); //21
var_dump(Enum::$number); //21