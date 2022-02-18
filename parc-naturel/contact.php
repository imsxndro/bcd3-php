<?php require_once "header.php"; ?> 
        <!-- Contenu principal-->
        <main>
            <!-- Présentation -->
            <section class="display-flex">
                <div>
                    <h1>Contactez-nous</h1>
                    <p>N'hésitez pas !</p>
                </div>
                <div>
                    <img src="images/startup-ga717aeefb_640.jpg" />
                </div>
            </section>
            <!-- Contact -->
                <?php
                $con = mysqli_connect('localhost', 'root', '',’db_contact’);

                $txtName = $_POST['your-name'];
                $txtEmail = $_POST['your-email'];
                $txtSubject = $_POST['your-subject'];
                $txtMessage = $_POST['your-message'];

                $con = mysqli_connect('localhost', 'root', '',’db_contact’);
                $sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtSubject', '$txtMessage');"

                

                    if (isset($_POST) && !empty($_POST)) {
                        echo "
                        <div class='alert alert-warning' role='alert'>
                            <pre>".var_export($_POST, true)."</pre>
                        </div>";
                        
                        $contenuEmail = "
                        Nom : ".$_POST['your-name']."
                        Suket : ".$_POST['your-subject']."
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
        </main>
        <?php require_once "footer.php"; ?>   