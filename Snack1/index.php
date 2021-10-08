<?php

$matchs = [
    [
        "squadraCasa" => "Olimpia Milano",
        "squadraOspite" => "Cantù",
        "puntiCasa" => "55",
        "puntiOspite" => "60",
    ],
    [
        "squadraCasa" => "Napoli",
        "squadraOspite" => "Firenze",
        "puntiCasa" => "75",
        "puntiOspite" => "63",
    ],
    [
        "squadraCasa" => "Bari",
        "squadraOspite" => "Torino",
        "puntiCasa" => "80",
        "puntiOspite" => "70",
    ],
    [
        "squadraCasa" => "Bologna",
        "squadraOspite" => "Catania",
        "puntiCasa" => "65",
        "puntiOspite" => "45",
    ],
    [
        "squadraCasa" => "Cagliari",
        "squadraOspite" => "Venezia",
        "puntiCasa" => "55",
        "puntiOspite" => "70",
    ]
];

for($i = 0; $i < count($matchs); $i++){
    echo "<h2>" . $matchs[$i]["squadraCasa"] . " - " . $matchs[$i]["squadraOspite"] . " | " . $matchs[$i]["puntiCasa"] . "-" . $matchs[$i]["puntiOspite"];
}

?>