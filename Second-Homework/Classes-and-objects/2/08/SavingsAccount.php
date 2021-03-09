<?php

class SavingsAccount
{

    private int $startingBalance = 0;
    private int $withdraw = 0;
    private int $deposit = 0;
    private int $interest = 0;

    public function __construct(int $startingBalance)
    {

        $this->startingBalance = $startingBalance;
    }

    public function getStartingBalance(): int
    {

        return $this->startingBalance;
    }

    public function setStartingBalance(int $startingBalance): void
    {
        $this->startingBalance = $startingBalance;
    }

    public function getWithdraw(): int
    {
        return $this->withdraw;
    }

    public function setWithdraw(float $withdraw): void
    {
        $this->withdraw = $withdraw;
    }

    public function getDeposit(): int

    {
        return $this->deposit;
    }

    public function setDeposit($deposit): void
    {
        $this->deposit = $deposit;
    }

    public function getInterest(): int
    {
        return $this->interest;
    }

    public function setInterest($interest): void
    {
        $this->interest = $interest;
    }


    public function withdraw(int $withdraw): void
    {

        $this->setStartingBalance($this->startingBalance - $withdraw);

        $this->setWithdraw($this->withdraw + $withdraw);

    }

    public function deposit(int $deposit): void
    {
        $this->setStartingBalance($this->startingBalance + $deposit);

        $this->setDeposit($this->deposit + $deposit);

    }


    public function interest(int $interest): void
    {
        $monthlyRate = $interest / 12 * 0.1;

        $this->setInterest($this->startingBalance * $monthlyRate);

        $this->setStartingBalance($this->startingBalance + ($this->startingBalance * $monthlyRate));

    }


}