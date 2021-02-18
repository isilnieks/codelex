<?php
$persons = [
    [
        'Name' => 'Ivo',
        'Surname' => 'Silnieks',
        'Age' => 21,
        'Birthday' => '29.03'
    ],
    [
        'Name' => 'Mikus',
        'Surname' => 'Zupins',
        'Age' => 35,
        'Birthday' => '16.02'
    ],
    [
        'Name' => 'Renars',
        'Surname' => 'Zalitis',
        'Age' => 12,
        'Birthday' => '24.06'
    ],
    [
        'Name' => 'Maris',
        'Surname' => 'Vasarins',
        'Age' => 53,
        'Birthday' => '12.12'
    ],
];

foreach ($persons as $person) {
    echo "Name: ${person['Name']} Surname: ${person['Surname']} Age: ${person['Age']} Birthday: ${person['Birthday']}\n";
}
