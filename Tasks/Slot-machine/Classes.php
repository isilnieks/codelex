<?php

$elements = ['X', 'X', 'X', 'X', 'Y', 'Y', 'Y', 'Q', 'Q', 'Q', 'K', 'K', 'O'];


class Money
{
    private int $money = 0;

    public function setMoney($money)
    {

        $this->money = $money;

    }

    public function getMoney()
    {

        return $this->money;

    }


}
