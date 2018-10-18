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
    if (isset($value['barva'])) {
        echo $value['barva'] . ' ' . $value['druh'];
    } else {
        echo $value['druh'];
    }
    echo ' ';
}

/*
    A) strakata kocka
    B) tulipan
    C) strakata kocka tulipan
    D) tulipan strakata kocka
    E) tento skript skonci chybou
*/

