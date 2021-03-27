<?php

namespace App\Elements;

class Rock implements Element
{
    public string $symbol = 'Rock';

    public function getElement(): string
    {
        return $this->symbol;
    }

    public function canWin(Element $element): bool
    {
        if($element->getElement() === 'Scissors'){
            return true;
        }
        return false;
    }

}