<?php

class Article{
    private int $id;
    private string $created_at;
    private string $img;
    private string $titre;
    private string $accroche;
    private string $url;


    function __construct(string $created_at, string $img, string $titre, string $accroche, string $url){
        $this->created_at = $created_at;
        $this->img = $img;
        $this->titre = $titre;
        $this->accroche = $accroche;
        $this->url = $url;
    }

    //date de crétaion de l'article
    function setCreation(string $date){
        $this->created_at = $date;
    }
    function getCreation(){
        return $this->created_at;
    }

    //image article
    function setImg(string $image){
        $this->img = $image;
    }
    function getImg(){
        return $this->img;
    }

    //titre
    function setTitle(string $title){
        $this->titre = $title;
    }
    function getTitle(){
        return $this->titre;
    }

    //accroche
    function setAccroche(string $summary){
        $this->accroche = $summary;
    }
    function getAccroche(){
        return $this->accroche;
    }

    //url
    function setUrl(string $adresse){
        $this->url = $adresse; 
    }
    function getUrl(){
        return $this->url;
        //return "http://localhost/projet/" . $this->url;
    }
}