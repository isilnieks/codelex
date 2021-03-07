<?php

class Recipes
{
    private string $recipe;
    private array $ingredients = [];

    public function __construct(string $name, array $ingredients)
    {
        $this->recipe = $name;
        $this->ingredients = $ingredients;
    }

    public function getRecipe(): string
    {
        return $this->recipe;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }


}