<?php

namespace App\Repositories\Tokens;

use App\Models\Token;

interface TokenRepository
{
    public function createToken(Token $token, string $code, int $time): void;
    public function authenticate(string $login): bool;
    public function getToken(string $code): array;
    public function getName(string $code): array;
    public function getCode(): array;
}