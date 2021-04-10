<?php

namespace App\Controllers;

use App\Services\StoreTokenService;
use App\Services\TwigService;

class LoginController
{
    private StoreTokenService $service;
    private TwigService $environment;

    public function __construct(StoreTokenService $service)
    {
        $this->service = $service;
        $this->environment = new TwigService();
    }

    public function login()
    {
        return $this->environment->twig->render('LoginView.twig');
    }

    public function loginSuccess()
    {
        $code = str_replace('-', '', $_POST['code']);
        if ($this->service->authenticate($code)) {
            $this->service->createToken();
            $result = $this->service->getToken($code);
            return $this->environment->twig->render('LoginSuccess.twig',
            ['result' => $result]);
        }
    }

    public function dashboard()
    {
        return $this->environment->twig->render('DashboardView.twig',
        ['name' => $this->service->getName()]);
    }
}