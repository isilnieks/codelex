<?php

namespace App;

use App\Elements\Element;
use App\Elements\ElementsCollection;
use App\Elements\Rock;
use App\Elements\Paper;
use App\Elements\Scissors;

class Game
{
    private Computer $computer;
    private Player $player;
    private ElementsCollection $elements;

    public function __construct(string $playerChoice)
    {
        $this->elements = new ElementsCollection();
        $this->elements->addMultipleElements([
            $paper = new Paper(),
            $scissors = new Scissors(),
            $rock = new Rock()
        ]);
        $this->player = new Player($this->element($playerChoice));
        $this->computer = new Computer($this->elements->getElements()[rand(0,count($this->elements->getElements())-1)]);

    }

    public function element(string $playerChoice): Element
    {
        foreach($this->elements->getElements() as $elements => $element)
        {
            if($element->getElement() === $playerChoice){
                return $this->elements->getElements()[$elements];
            }
        }
    }

    public function whoWins(): string
    {
        if($this->player->getChoice() === $this->computer->getChoice()){
            return 'Tie';
        }
        if($this->player->getChoice()->canWin($this->computer->getChoice())){
            return 'You won';
        }
        return 'Computer won';
    }

    public function getComputer(): Computer
    {
        return $this->computer;
    }
}

