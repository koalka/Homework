<?php

function getCapital($country) {
    $capitals = [
        'Italy' => 'Rome',
        'Luxembourg' => 'Luxembourg',
        'Belgium' => 'Brussels',
        'Denmark' => 'Copenhagen',
        'Finland' => 'Helsinki',
        'France' => 'Paris',
        'Slovakia' => 'Bratislava',
        'Slovenia' => 'Ljubljana',
        'Germany' => 'Berlin',
        'Greece' => 'Athens',
        'Ireland' => 'Dublin',
        'Netherlands' => 'Amsterdam',
        'Portugal' => 'Lisbon',
        'Spain' => 'Madrid',
        'Sweden' => 'Stockholm',
        'United Kingdom' => 'London',
        'Cyprus' => 'Nicosia',
        'Lithuania' => 'Vilnius',
        'Czech Republic' => 'Prague',
        'Estonia' => 'Tallin',
        'Hungary' => 'Budapest',
        'Latvia' => 'Riga',
        'Malta' => 'Valetta',
        'Austria' => 'Vienna',
        'Poland' => 'Warsaw',
    ];
    if (isset($capitals[$country])) {
        echo 'The capital of ' . $country . ' is ' . $capitals[$country] . '.<br>';
    } else {
        echo "I don't know the capital of $country!<br>";
    }
}

getCapital('Netherlands');
getCapital('Greece');
