<?php

$firstString = readline('Enter a string:');

$firstArray = str_split(strtolower($firstString));

foreach ($firstArray as $letter) {
    if ($letter === 'a' || $letter === 'b' || $letter === 'c') {
        echo 2;
    } elseif ($letter === 'd' || $letter === 'e' || $letter === 'f') {
        echo 3;
    } elseif ($letter === 'g' || $letter === 'h' || $letter === 'i') {
        echo 4;
    } elseif ($letter === 'j' || $letter === 'k' || $letter === 'l') {
        echo 5;
    } elseif ($letter === 'm' || $letter === 'n' || $letter === 'o') {
        echo 6;
    } elseif ($letter === 'p' || $letter === 'q' || $letter === 'r' || $letter === 's') {
        echo 7;
    } elseif ($letter === 't' || $letter === 'u' || $letter === 'v') {
        echo 8;
    } elseif ($letter === 'w' || $letter === 'x' || $letter === 'y' || $letter === 'z') {
        echo 9;
    }
}
echo PHP_EOL;

$secondString = readline('Enter a string:');

$secondArray = str_split(strtolower($firstString));

foreach ($secondArray as $letter){
    switch($letter){
        case 'a':
        case 'b':
        case 'c':
            echo '2';
            break;
        case 'd':
        case 'e':
        case 'f':
            echo '3';
            break;
        case 'g':
        case 'h':
        case 'i':
            echo '4';
            break;
        case 'j':
        case 'k':
        case 'l':
            echo '5';
            break;
        case 'm':
        case 'n':
        case 'o':
            echo '6';
            break;
        case 'p':
        case 'q':
        case 'r':
        case 's':
            echo '7';
            break;
        case 't':
        case 'u':
        case 'v':
            echo '8';
            break;
        case 'w':
        case 'x':
        case 'y':
        case 'z':
            echo '9';
            break;
    }
}
echo PHP_EOL;