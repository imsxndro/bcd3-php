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
    echo '<nav><ul class="display-flex">'
    foreach ($menu as $nav) {
        echo '<li><a href="#">'.$nav'</a></li>';
    } // fin du foreach
echo '</ul></nav>'
    ?>
            </div>
        </header>
        <body class="container">
