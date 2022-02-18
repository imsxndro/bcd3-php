<?php require_once "header.php"; ?> 
        <!-- Contenu principal-->
        <main>
            <!-- Présentation -->
            <section class="display-flex">
            <?php
                // Si j'ai un ID d'article dans l'url, alors j'affiche l'article
                if (isset( $_GET["idArticle"] )) {

                    echo '
                    <div>
                        <h1>'.$articles[ $_GET["idArticle"] ]["titre"].'</h1>
                        <p>'.$articles[ $_GET["idArticle"] ]["description_longue"].'</p>
                    </div>
                    <div>
                    <img src="'.$articles[ $_GET["idArticle"] ]["image"].'" alt="">
                    </div>
                    ';
                
         // Récupérer une variable dans l'URL :
         // echo "Id de l'article qui est présent dans l'URL : ".$_GET["idArticle"]; 
         
         // echo $articles[ $_GET["idArticle"] ]["image"]."<br>";
         // echo $articles[ $_GET["idArticle"] ]["titre"]."<br>";
         // echo $articles[ $_GET["idArticle"] ]["description"]."<br>";
        }
         ?>
            </section>
                </div>
            </section>
        </main>
        <?php require_once "footer.php"; ?>   