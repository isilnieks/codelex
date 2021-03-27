<?php

namespace App\Elements;

class Paper implements Element
{
    public string $symbol = 'Paper';

    public function getElement(): string
    {
        return $this->symbol;
    }

    public function canWin(Element $element): bool
    {
        if($element->getElement() === 'Rock'){
            return true;
        }
        return false;
    }
}