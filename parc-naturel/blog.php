<?php require_once "header.php"; ?> 
        <!-- Contenu principal-->
        <main>
            <!-- Présentation -->
            <section class="display-flex">
                <div>
                    <h1>Les articles du Parc naturel de Brie en Dardet</h1>
                    <p>Apprenez-en plus sur les splendeurs d’un parc naturel niché entre la forêt de Vézole et la vallée de l’Arpack</p>
                </div>
                <div>
                    <img src="images/krka-gd03cf86d1_640.jpg" />
                </div>
            </section>
            <!-- Incontournables -->
            <section class="text-center">
                <h2>Nos articles</h2>
                <p>Vous venez pour un court-séjour, découvrez les merveilles naturelles de Brie en Dardet</p>
                <div class="display-flex">
                <?php
                foreach ($incontournables as $inc) {
                    echo '
                    <div>
                        <img src="/parc-naturel/'.$inc["image"].'" />
                        <h3>'.$inc["titre"].'</h3>
                        <p>
                            '.$inc["description"].'
                            <a class="button" href="?idArticle='.$inc.'">
                            Lire la suite
                            </a>
                        </p>
                    </div>';
               } // fin du foreach
         ?>

         <?php
         // Récupérer une variable dans l'URL :
         // echo "Id de l'article qui est présent dans l'URL : ".$_GET["idArticle"]; 
         
         echo $incontournables[ $_GET["idArticle"] ]["image"]."<br>";
         echo $incontournables[ $_GET["idArticle"] ]["titre"]."<br>";
         echo $incontournables[ $_GET["idArticle"] ]["description"].
         "<br>";

         ?>
                </div>
            </section>
        </main>
        <?php require_once "footer.php"; ?>   