<?php

require_once("Point.php");

$kids = [
    new Point('pA', 8, 8),
    new Point('pB', 2, 7),
    new Point('pC', -2, 1),
    new Point('pD', -5, -7)
];

$shelters = [
    new Point('BOX1', 8, -6),
    new Point('BOX2', 6, 10),
    new Point('BOX3', 4, 5)
];

$result = [];

foreach ($kids as $kid) {
    $distance = [];
    $close_shelter;


    foreach ($shelters as $shelter) {
        $res = sqrt(pow($kid->getAbscissa() - $shelter->getAbscissa(), 2) + pow($kid->getOrdinate() - $shelter->getOrdinate(), 2));

        array_push($distance, [
            'distance' => $res,
            'box' => $shelter->getLabel()
        ]);
    }

    $close_distance = $distance[0]['distance'];
    $close_shelter = $distance[0]['box'];

    foreach ($distance as $dist) {
        if ($dist['distance'] < $close_distance) {
            $close_distance = $dist['distance'];
            $close_shelter = $dist['box'];
        }
    }

    array_push($result, [
        'kid' => $kid->getLabel(),
        'close box' => $close_shelter
    ]);
}


foreach ($result as $res) {
    echo $res['kid'] . " " . $res['close box'] . "\n";
}