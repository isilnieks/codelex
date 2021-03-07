<?php

require_once ('SavingsAccount.php');

//ask for starting balance

$savingsAccount = new SavingsAccount(readline('How much money is in the account?:'));

//ask for annual interest rate

$interestRate = readline('Enter the annual interest rate:');

//ask for number of months since account was established

$accountExistence = readline('ow long has the account been opened?');

//loop =>
for($i = 1; $i <= $accountExistence; $i++){

    $savingsAccount->deposit(readline("Enter amount deposited for month: $i:" ));
    $savingsAccount->withdraw(readline("Enter amount withdrawn for $i:"));
    $savingsAccount->interest($interestRate);
}

echo 'Total deposited: $' . sprintf('%01.2f',($savingsAccount->getDeposit())) . PHP_EOL;
echo 'Total withdrawn: $' . sprintf('%01.2f',$savingsAccount->getWithdraw()) . PHP_EOL;
echo 'Interest earned: $' . sprintf('%01.2f',$savingsAccount->getInterest()) . PHP_EOL;
echo 'Ending balance: $' . sprintf('%01.2f',$savingsAccount->getStartingBalance()) . PHP_EOL;
