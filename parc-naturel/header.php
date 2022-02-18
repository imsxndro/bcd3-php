<?php include_once "config.php"; ?>
<!DOCTYPE html>
<html>
    <head>        
        <meta charset="UTF-8" />
        <title>Parc naturel de Brie en Dardet - Charente-Maritime</title>
        <meta name="description" content="Venez découvrir le Parc Naturel de Brie en Dardet, ouvert toute l'année. Réservez au 05 00 00 00 00" />              
        <link rel="stylesheet" href="reset.css" />
        <link rel="stylesheet" href="style.css" />
        <meta name="viewport" content="width:device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet"> 
    </head>
    <body class="container">
       <!-- En-tête du site -->
        <header class="display-flex">
            <!-- Logo -->
            <a href="#"><img src="images/logo.png" /></a>
            <div class="menu-contain">
                <!-- Bloc compte -->
                <div>
                    <a href="#"><img src="images/compte.png" /></a>
                    <a href="/parc-naturel/panier.php"><img src="images/shopping-basket.png" /></a>
                </div>
                <!-- Menu principal -->
                <nav>
                <ul class="display-flex">
                 <?php
                      foreach ($menu as $key => $value) {
                            echo '
                            <li><a href="/parc-naturel'.$key.'">'.$value.'</a></li>';
                       } // fin du foreach
                 ?>
                </ul></nav>
            </div>
        </header>

