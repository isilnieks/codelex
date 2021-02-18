<?php

$person1 = new stdClass();
$person1->name = 'Ivo';
$person1->surname = 'Silnieks';
$person1->age = 21;

$person2 = new stdClass();
$person2->name = 'Mikus';
$person2->surname = 'Zupins';
$person2->age =18;

$person3 = new stdClass();
$person3->name = 'Renars';
$person3->surname = 'Zalitis';
$person3->age =12;

$person4 = new stdClass();
$person4->name = 'Maris';
$person4->surname = 'Vasarins';
$person4->age =53;

$persons = [
    $person1,
    $person2,
    $person3,
    $person4
];

function overTheAge(stdClass $person): bool
{
    return $person->age >= 18;
}

;
foreach ($persons as $person)
{
    if (overTheAge($person))
    {
        echo $person->name . " has reached age of 18.\n";
    }
}

