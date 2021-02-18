<?php
$person = new stdClass();
$person->name = 'Ivo';
$person->pistolLicense = 'a';
$person->rifleLicense = 'b';
$person->smgLicense = 'c';
$person->heavyLicense = ' ';
$person->cash = 1000;

$guns = [
    [
        'license' => 'a',
        'price' => 550,
        'name' => 'usp'
    ],
    [
        'license' => 'b',
        'price' => 1550,
        'name' => 'm4a4'
    ],
    [
        'license' => 'c',
        'price' => 990,
        'name' => 'p90'
    ],
    [
        'license' => 'd',
        'price' => 880,
        'name' => 'mag7'
    ]
];

$gunLicenses = array_column($guns, 'license');
$gunPrice = array_column($guns, 'price');
$gunName = array_column($guns, 'name');

if (in_array($person->pistolLicense, $gunLicenses) && $person->cash >= $gunPrice[0]) {
    echo 'You can buy a ' . $gunName[0] . " pistol.\n";
}

if (in_array($person->rifleLicense, $gunLicenses) && $person->cash >= $gunPrice[1]) {
    echo 'You can buy a ' . $gunName[1] . " rifle.\n";
}

if (in_array($person->smgLicense, $gunLicenses) && $person->cash >= $gunPrice[2]) {
    echo 'You can buy a ' . $gunName[2] . " smg.\n";
}
if (in_array($person->heavyLicense, $gunLicenses) && $person->cash >= $gunPrice[3]) {
    echo 'You can buy a ' . $gunName[3] . " smg.\n";
}




