<?php include('header.php'); ?>

<main id="contenu" class="container">
    <div id="adresse">
        <h2>- Nos coordonnées -</h2>
        <div id="coordonnees">
            <i class="fas fa-map-marker-alt"></i>
            <address>
                <h3>Ecole Saint Glinglin</h3>
                <p>35 rue de la Chapelle de Sainte Avoye<br>
                56498 BIGOUBLEN</p>
            </address>

            <i class="far fa-user"></i>
            <p>Direction: Valentine BUYET</p>

            <i class="fas fa-phone-square"></i>
            <p>02 97 97 97 97</p>
            
            <!-- <i class="fas fa-at"></i>
            <p>ecole-saint-glinglin@ecoleprivee.fr</p> -->
        </div>

    </div>
    <div id="contact">
        <h2>- Contactez-nous -</h2>
        <div id="formulaire-contact">
            <img src="images/ecrire2.jpg" width="250" alt="machine à écrire">
            <div id="gauche">
                <p class="champs"><span class="obligatoire">*</span>champs obligatoires</p>
                <form action="#" method="post">
                    <p>
                        <label for="nom">Votre nom<span class="obligatoire">*</span></label>
                        <input type="text" name="nom" id="nom" placeholder="NOM" required>
                    </p>
                    <p>
                        <label for="prenom">Votre prénom<span class="obligatoire">*</span></label>
                        <input type="text" name="prenom" id="prenom" placeholder="Prénom" required>
                    </p>
                    <p>
                        <label for="adresse">Votre adresse<span class="obligatoire">*</span></label>
                        <input type="text" name="adresse" id="address" placeholder="Votre adresse" required>
                        <ul id="wrapper"></ul>
                    </p>

                    <p>
                        <label for="email">Votre e-mail<span class="obligatoire">*</span></label>
                        <input type="email" name="email" id="email" placeholder="E-mail" required>
                    </p>
                    <p>
                        <label for="tel">Votre téléphone</label>
                        <input type="tel" name="tel" id="tel" placeholder="06 40 40 40 40">
                    </p>
                </div>
                <div id="droite">
                    <p class="message">
                        <label for="message">Laissez-nous un message, nous vous contacterons au plus vite.</label>
                        <textarea name="message" id="message" placeholder="Votre message" cols="30" rows="10"></textarea>
                    </p>
                    <p class="consentement">
                    <input type="checkbox" name="consentement" id="consentement" required>
                    <label for="consentement"><a href="#" title="cliquez pour lire les conditions d'utilisation">J'accepte les conditions d'utilisation</a><span class="obligatoire">*</span></label></p>
                    </p>
                    <p>
                        <input type="submit" value="Envoyer" id="btnEnvoi">
                        <input type="reset" value="Annuler">
                    </p> 
                </div>          
            </form>
        </div>
    </div>

    <div id="localisation">
        <h2>- Où nous trouver -</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.7413538295523!2d-2.9223621851639527!3d47.65059279293245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4810172a7f67be6d%3A0xfa74dfa61d44e408!2sEcole%20Sainte%20Anne!5e0!3m2!1sfr!2sfr!4v1637167976997!5m2!1sfr!2sfr" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    
</main>

<?php include('footer.php'); ?>