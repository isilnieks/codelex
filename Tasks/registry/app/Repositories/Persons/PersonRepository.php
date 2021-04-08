<?php

namespace App\Repositories\Persons;

use App\Models\Person;

interface PersonRepository
{
    public function searchByCode(string $code): array;
    public function addPerson(Person $person): void;
    public function deletePerson(string $code): void;
    public function editPerson(string $code, string $note): void;
    public function searchByAge(int $age): array;
    public function searchByCity(string $city): array;

}