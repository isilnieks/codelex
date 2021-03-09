<?php

require_once('Dog.php');

class DogTest
{

    private array $dogs = [];

    public function createDog(Dog $dog): void
    {
        $this->dogs[] = $dog;
    }

    public function createDogs(array $dogs): void
    {
        foreach ($dogs as $dog) {
            $this->createDog($dog);
        }
    }

}

$test = new DogTest();

$test->createDogs([
    $sparky = new Dog('Sparky', 'male', null, null),
    $sam = new Dog('Sam', 'male', null, null),
    $lady = new Dog('Lady', 'female', null, null),
    $molly = new Dog('Molly', 'female', null, null),
    $buster = new Dog('Buster', 'male', $lady, $sparky),
    $coco = new Dog('Coco', 'female', $molly, $buster),
    $max = new Dog('Max', 'm', $lady, $buster),
    $rocky = new Dog('Rocky', 'male', $molly, $sam)
]);

echo $max->fathersName() . PHP_EOL;
echo $sparky->fathersName() . PHP_EOL;

if ($max->hasSameMotherAs($buster)) {
    echo "True" . PHP_EOL;
} else {
    echo "False" . PHP_EOL;
}
