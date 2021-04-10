<?php

namespace App\Controllers;

use App\Services\StorePersonService;
use App\Services\TwigService;

class HomeController
{
    private StorePersonService $service;
    private TwigService $environment;


    public function __construct(StorePersonService $service)
    {
        $this->service = $service;
        $this->environment = new TwigService();
    }

    public function index()
    {
        return $this->environment->twig->render('HomeView.twig');
    }

    public function searchView()
    {
        return $this->environment->twig->render('SearchView.twig');
    }

    public function addView()
    {
        return $this->environment->twig->render('AddView.twig');
    }
    public function addPerson()
    {
        $this->service->addPerson();
        return $this->environment->twig->render('AddSuccess.twig');
    }

    public function deleteView()
    {
        return $this->environment->twig->render('DeleteView.twig');
    }

    public function deletePerson()
    {
        $this->service->deletePerson();
        return $this->environment->twig->render('DeleteSuccess.twig');
    }

    public function editView()
    {
        return $this->environment->twig->render('EditView.twig');
    }

    public function editPerson()
    {
        $this->service->editPerson();
        return $this->environment->twig->render('editSuccess.twig');
    }

    public function search()
    {
        if (isset($_POST['search_code'])) {
            $search = $this->service->searchByCode($_POST['search_code']);
        } elseif (isset($_POST['search_age'])) {
            $search = $this->service->searchByAge($_POST['search_age']);
        } elseif (isset($_POST['search_city'])) {
            $search = $this->service->searchByCity($_POST['search_city']);
        }
        return $this->environment->twig->render('SearchResults.twig', [
            'search' => $search
        ]);
    }



}