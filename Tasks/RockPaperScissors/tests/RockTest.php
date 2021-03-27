<?php


namespace Tests;

use App\Elements\Rock;
use App\Elements\Paper;
use App\Elements\Scissors;
use PHPUnit\Framework\TestCase;

class RockTest extends TestCase
{
    public function testWin()
    {
        $rock = new Rock();
        $scissors = new Scissors();
        $this->assertTrue(true, $rock->canWin($scissors));
    }

    public function testLose()
    {
        $paper = new Paper();
        $rock = new Rock();
        $this->assertFalse(false, $paper->canWin($paper));
    }

}