<?php

$aaa = "bla bla 01";
$aaa = "bla bla 02";
echo $aaa;
echo "<br>";

// Ma moyenne cette année est de 15/20 en BWD3
$moyenne = 15;
echo "Ma moyenne cette estnnée est de ".$moyenne."/20 en BWD3";

// tableau
$couleur = []; // = $couleur = array();
$couleur[] = "rouge";   // 0
$couleur[] = "vert";   // 1
$couleur[] = "bleu";   // 2
echo $couleur[1];
echo "<br>";

$couleur = []; // = $couleur = array();
$couleur[5] = "rouge";   // 0
$couleur[18] = "vert";   // 1
$couleur[3] = "bleu";   // 2
echo $couleur[18];
echo "<br>";

$couleur = []; // = $couleur = array();
$couleur["red"] = "rouge";   // 0
$couleur["green"] = "vert";   // 1
$couleur["blue"] = "bleu";   // 2
echo $couleur["red"];
echo "<br>";

?>