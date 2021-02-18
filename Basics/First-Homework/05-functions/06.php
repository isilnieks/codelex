<?php
$array = [3, 6, 9, 1.5, 'viens'];

for ($i = 0; $i < count($array); $i++) {
    if (is_numeric($array[$i])) {
        echo ($array[$i] * 2) . PHP_EOL;
    }
}