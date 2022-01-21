<?php

$classe=[
    [
        "nom" => "euphoria",
        "prenom" => "rue",
        "age" => 17,
        "notes" => [ 6, 8, 13 ]
    ],
    [
        "nom" => "phoriaeu",
        "prenom" => "jules",
        "age" => 23,
        "notes" => [ 5, 7, 12 ]
    ],
    [
        "nom" => "doe",
        "prenom" => "john",
        "age" => 25,
        "notes" => [ 9, 15, 17 ]
    ],
    ];

echo"<h1>Classe:</h1>";

echo "<h2>3ème élève</h2>";

echo ucfirst(strtolower($classe[2]["prenom"])) . " ".strtoupper($classe[2]["nom"]) . " (".$classe[2]["age"]."ans), dispose d'une moyenne de ".round(array_sum($classe[2]["notes"])/count($classe[2]["notes"]),2)."/20.<br>";

echo "Meilleure note : ".max($classe[2]["notes"])." / 20.";

echo "<br>";
echo "<br>";
echo "<br>";

$notes = 15;


if($notes >=10) {
    if ($notes === 10) {
        echo "Vous avez juste la moyenne.";
    } else {
    echo "Vous avez une note supérieure à la moyenne.":
    }
    } else {
    echo "Vous n'avez pas la moyenne.";
    }

?>