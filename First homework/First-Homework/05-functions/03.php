<?php
$person = new stdClass();
$person->name = 'Ivo';
$person->surname = 'Silnieks';
$person->age = 21;

function overTheAge(stdClass $person): string
{
    if ($person->age >= 18) {
        return $person->name . " has reached the age of 18\n";
    }
}

;

echo overTheAge($person);
