<?php
$animals = ['sheep', 'sheep', 'sheep', 'wolf', 'sheep', 'wolf', 'sheep', 'sheep'];

for ($i = 0; $i < count($animals) - 1; $i++) {
    if ($animals[$i] === 'wolf') {
        echo 'HEHE ';
    } elseif ($animals[$i] === 'sheep' && $animals[$i + 1] === 'wolf') {
        echo 'OMG ';
    } else {
        echo 'Happy ';
    }
}
if (end($animals)) {
    echo 'Happy ';
}
