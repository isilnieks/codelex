<?php

namespace App\Services;

use App\Repositories\Tokens\TokenRepository;
use App\Models\Token;

class StoreTokenService
{
    private TokenRepository $repository;

    public function __construct(TokenRepository $repository)
    {
        $this->repository = $repository;
    }

    public function createToken()
    {
        $code = str_replace('-', '', $_POST['code']);
        $this->repository->createToken(
            new Token($code),
            $code,
            $_SERVER['REQUEST_TIME'] + 600,
        );
    }

    public function authenticate(string $code): bool
    {
        return $this->repository->authenticate($code);
    }

    public function getToken(string $code): array
    {
        $this->lastEntry = $code;
        return $this->repository->getToken($code);
    }

    public function getName(): array
    {
        return $this->repository->getName($this->repository->getCode()[0]['code']);
    }

}