<?php


//var izmantot tikai mantošanai, nevar būt sava instance
abstract class Animal
{
    //Mantojas
    protected string $name = 'Animal';
    public int $age = 20;
    //Nemantojas
    private int $a;

    public function name()
    {
        return $this->name;
    }

    public function __construct()
    {
        var_dump('construct Animal');
    }
}

class Skunk extends Animal
{
    /*public function name(): string{
        return $this->name;
    }*/
    protected string $name = 'TheDog';

    public function name(): string
    {
        return strtoupper($this->name());
    }

}

class Cat extends Animal
{
    public function __construct()
    {
        var_dump('construct Cat');
        parent::__construct();
    }
    public function murr(): void
    {
        var_dump('murrr!');
    }
}
$cat = new Cat;
$skunk = new Skunk;

var_dump($cat instanceof Animal);

var_dump((new Cat)->name());

$animals = [$cat, $skunk];

foreach($animals as $animal){

    $animal->jump();
}