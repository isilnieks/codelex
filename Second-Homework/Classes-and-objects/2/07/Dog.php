<?php

class Dog
{

    private string $name;
    private string $sex;
    private ?Dog $mother;
    private ?Dog $father;

    public function __construct(string $name, string $sex, ?Dog $mother, ?Dog $father)
    {

        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;

    }

    public function fathersName(): string
    {
        if ($this->father === null) {
            return 'Unknown';
        } else {
            return $this->father->name;
        }
    }

    public function hasSameMotherAs(Dog $dog): bool
    {
        if ($this->mother === $dog->mother) {
            return true;
        } else {
            return false;
        }
    }
}