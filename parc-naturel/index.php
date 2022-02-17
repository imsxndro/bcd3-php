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
                    <a href="#"><img src="images/shopping-basket.png" /></a>
                </div>
                <!-- Menu principal -->
                <nav>
                    <ul class="display-flex">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">A propos</a></li>
                        <li><a href="#">Galerie</a></li>
                        <li><a href="#">Pratique</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
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
                    <div>
                        <img src="images/glacier-ga0a01878a_640.jpg" />
                        <h3>La forêt de Sequoia</h3>
                        <p>La plus grande densité au monde d’arbres
                            millénaires, des arbres de plus de 40
                            mètres de haut</p>
                    </div>
                    <div>
                        <img src="images/nature-gda19b88ec_640.jpg" />
                        <h3>Les gorges du Dardet</h3>
                        <p>Au coeur de paysages lunaires, le Dardet a
                            creusé son lit spectaculaire</p>
                    </div>
                    <div>
                        <img src="images/road-g53d3b1c26_640.jpg" />
                        <h3>Le glacier de Briefane</h3>
                        <p>Serpentant au fond de la vallée de la
                            Briefane, le glacier haut de 15 mètres
                            s’offre majestueusement au regard</p>
                    </div>
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
        <!-- Pied de page -->
        <footer>            
            <p><a href="#">Mentions légales</a> - <a href="#">Plan du site</a> - <a href="#">Contact</a> - Copyright 2022 Parc naturel</p>
        </footer>
    </body>
</html>