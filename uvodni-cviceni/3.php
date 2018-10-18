<?php

$array = [
    'zvire' => [
        'druh' => 'kocka',
        'barva' => 'strakata',
    ],
    'rostlina' => [
        'druh' => 'tulipan'
    ]
];

foreach ($array as $key => $value) {
    if ($key == 'zvire') {
        echo $value['druh'];
    }
    echo ' ';
}

/*
    A) kocka
    B) tulipan
    C) kocka tulipan
    D) tulipan kocka
    E) strakata
    F) tento skript skonci chybou
 */

