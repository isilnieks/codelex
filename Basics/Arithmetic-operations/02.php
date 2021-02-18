<?php

$userInput  = readline('Enter integer to check if its Odd or Even: ');

if($userInput % 2 === 0){
    echo "Number is even\n";
}else{
    echo "Number is odd\n";
}
echo "bye!\n";