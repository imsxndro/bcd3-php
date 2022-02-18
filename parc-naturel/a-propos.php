<?php require_once "header.php"; ?> 
        <!-- Contenu principal-->
        <main class="container">
            <!-- Présentation -->
            <section class="display-flex">
                <div>
                    <h1>A l'origine du Parc Naturel</h1>
                    <p class="chapo">Chapô - Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam consequat dolor quis dui vulputate ultrices. Suspendisse interdum malesuada mauris vel scelerisque. In ac nulla libero.
                        Praesent fermentum eu velit id commodo. Aliquam consectetur commodo sapien, eget egestas elit rutrum et. Morbi varius rutrum sapien. Nunc at tellus et diam maximus elementum. </p>
                        <p><a class="button" href="#">Bouton</a><a class="button" href="#">Bouton</a></p>
                </div>
                <div>
                    <img src="images/foret-sequoia-parc-naturel-dardet-charente-maritime.jpg" />
                </div>
            </section>

            <!-- Section Activités -->
            <section class="text-center">
                <h2>Les activités dans le parc</h2>
                <p>Nous proposons de nombreuses activités dans le parc, pour tous les âges</p>
                <!-- Tuiles activités -->
                <div class="display-flex">
                <?php
                foreach ($activites as $act) {
                    echo '
                    <div>
                    <img src="/parc-naturel/'.$act["image"].'" />
                    <h3>'.$act["titre"].'</h3>
                    <p>'.$act["description"].'
                    </div>';
               } // fin du foreach
         ?>
                </div>
            </section>

            <!-- Section Equipes -->
            <section class="bkgd-block text-center">
                <h2>Les équipes</h2>
                <p>Rencontres les membres de notre équipe</p>
                <!-- Tuiles incontournables -->
                <div class="display-flex ">
                <?php
                foreach ($equipes as $equ) {
                    echo '
                    <div>
                    <img src="/parc-naturel/'.$equ["image"].'" />
                    <h3>'.$equ["titre"].'</h3>
                    <p>'.$equ["description"].'
                    </div>';
               } // fin du foreach
         ?>
                </div>
            </section>

            </main>
        <?php require_once "footer.php"; ?>