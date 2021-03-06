    <?php require_once "header.php"; ?> 
        <!-- Contenu principal-->
        <main>
            <!-- Présentation -->
            <section class="display-flex">
                <div>
                    <h1>Parc naturel de Brie en Dardet</h1>
                    <p>Chapô - Découvrez les splendeurs d’un parc naturel niché entre la forêt de Vézole et la vallée de l’Arpack</p>
                    <p><a class="button" href="#">Bouton</a><a class="button" href="#">Bouton</a></p>
                </div>
                <div>
                    <img src="images/foret-sequoia-parc-naturel-dardet-charente-maritime.jpg" />
                </div>
            </section>
            <!-- Incontournables -->
            <section class="text-center">
                <h2>Les incontournables du parc</h2>
                <p>Vous venez pour un court-séjour, découvrez les merveilles naturelles de Brie en Dardet</p>
                <div class="display-flex">
                <?php
                foreach ($incontournables as $inc) {
                    echo '
                    <div>
                    <img src="/parc-naturel/'.$inc["image"].'" />
                    <h3>'.$inc["titre"].'</h3>
                    <p>'.$inc["description"].'
                    </div>';
               } // fin du foreach
         ?>
                </div>
            </section>
            <!-- Contact -->
                <?php
                    if (isset($_POST) && !empty($_POST)) {
                        echo "
                        <div class='alert alert-warning' role='alert'>
                            <pre>".var_export($_POST, true)."</pre>
                        </div>";
                        
                        $contenuEmail = "
                        Nom : ".$_POST['your-name']."
                        Message : ".$_POST['your-message']."
                        Email : ".$_POST['your-email']."
                        ";
                        
                        $resEmail = mail("sandro@alphonse.xyz", $_POST['your-subject'], $contenuEmail, "from:".$_POST['your-email']);
                        // Si l'email a bien été expédié :
                        if ($resEmail) {
                            echo "
                            <div class='alert alert-success' role='alert'>
                                Message envoyé.
                            </div>";

                        // Si l'email n'est pas expédié :
                        } else {
                            echo "
                            <div class='alert alert-danger' role='alert'>
                                Nous avons rencontré un problème lors de l'expédition de votre message.<br>Merci d'essayer de nouveau ultérieurement.
                            </div>";                            
                        }
                        
                    }                    
                    ?>
            <section class="bkgd-block text-center">
                <h2>Contactez-nous pour réserver</h2>
                <p>Laissez-nous vos coordonnées</p>
                <form class="grid" action="" method="POST">
                    <!-- Champ nom -->
                    <div class="span-6">
                        <label for="nom">Votre nom</label>
                        <input type="text" id="nom" name="your-name" placeholder="Entrez votre nom complet" required="required" />
                    </div>
                    <!-- Champ email -->
                    <div class="span-6">
                        <label for="mail">Votre email</label>
                        <input type="email" id="mail" name="your-email" placeholder="votre@nom.com" required="required" />
                    </div>
                    <!-- Champ sujet -->
                    <div class="span-6">
                        <label for="mail">Votre sujet</label>
                    <input type="text" name="your-subject" placeholder="Sujet" required="required"/>
                    </div>
                    <!-- Champ message-->
                    <div class="span-12">                        
                        <label for="message">Votre message</label>
                        <textarea name="your-message" id="message" cols="30" rows="10" placeholder="Entrez votre message ici" required="required"></textarea>
                    </div>
                    <!-- Champ validation newsletter-->
                    <div class="span-12">  
                        <input type="checkbox" name="validation" value="Vous acceptez de recevoir notre newsletter" id="validation" />                      
                        <label for="validation">Vous acceptez de recevoir notre newsletter</label>
                    </div>
                    <!-- Bouton validation -->                    
                    <div class="span-12">    
                        <input type="submit" value="Envoyer" />
                    </div>
                </form>
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