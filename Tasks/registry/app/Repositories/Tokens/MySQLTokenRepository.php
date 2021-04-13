<?php

namespace App\Repositories\Tokens;

use App\Models\Token;
use Medoo\Medoo;

class MySQLTokenRepository implements TokenRepository
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

    public function createToken(Token $token, string $code, int $time): void
    {
        $this->database->insert('tokens', [
            'token' => $token->token(),
            'code' => $code,
            'time' => $time,
        ]);
    }

    public function authenticate(string $login): bool
    {
        return $this->database->has('registry', [
            'code' => $login
        ]);
    }

    public function getToken(string $code): array
    {
        return $this->database->select('tokens', [
            'token'
        ], [
            'code' => $code
        ]);
    }

    public function getCode(): array
    {
        return $this->database->select('tokens',[
            'code'
        ]);
    }

    public function getName(string $code): array
    {
        return $this->database->select('registry', [
            'name'
        ], [
            'code' => $code
        ]);
    }

}
