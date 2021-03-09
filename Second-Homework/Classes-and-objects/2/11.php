<?php

class Account
{
    private string $name;
    private int $balance;

    public function __construct(string $name, int $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function deposit(int $money): void
    {
        $this->balance += $money;
    }

    public function printAccount(): string
    {
        return $this->name . '. Balance: ' . $this->balance . PHP_EOL;
    }

    public function withdraw(int $amount): void
    {
        $this->balance -= $amount;
    }

}

$bartos = new Account('Bartos', 100);

echo $bartos->printAccount();


$matt = new Account('Matt', 1000);
$ivo = new Account('Ivo', 0);

$matt->withdraw(100);
$ivo->deposit(100);

echo $matt->printAccount();
echo $ivo->printAccount();


class Transfering
{
    public function transfer(Account $from, Account $to, int $howMuch): void
    {
        $from->withdraw($howMuch);
        $to->deposit($howMuch);
    }

}

$a = new Account('A', 100);
$b = new Account('B', 0);
$c = new Account('C', 0);

$transfer = new Transfering();

$transfer->transfer($a, $b, 50);
$transfer->transfer($b, $c, 25);

echo $a->printAccount();
echo $b->printAccount();
echo $c->printAccount();


