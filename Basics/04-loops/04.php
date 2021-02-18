<?php
$array = [
    30,
    455,
    2343,
    649855,
    43596834966
];

foreach ($array as $value) {
    if ($value % 3 === 0) {
        echo "$value ";
    }
}