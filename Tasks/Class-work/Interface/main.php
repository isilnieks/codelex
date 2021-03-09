<?php

//interface only for public methods

interface StorageInterface
{
    public function save(): void;

}

class DatabaseStorage implements StorageInterface
{
    public function save(): void
    {
        var_dump('saving in database');
    }

}
class SockStorage implements StorageInterface
{
    public function save(): void
    {
        var_dump('storing in sock.');
    }
}

class Application
{
    public function run(StorageInterface $storage)
    {
        $storage->save();
    }
}
(new Application)->run(new SockStorage());