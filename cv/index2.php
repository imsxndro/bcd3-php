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
echo "<br>";

/* Afficher : "Mon nom est : John DOE" */

$eleve = [
    "john", // 0
    "doe" // 1
];

echo ucfirst( $eleve[0] );
echo strtoupper( $eleve[1] );


$foo = 'bonjour tout le monde!';
$foo = ucfirst($foo);             // Bonjour tout le monde!
echo "<br>";
echo $foo;

$bar = 'BONJOUR TOUT LE MONDE!';
$bar = ucfirst($bar);             // BONJOUR TOUT LE MONDE!
$bar = ucfirst(strtolower($bar)); // Bonjour tout le monde!
echo "<br>";
echo $bar;


?>