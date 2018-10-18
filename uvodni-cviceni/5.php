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
    if isset($value['druh']) || isset($value['barva']) {
        echo $value['barva'] . ' ' . $value['druh'];
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

