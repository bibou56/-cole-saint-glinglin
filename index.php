    <?php include('header.php'); ?>

    <main id="contenu" class="container">
        <section id="bienvenue">
            <h1>- Ecole Saint Glinglin -</h1>
            <p>Bienvenue sur le site de l'école Saint Glinglin. Notre école maternelle et primaire est idéalement située dans la commune de Bigoublen.
                En plein coeur du bourg, nous accueillons les élèves,
                de la Toute Petite Section au CM2, dans un cadre chaleureux
                et à taille humaine. </p>              
        </section>

        <div class="transition-rouge"></div>

        <!-- <div id="bloc"> -->
            <section id="a-retenir">
                <h2>- Dates et Infos à retenir -</h2>
                <div id="bloc-infos">
                    <img src="images/agenda.bis.jpg" width="250" alt="board">
                    <p><span class="date">10/12/2021:</span> Marché de Noël et chants des enfants</p>
                    <p><span class="date">04/12/2021:</span> Venez récupérer votre sapin de Noël à l'école!</p>
                    <p><span class="date">25/11/2021:</span> Début des cours de natation pour les CP/CE1</p>
                    <p><span class="date">16/11/2021:</span> N'oubliez pas de passer commande pour vos chocolats de Noël!</p>
                </div>
            </section>

            <div class="transition-rouge moyen"></div>

            <section id="actualites">
                <h2>- Nos actualités -</h2>
                <!-- boucle pr afficher un article pr mobiles et tablettes -->
                <?php for($i=0; $i<1; $i++){?>

                    <article class="actu">           
                        <img src="<?= $allArticles[$i]->getImg() ?>">
                        <div class="texte-post">
                            <h3><?= $allArticles[$i]->getTitle() ?><span class="dateblog">22/10/2021</span></h3>
                            <p><?= $allArticles[$i]->getAccroche() ?></p>
                            <div class="btn_actu">
                                <a href="<?= $allArticles[$i]->getUrl() ?>">Lire la suite</a>
                            </div>
                        </div>      
                    </article>
                    <?php }; ?>

                    <!-- boucle pr afficher 3 articles format PC -->
                    <?php for($i=1; $i<3; $i++){?>
                        <article class="actu cache">
                        <img src="<?= $allArticles[$i]->getImg() ?>">
                        <div class="texte-post">
                            <h3><?= $allArticles[$i]->getTitle() ?><span class="dateblog">22/10/2021</span></h3>
                            <p><?= $allArticles[$i]->getAccroche() ?></p>
                            <div class="btn_actu">
                                <a href="<?= $allArticles[$i]->getUrl() ?>">Lire la suite</a>
                            </div>
                        </div>      
                    </article>
                    <?php }; ?>


                <!-- <article class="actu">
                    <img src="images/celebration-toussaint.jpg" alt="messe de la Toussaint">
                    <div class="texte-post">
                        <p>22/10/2021</p>
                        <h3>- Célébration de la Toussaint -</h3>   
                         <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Illum eius voluptatem consectetur, voluptates veritatis veniam.</p> 
                        <div class="btn_actu">
                            <a href="toussaint2021.php">Lire l'article</a>
                        </div>
                    </div>
                </article>

                <article class="actu cache">
                    <img src="images/pommier.jpg" alt="verger">
                    <div class="texte-post">
                        <p>10/10/2021</p>
                        <h3>- Visite du Musée de la Pomme -</h3> 
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Eum, temporibus quia? Architecto vitae possimus dolor?</p>
                        <div class="btn_actu">
                            <a href="musee-pomme2021.php">Lire l'article</a>
                        </div>
                    </div>
                </article>

                <article class="actu cache">
                    <img src="images/fete-rentree.jpg" alt="dessin enfants se donnant la main">
                    <div class="texte-post">
                        <p>20/09/2021</p>
                        <h3>- La fête de la rentrée -</h3> 
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Obcaecati fugit odit voluptatum numquam, repudiandae eveniet.</p>
                        <div class="btn_actu">
                            <a href="fete-rentree2021.php">Lire l'article</a>
                        </div>
                    </div>
                </article> -->
                <div id="voirplus"><a href="actualites.php">En voir plus...</a></div>      
            </section>
        </div>

        <div class="transition-rouge"></div>

        <section id="vie-classes">
            <h2>- La vie des classes -</h2>
            <p>Accédez à votre accès sécurisé</p>
            <div class="classes">
                <a href="#">TPS/PS/MS</a>
                <a href="#">GS</a>
                <a href="#">CP/CE1</a>
                <a href="#">CE1/CE2</a>
                <a href="#">CM1/CM2</a>
            </div>
        </section>

        <div class="transition-rouge hidden"></div>

        <nav id="acces-menu">
            <ul>
                <li class="orange"><a href="#">LA VIE DE L'ECOLE</a></li>
                <li class="jaune"><a href="actualites.php">NOS ACTUALITES</a></li>
                <li class="vert"><a href="#">LES CLASSES</a></li>
                <li class="bleu"><a href="#">INFOS PRATIQUES</a></li>
                <li class="indigo"><a href="contact.php">CONTACT</a></li>

            </ul>
        </nav>

        
    </main>

    <?php include('footer.php'); ?>