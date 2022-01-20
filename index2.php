<?php

$aaa = "bla bla 01";
$aaa = "bla bla 02";
echo $aaa;
echo "<br>";

// Ma moyenne cette année est de 15/20 en BWD3
$moyenne = 15;
echo "Ma moyenne cette estnnée est de ".$moyenne."/20 en BWD3";

/* tableau */
$couleur = array();
$couleur[] = "rouge";   // O
$couleur[] = "vert";    // 1
$couleur[] = "bleu";    // 2
echo $couleur[1];

echo "<br>";

$couleur = [
    "red" => "rouge",
    "green" => "vert",
    "pink" => "rose",
];
echo $couleur["pink"];

echo "<br>";

/* Afficher : "Mon nom est : John DOE" */

$eleve = [
    "joHn" => "John",
    "doe" => "DOE",
];

echo strtoupper ("doe");

?>