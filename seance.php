<?php

class Seance{
    //ATTRIBUT : encapsulation typage date_variable
    private string $date;
    private string $heure;
    private Film $film;

    /*
    CONSTRUCTEUR
    */

    public function __construct(string $date, string $heure, Film $film) {
        $this->date = $date;
        $this->heure = $heure;
        $this->film = $film;
    }

    //GETTER ET SETTER
    //Getter : méthode dont le but est de lire la valeur d'un attribut

    public function getdate(): string {
        return $this->date;
    }

    public function getheure(): string {
        return $this->heure;
    }

    public function getFilm(): Film {
        return $this->film;
    }

    
    //Setter : méthode dont le but est de modifier la valeur d'un attribut

    public function setdate(string $date): void {
        $this->date = $date;
    }

    public function setheure(string $heure): void {
        $this->heure = $heure;
    }

    public function setFilm(Film $film): void {
        $this->film = $film;
    }
   
}