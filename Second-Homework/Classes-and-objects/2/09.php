<?php

class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }

    public function show_user_name_and_balance(): string
    {
        if ($this->balance < 0) {
            $negative = '-';
            $this->setBalance($this->balance * (-1));
        } else {
            $negative = '';
        }

        return "$this->name, $negative$" . sprintf('%01.2f', $this->balance);
    }
}

$ben = new BankAccount('Benson', 17.25);

echo $ben->show_user_name_and_balance() . PHP_EOL;

$john = new BankAccount('John', -17.50);

echo $john->show_user_name_and_balance() . PHP_EOL;