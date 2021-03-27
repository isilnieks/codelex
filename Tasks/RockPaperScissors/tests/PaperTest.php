<?php

namespace Tests;

use App\Elements\Rock;
use App\Elements\Paper;
use App\Elements\Scissors;
use PHPUnit\Framework\TestCase;

class PaperTest extends TestCase
{
    public function testWin(){
        $paper = new Paper();
        $rock = new Rock();
        $this->assertTrue(true,$paper->canWin($rock));
    }

    public function testLose(){
        $paper = new Paper();
        $scissors = new Scissors();
        $this->assertFalse(false,$paper->canWin($scissors));
    }

}