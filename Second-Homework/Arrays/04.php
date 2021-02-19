<?php
$random = [];
for ($i = 0; $i < 10; $i++) {
    $random[] = rand(1, 100);
}

$randomTwo = [];
for ($i = 0; $i < 10; $i++) {
    array_push($randomTwo, $random[$i]);
}

array_pop($random);
array_push($random, -7);

echo 'Array 1: ';
foreach ($random as $rand) {
    echo "$rand ";
}
echo "\nArray 2: ";
foreach ($randomTwo as $rand) {
    echo "$rand ";
}

