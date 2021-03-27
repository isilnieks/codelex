<?php

namespace App\Elements;

class ElementsCollection
{
    private array $elements = [];

    public function addElement(Element $element): void
    {
        $this->elements[] = $element;
    }

    public function addMultipleElements(array $elements): void
    {
        foreach($elements as $element){
            $this->addElement($element);
        }
    }

    public function getElements(): array
    {
        return $this->elements;
    }
}