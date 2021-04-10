<?php


namespace App\Models;


class Token
{
    private string $token;

    public function __construct(string $code)
    {
        $this->setToken($code);
    }

    public function setToken(string $code): void
    {
        $token = sha1(uniqid($code, true));
        $this->token = $token;
    }

    public function token(): string
    {
        return $this->token;
    }

}