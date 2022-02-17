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
                    foreach ($menu as $key => $value) {
                    echo '
                    <nav>
                    <ul class="display-flex">
                    <li><a href="'.$key.'>'.$value.'</a></li>
                    </ul></nav>';
            } // fin du foreach
    ?>
            </div>
        </header>
        <body class="container">





