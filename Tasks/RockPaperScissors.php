<?php

$pcOptions = ['R', 'P', 'S'];
$playerChoice = strtoupper(readline('Enter (R)ock, (P]aper or (S)cissors: '));

$pcRandom = $pcOptions[rand(0,2)];

if(! in_array($playerChoice, $pcOptions))
{
    echo "Invalid option!\n";
    exit;
}
echo 'Computer: ' . $pcRandom . PHP_EOL;
echo 'You: ' . $playerChoice . PHP_EOL;
if($playerChoice === $pcRandom){

    echo "Its a tie\n";
}
switch([$playerChoice, $pcRandom]){
    case['P' , 'R']:
    case['R' , 'S']:
    case['S' , 'P']:
        echo "You win!\n";
        Break;
    case['P' , 'S']:
    case['R' , 'P']:
    case['S' , 'R']:
        echo "You lose!\n";
        Break;

}



