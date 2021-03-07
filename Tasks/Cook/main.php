<?php

require_once 'Ingredients.php';
require_once 'IngredientsCollection.php';
require_once 'Recipes.php';
require_once 'RecipesCollection.php';

$recipes = new RecipesCollection();
$recipes->newRecipe(new Recipes('Pancakes', ['milk', 'flour', 'eggs']));
$recipes->newRecipe(new Recipes('TurboSalad', ['coffee', 'banana']));
$recipes->newRecipe(new Recipes('NotTurboSalad', ['salad', 'tomato', 'cucumber', 'cream']));

$x = readline('Enter how many products you have: ');

$ingredients = new IngredientsCollection();

$allIngredients = [];
for ($i = 0; $i < $x; $i++) {
    $ingredient = readline('Enter the ingredient: ');
    $ingredients->addIngredients(new Ingredients($ingredient));
    array_push($allIngredients, $ingredient);
}
var_dump($recipes->getRecipes());
foreach ($recipes->getRecipes() as $recipes => $recipe) {
    echo 'Recipe for ' . $recipe->getRecipe() . ': ' . implode(', ', $recipe->getIngredients()) . PHP_EOL;
}

echo 'With ' . implode(', ', $allIngredients) . ' I can make: ' . PHP_EOL;

foreach ($recipes->getRecipes() as $recipes => $recipe) {
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
