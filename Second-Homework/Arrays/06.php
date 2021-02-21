<?php
$words = ['random', 'keyboard', 'water', 'train', 'computer', 'soup', 'microphone', 'bookkeeper'];
$randomWord = str_split($words[rand(0, count($words) - 1)]);
$misses = [];
$game = [];
$tries = 7;

for ($i = 0; $i < count($randomWord); $i++) {
    array_push($game, '_');
}

echo 'Word: ' . implode(' ', $game) . PHP_EOL;

while ($game != $randomWord) {
    echo PHP_EOL;
    $userInput = readline('Guess: ');

    if (!in_array($userInput, $misses) && !in_array($userInput, $randomWord)) {
        array_push($misses, $userInput);
        $tries--;
    }
    for ($i = 0; $i < count($randomWord); $i++) {
        if ($randomWord[$i] === $userInput) {
            $game[$i] = $userInput;
        }
    }

    echo 'Word: ' . implode(' ', $game) . PHP_EOL;
    echo 'Misses: ' . implode(' ', $misses);
    echo PHP_EOL;
    if ($game === $randomWord) {
        echo "YOU GOT IT!\n";
        exit;
    }

    if ($tries === 0) {
        echo "YOU LOST!\n";
        exit;
    }

}
