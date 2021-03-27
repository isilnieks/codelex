<?php

namespace App;

use App\Elements\Element;

class Computer
{
    private Element $choice;

    public function __construct(Element $choice)
    {
        $this->choice = $choice;
    }

    public function getChoice(): Element
    {
        return $this->choice;
    }
}