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
                <?php
    foreach ($menu) {

        echo '
        <nav>
                    <ul class="display-flex">
                        <li><a href="#">'.$menu["/"].'</a></li>
                        <li><a href="#">'.$menu["/a-propos.php"].'</a></li>
                        <li><a href="#">'.$menu["/galerie.php"].'</a></li>
                        <li><a href="#">'.$menu["/pratique.php"].'</a></li>
                        <li><a href="#">'.$menu["/blog.php"].'</a></li>
                        <li><a href="#">'.$menu["/contact.php"].'</a></li>
                    </ul>
                </nav>
        ';

    } // fin du foreach
    ?>
            </div>
        </header>
        <body class="container">