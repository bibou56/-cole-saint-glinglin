<?php

require_once("./Article.php");

$article1 = new Article("images/celebration-toussaint.jpg", "- Célébration de la Toussaint -", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
Illum eius voluptatem consectetur, voluptates veritatis veniam.", "http://localhost/projet/toussaint2021.php");

$article2 = new Article("images/pommier.jpg", "- Visite du Musée de la Pomme -", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
Illum eius voluptatem consectetur, voluptates veritatis veniam.", "http://localhost/projet/musee-pomme2021.php");

$article3 = new Article("images/fete-rentree.jpg", "- La fête de la rentrée -", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
Illum eius voluptatem consectetur, voluptates veritatis veniam.", "http://localhost/projet/fete-rentree2021.php");

$article4 = new Article("images/rentree.jpg", "- C'est bientôt la rentrée ! -", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
Illum eius voluptatem consectetur, voluptates veritatis veniam.", "http://localhost/projet/rentree2021.php");

$article5 = new Article("images/ete.jpg", "- Bon été à tous ! -", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
Illum eius voluptatem consectetur, voluptates veritatis veniam.", "http://localhost/projet/ete2021.php");

$article6 = new Article("images/kermesse.jpg", "- La kermesse -", "Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
Illum eius voluptatem consectetur, voluptates veritatis veniam.", "http://localhost/projet/kermesse2021.php");


$allArticles = [$article1, $article2, $article3, $article4, $article5, $article6];