<?php

namespace App\Models;

class Person
{
    private string $code;
    private string $name;
    private string $surname;
    private string $description;
    private int $age;
    private string $city;

    public function __construct(
        string $code,
        string $name,
        string $surname,
        string $description,
        int $age,
        string $city

    )
    {
        $this->setCode($code);
        $this->name = $name;
        $this->surname = $surname;
        $this->description = $description;
        $this->age = $age;
        $this->city = $city;
    }

    public function code(): string
    {
        return $this->code;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function surname(): string
    {
        return $this->surname;
    }

    public function description(): string
    {
        return $this->description;
    }

    private function setCode(string $code): void
    {
        $code = str_replace('-', '', $code);
        $this->code = $code;
    }

    public function age(): int
    {
        return $this->age;
    }

    public function city(): string
    {
        return $this->city;
    }

}