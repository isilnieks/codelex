<?php

namespace App\Repositories\Persons;

use App\Models\Person;
use App\Repositories\Persons\PersonRepository;
use Medoo\Medoo;

class MySQLPersonsRepository implements PersonRepository
{
    private Medoo $database;

    public function __construct()
    {
        $this->database = new Medoo([
            'database_type' => 'mysql',
            'database_name' => 'codelex',
            'server' => '127.0.0.1',
            'username' => 'root',
            'password' => 'root'
        ]);
    }

    public function searchByCode(string $code): array
    {
        return $this->database->select('registry', [
            'code',
            'name',
            'surname',
            'description',
            'age',
            'city'
        ], [
            'code' => $code
        ]);
    }

    public function addPerson(Person $person): void
    {
        $this->database->insert('registry', [
            'code' => $person->code(),
            'name' => $person->name(),
            'surname' => $person->surname(),
            'description' => $person->description(),
            'age' => $person->age(),
            'city' => $person->city()
        ]);
    }

    public function deletePerson(string $code): void
    {
        $this->database->delete('registry', ['code' => $code]);
    }

    public function editPerson(string $code, string $note): void
    {
        $this->database->update('registry',
            ['description' => $note],
            ['code' => $code]);
    }

    public function searchByAge(int $age): array
    {
        return $this->database->select('registry', [
            'code',
            'name',
            'surname',
            'description',
            'age',
            'city'
        ], [
            'age' => $age
        ]);
    }

    public function searchByCity(string $city): array
    {
        return $this->database->select('registry', [
            'code',
            'name',
            'surname',
            'description',
            'age',
            'city'
        ], [
            'city' => $city
        ]);
    }

    public function login(string $login): bool
    {
        return $this->database->has('registry', [
            'code' => $login
        ]);
    }
}
