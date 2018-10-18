<?php

$pocet = 3;

while ($pocet < 9 && $pocet > -9) {
    echo "$pocet ";
    if ($pocet > 0) {
        $pocet = ($pocet + 2) * -1;
    } else {
        $pocet = $pocet + 2;
    }
}

/*
    A) 3
    B) 3 6 9
    C) 3 9
    D) cyklus while se zacykli a nikdy neskonci
    E) skript skonci chybou
*/

