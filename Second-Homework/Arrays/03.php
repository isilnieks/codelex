<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

//check if an array contains a value user entered

$userValue = readline('Enter the value to search for: ');

foreach ($numbers as $number) {
    if ($number == $userValue) {
        echo "Array contains the value you entered.\n";
    }
}
if ($number != $userValue) {
    echo "Array didnt contain the value you entered.\n";
}