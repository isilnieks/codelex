<?php

$ifDay = readline('Enter a number of a day of the week:');

if ($ifDay = 0) {
    echo 'Sunday';
} elseif ($ifDay = 1) {
    echo 'Monday';
} elseif ($ifDay = 2) {
    echo 'Tuesday';
} elseif ($ifDay = 3) {
    echo 'Wednesday';
} elseif ($ifDay = 4) {
    echo 'Thursday';
} elseif ($ifDay = 5) {
    echo 'Friday';
} elseif ($ifDay = 6) {
    echo 'Saturday';
} else {
    echo 'Not a valid day';
}

echo PHP_EOL;

$switchDay = readline('Enter a number of a day of the week:');

switch ($switchDay) {
    case 0:
        echo 'Sunday';
        break;
    case 1:
        echo 'Monday';
        break;
    case 2:
        echo 'Tuesday';
        break;
    case 3:
        echo 'Wednesday';
        break;
    case 4:
        echo 'Thursday';
        break;
    case 5:
        echo 'Friday';
        break;
    case 6:
        echo 'Saturday';
        break;
    default:
        echo 'Not a valid day';
}
echo PHP_EOL;