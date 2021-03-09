<?php

class Ingredients
{
    private string $ingredient;

    public function __construct(string $ingredient)
    {
        $this->ingredient = $ingredient;
    }

    /**
     * @return string
     */
    public function getIngredient(): string
    {
        return $this->ingredient;
    }
}