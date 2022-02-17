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
                    <p>'.$inc["description"].'';
               } // fin du foreach
         ?>
                </div>
            </section>
            <!-- Contact -->
            <section class="bkgd-block text-center">
                <h2>Contactez-nous pour réserver</h2>
                <p>Laissez-nous vos coordonnées</p>
                <form class="grid">
                    <!-- Champ nom -->
                    <div class="span-6">
                        <label for="nom">Votre nom</label>
                        <input type="text" id="nom" name="your-name" placeholder="Entrez votre nom complet" />
                    </div>
                    <!-- Champ email -->
                    <div class="span-6">
                        <label for="mail">Votre email</label>
                        <input type="email" id="mail" name="your-email" placeholder="votre@nom.com" />
                    </div>
                    <!-- Champ message-->
                    <div class="span-12">                        
                        <label for="message">Votre message</label>
                        <textarea name="your-message" id="message" cols="30" rows="10">Entrez votre message ici</textarea>
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
            <!-- Equipe -->
            <section class="display-flex">
                <div>
                    <h2>L'équipe</h2>
                    <p>Chapô - vnkjze cmaenbpv vipneazbv</p>
                    <p><a href="#">Découvrez nos métiers</a></p>
                </div>
                <div>
                    <img src="images/young-people-g1b98eb372_640.jpg" />
                </div>
            </section>
        </main>
        <?php require_once "footer.php"; ?>   