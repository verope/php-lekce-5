<?php

$dny = ['pondeli', 'utery', 'streda'];

foreach ($dny as $den)
    echo 'dnes je ';
    echo $den;

/*
    B) dnes je pondeli utery streda
    A) dnes je pondeli dnes je utery dnes je streda
    D) dnes je dnes je dnes je streda
    C) dnes je dnes je dnes je pondeli utery streda
    D) tento sktipt skonci chybou
*/

