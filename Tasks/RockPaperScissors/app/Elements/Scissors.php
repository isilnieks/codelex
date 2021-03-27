<?php

namespace App\Elements;

class Scissors implements Element
{
    public string $symbol = 'Scissors';

    public function getElement(): string
    {
        return $this->symbol;
    }

    public function canWin(Element $element): bool
    {
        if($element->getElement() === 'Paper'){
            return true;
        }
        return false;
    }
}