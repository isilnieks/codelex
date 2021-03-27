<?php
require_once 'vendor/autoload.php';

use App\Game;
use App\Elements\Element;
use App\Elements\ElementsCollection;
use App\Elements\Rock;
use App\Elements\Paper;
use App\Elements\Scissors;

$elements = new ElementsCollection();
$elements->addMultipleElements([
    $paper = new Paper(),
    $scissors = new Scissors(),
    $rock = new Rock()
]);

require_once '123.php';


