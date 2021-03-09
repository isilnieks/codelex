<?php

class RecipesCollection
{
    private array $recipes;

    /**
     * @return array
     */
    public function getRecipes(): array
    {
        return $this->recipes;
    }

    public function newRecipe(Recipes $recipes): void
    {
        $this->recipes[] = $recipes;
    }

}
