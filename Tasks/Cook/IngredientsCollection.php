<?php

class IngredientsCollection
{
    private array $ingredients = [];

    /**
     * @return array
     */
    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function addIngredients(Ingredients $ingredient): void
    {
        array_push($this->ingredients, $ingredient);
    }

}
