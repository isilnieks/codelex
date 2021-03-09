<?php

require_once 'Ingredients.php';
require_once 'IngredientsCollection.php';
require_once 'Recipes.php';
require_once 'RecipesCollection.php';

$ingredients = new IngredientsCollection();
$recipes = new RecipesCollection();
$recipes->newRecipe(new Recipes('Pancakes', ['milk', 'flour', 'eggs']));
$recipes->newRecipe(new Recipes('TurboSalad', ['coffee', 'banana']));
$recipes->newRecipe(new Recipes('NotTurboSalad', ['salad', 'tomato', 'cucumber', 'cream']));

$x = readline('Enter how many products you have: ');



for ($i = 0; $i < $x; $i++) {
    $ingredient = readline('Enter the ingredient: ');
    $ingredients->addIngredients(new Ingredients($ingredient));
}

foreach ($recipes->getRecipes() as $recipe) {
    echo 'Recipe for ' . $recipe->getRecipe() . ': ' . implode(', ', $recipe->getIngredients()) . PHP_EOL;
}

echo 'With ';
foreach ($ingredients->getIngredients() as $ingredient)
{
    echo  $ingredient->getIngredient() . ', ';
}
echo 'i can make:' . PHP_EOL;

$allIngredients = [];

foreach ($ingredients->getIngredients() as $ingredient)
{
    array_push($allIngredients,$ingredient->getIngredient());
}

foreach ($recipes->getRecipes() as $recipe)
{
    $missing = array_diff($recipe->getIngredients(), $allIngredients);

    echo $recipe->getRecipe() . ': Missing ingredients - ' . implode(',', $missing) . PHP_EOL;
}

//X: 2
//tomato
//cucumber

//Recipe - tomato, eggs, cucumber, banana / TurboSalad
//Recipe tomato, nuts / NotTurboSalad

//With Tomato i can make TurboSalad, NotTurboSalad
//TurboSalad: Missing ingredients - eggs, banana
//NotTurboSalad: Missing - nuts
