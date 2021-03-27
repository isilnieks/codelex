<?php

namespace Tests;

use App\Elements\Rock;
use App\Elements\Paper;
use App\Elements\Scissors;
use PHPUnit\Framework\TestCase;

class ScissorsTest extends TestCase
{
    public function testWin()
    {
        $scissors = new Scissors();
        $paper = new Paper();

        $this->assertTrue(true, $scissors->canWin($paper));
    }

    public function testLose()
    {
        $scissors = new Scissors();
        $rock = new Rock();
        $this->assertFalse(false, $scissors->canWin($rock));
    }

}