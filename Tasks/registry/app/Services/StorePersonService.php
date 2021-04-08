<?php

namespace App\Services;

use App\Repositories\Persons\PersonRepository;
use App\Models\Person;

class StorePersonService
{
    private PersonRepository $repository;

    public function __construct(PersonRepository $repository)
    {
        $this->repository = $repository;
    }

    public function searchByCode(string $code): array
    {
        return $this->repository->searchByCode($code);
    }

    public function addPerson(): void
    {
        $this->repository->addPerson(new Person(
            $_POST['code'],
            $_POST['name'],
            $_POST['surname'],
            $_POST['description'],
            $_POST['age'],
            $_POST['city'],
        ));
    }

    public function deletePerson(): void
    {
        $this->repository->deletePerson($_POST['delete']);
    }

    public function editPerson(): void
    {
        $this->repository->editPerson($_POST['edit_id'],$_POST['edit']);
    }

    public function searchByAge(int $age): array
    {
        return $this->repository->searchByAge($age);
    }

    public function searchByCity(string $city): array
    {
        return $this->repository->searchByCity($city);
    }

    public function login(): bool
    {
        return $this->repository->login($_POST['login_code']);
    }

}