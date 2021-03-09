<?php

require_once 'Flower.php';
require_once 'FlowerCollection.php';
require_once 'warehouseOne.php';
require_once 'warehouseInterface.php';
require_once 'warehouseTwo.php';

$flowers = new FlowerCollection();
$flowers->addFlowers($tulip = new Flower('Tulip', 10));
$flowers->addFlowers($rose = new Flower('Rose', 10));
$flowers->addFlowers($sunflower = new Flower('Sunflower', 10));

$tulip->setPrice(120);
$rose->setPrice(200);
$sunflower->setPrice(300);

$warehouseOne = new warehouseOne();
$warehouseOne->shipmentSize('Tulip',10);
//add delivery amount to main collection
foreach($flowers->getFlowers() as $flower){
    foreach($warehouseOne->delivery()->getFlowers() as $delivery){
       if($flower->getName() == $delivery->getName())
       {
        $flower->addAmount($delivery->getAmount());
       }
    }
}

$warehouseTwo = new warehouseTwo();
$warehouseTwo->shipmentSize(new Flower('Rose', 25));
foreach($flowers->getFlowers() as $flower){
    foreach($warehouseTwo->delivery()->getFlowers() as $delivery){
        if($flower->getName() == $delivery->getName())
        {
            $flower->addAmount($delivery->getAmount());
        }
    }
}




$gender = readline('Enter your gender male/female: ');

$howManyTypes = 0;
foreach ($flowers->getFlowers() as $flower) {
    echo $howManyTypes . '. Flower: ' . $flower->getName() . ' | Price: ' . $flower->getPrice() . ' | Amount available: ' . $flower->getAmount() . PHP_EOL;
    $howManyTypes++;
}
$howManyTypes -= 1;
$choice = readline("Choose your product: (0-$howManyTypes): ");
$amount = readline("How many would you like to buy: ");


$cost = $flowers->getFlowers()[$choice]->getPrice();

$flowers->getFlowers()[$choice]->removeAmount($amount);

if($gender == 'female'){
    $discount = ($cost * $amount) - (($cost * $amount) * 0.8);
    echo 'You have to pay: ' . (($cost * $amount) * 0.8) . ' coins.' . 'Discount: ' . $discount . PHP_EOL;
}else{
    echo 'You have to pay: ' . ($cost * $amount) . ' coins' . PHP_EOL;
}

//FlowerShop
//List of flowers & prices
//Option to purchase
//First question: male/female
//if female -> apply 20% discount at the end
//3 different warehouse where flowers come from
//FlowerShop 1 -> Warehouse1/Warehouse2/Warehouse3
//Warehouse1 -> Flower('Tulip', 200)
