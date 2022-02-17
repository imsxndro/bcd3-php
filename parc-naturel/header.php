<?php include_once "config.php"; ?>
       <!-- En-tête du site -->
        <header class="display-flex">
            <!-- Logo -->
            <a href="#"><img src="images/logo.png" /></a>
            <div class="menu-contain">
                <!-- Bloc compte -->
                <div>
                    <a href="#"><img src="images/compte.png" /></a>
                    <a href="#"><img src="images/shopping-basket.png" /></a>
                </div>
                <!-- Menu principal -->
                <nav>
                <ul class="display-flex">
                 <?php
                      foreach ($menu as $key => $value) {
                            echo '
                            <li><a href="'.$key.'>'.$value.'</a></li>';
                       } // fin du foreach
                 ?>
                </ul></nav>
            </div>
        </header>

<!-- mec regarde index.php -->