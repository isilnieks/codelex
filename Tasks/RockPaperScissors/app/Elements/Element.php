<?php

namespace App\Elements;

interface Element
{
    public function canWin(Element $element): bool;

    public function getElement(): string;
}
