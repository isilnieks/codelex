<?php
$firstWord = readline('Enter first word:');
$secondWord = readline('Enter second word:');
$dotsNeeded = 30 - (strlen($firstWord)+ strlen($secondWord));

echo $firstWord;

for($i = 0; $i < $dotsNeeded; $i++){
    echo '.';
}
echo $secondWord . PHP_EOL;


