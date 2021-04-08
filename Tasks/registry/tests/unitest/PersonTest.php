<?php

namespace Tests\Unit;


use App\Models\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testPerson(): void
    {
        $person = new Person('280199-11888','Ivo','Silnieks','note');
        $this->assertEquals('28019911888',$person->code());
        $this->assertEquals('Ivo',$person->name());
        $this->assertEquals('Silnieks',$person->surname());
        $this->assertEquals('note',$person->description());
    }
}