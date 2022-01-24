    <?php include('header.php'); ?>

    <main id="contenu" class="container">
        <section id="posts-blog">       
            <h1>- NOS ACTUALITES -</h1>
            <?php foreach($allArticles as $allArticle){ ?>

            <article class="actu">           
                <img src="<?= $allArticle->getImg() ?>">
                <div class="texte-post">
                    <h3><?= $allArticle->getTitle() ?><span class="dateblog">22/10/2021</span></h3>
                    <p><?= $allArticle->getAccroche() ?></p>
                    <div class="btn_actu">
                        <a href="<?= $allArticle->getUrl() ?>">Lire la suite</a>
                    </div>
                </div>      
            </article>
        <?php }; ?>

            <!-- <article class="actu">
                <img src="images/pommier.jpg" alt="verger">
                <div class="texte-post">
                    <h3>- Visite du Musée de la Pomme - <span class="dateblog">10/10/2021</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Eum, temporibus quia? Architecto vitae possimus dolor?</p>
                    <div class="btn_actu">
                        <a href="musee-pomme2021.php">Lire la suite</a>
                    </div>
                </div>
            </article>

            <article class="actu">
                <img src="images/fete-rentree.jpg" alt="dessin enfants se donnant la main">
                <div class="texte-post">
                    <h3>- La fête de la rentrée - <span class="dateblog">20/09/2021</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Obcaecati fugit odit voluptatum numquam, repudiandae eveniet.</p>
                    <div class="btn_actu">
                        <a href="fete-rentree2021.php">Lire la suite</a>
                    </div>
                </div>
            </article>

            <article class="actu">
                <img src="images/rentree.jpg" alt="fournitures scolaires">
                <div class="texte-post">
                    <h3>- C'est bientôt la rentrée! - <span class="dateblog">18/08/2021</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sed ducimus placeat odio voluptates eos eaque.</p>
                    <div class="btn_actu">
                        <a href="rentree2021.php">Lire la suite</a>
                    </div>
                </div>
            </article>

            <article class="actu">
                <img src="images/ete.jpg" alt="tournesols">
                <div class="texte-post">
                    <h3>- Bon été à tous! - <span class="dateblog">05/07/2021</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sed ducimus placeat odio voluptates eos eaque.</p>
                    <div class="btn_actu">
                        <a href="ete2021.php">Lire la suite</a>
                    </div>
                </div>
            </article>

            <article class="actu">
                <img src="images/kermesse.jpg" alt="ballons de toutes les couleurs dans le ciel bleu">
                <div class="texte-post">
                    <h3>- La kermesse - <span class="dateblog">28/06/2021</span></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Sed ducimus placeat odio voluptates eos eaque.</p>
                    <div class="btn_actu">
                        <a href="kermesse2021.php">Lire la suite</a>
                    </div>
                </div>
            </article> -->

            <div id="pagination-blog"><a href="#" class="clique-page">Page Précédente -</a> Page 1/1 - <a href="#" class="clique-page">Page Suivante</a></div>
        </section>
    </main>

    <?php include('footer.php'); ?>

    
